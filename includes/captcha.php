<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

if (!function_exists('rastomed_captcha_prune')) {

	function rastomed_captcha_prune()
	{
		if (empty($_SESSION['rastomed_captcha']) || !is_array($_SESSION['rastomed_captcha'])) {
			$_SESSION['rastomed_captcha'] = array();
			return;
		}

		$now = time();
		foreach ($_SESSION['rastomed_captcha'] as $key => $entry) {
			$expired = !is_array($entry)
				|| !isset($entry['answer'], $entry['exp'], $entry['tries'])
				|| $entry['exp'] < $now
				|| $entry['tries'] >= 5;
			if ($expired) {
				unset($_SESSION['rastomed_captcha'][$key]);
			}
		}
	}

	function rastomed_captcha_question()
	{
		$operator = rand(0, 2);

		if ($operator === 0) {
			$a = rand(2, 20);
			$b = rand(1, 20);
			return array($a . ' + ' . $b . ' = ?', $a + $b);
		}

		if ($operator === 1) {
			$a = rand(6, 30);
			$b = rand(1, $a - 1);
			return array($a . ' - ' . $b . ' = ?', $a - $b);
		}

		$a = rand(2, 9);
		$b = rand(2, 9);
		return array($a . ' x ' . $b . ' = ?', $a * $b);
	}

	function rastomed_captcha_image($question)
	{
		if (!function_exists('imagecreatetruecolor')) {
			return '';
		}

		$font = 5;
		$padX = 16;
		$padY = 12;
		$width = max(160, imagefontwidth($font) * strlen($question) + ($padX * 2));
		$height = imagefontheight($font) + ($padY * 2);

		$image = imagecreatetruecolor($width, $height);
		$background = imagecolorallocate($image, 241, 243, 245);
		imagefill($image, 0, 0, $background);

		$line = imagecolorallocate($image, 211, 218, 225);
		for ($i = 0; $i < 7; $i++) {
			imageline(
				$image,
				rand(0, $width - 1),
				rand(0, $height - 1),
				rand(0, $width - 1),
				rand(0, $height - 1),
				$line
			);
		}

		$dot = imagecolorallocate($image, 198, 206, 214);
		for ($i = 0; $i < 50; $i++) {
			imagesetpixel($image, rand(0, $width - 1), rand(0, $height - 1), $dot);
		}

		$textWidth = imagefontwidth($font) * strlen($question);
		$text = imagecolorallocate($image, 13, 71, 161);
		imagestring($image, $font, (int)(($width - $textWidth) / 2), $padY, $question, $text);

		ob_start();
		imagepng($image);
		$raw = ob_get_clean();
		imagedestroy($image);

		return 'data:image/png;base64,' . base64_encode($raw);
	}

	function rastomed_captcha_create()
	{
		rastomed_captcha_prune();

		list($question, $answer) = rastomed_captcha_question();
		$id = bin2hex(random_bytes(8));

		$_SESSION['rastomed_captcha'][$id] = array(
			'answer' => (string) $answer,
			'exp'    => time() + 600,
			'tries'  => 0,
		);

		return array(
			'id'       => $id,
			'question' => $question,
			'src'      => rastomed_captcha_image($question),
		);
	}

	function rastomed_captcha_markup($captcha)
	{
		$token = htmlspecialchars($captcha['id'], ENT_QUOTES, 'UTF-8');
		$inputId = 'captcha_' . $captcha['id'];
		$question = htmlspecialchars($captcha['question'], ENT_QUOTES, 'UTF-8');

		if (!empty($captcha['src'])) {
			$visual = '<img class="captcha-box__graphic" src="' . $captcha['src'] . '" alt="Captcha question: ' . $question . '">';
		} else {
			$visual = '<span class="captcha-box__graphic captcha-box__graphic--text">' . $question . '</span>';
		}

		return '<div class="captcha-box" data-captcha-box>'
			. '<label class="captcha-box__label" for="' . $inputId . '">Verification *</label>'
			. '<div class="captcha-box__row">'
			. '<span class="captcha-box__image">' . $visual . '</span>'
			. '<input type="text" id="' . $inputId . '" name="captcha" class="captcha-box__input" placeholder="Type the answer" autocomplete="off" inputmode="numeric" required>'
			. '<input type="hidden" name="captcha_id" value="' . $token . '">'
			. '</div>'
			. '<p class="captcha-box__hint">Are you human? Enter the answer shown above.</p>'
			. '</div>';
	}

	function rastomed_captcha_render()
	{
		echo rastomed_captcha_markup(rastomed_captcha_create());
	}

	function rastomed_captcha_payload()
	{
		return array('html' => rastomed_captcha_markup(rastomed_captcha_create()));
	}

	function rastomed_captcha_verify()
	{
		$tokenId = isset($_POST['captcha_id']) ? trim((string) $_POST['captcha_id']) : '';
		$value = isset($_POST['captcha']) ? trim((string) $_POST['captcha']) : '';

		if ($tokenId === '' || empty($_SESSION['rastomed_captcha'][$tokenId])) {
			return array('ok' => false, 'message' => 'Verification expired. A new captcha has been loaded, please try again.');
		}

		$entry = $_SESSION['rastomed_captcha'][$tokenId];

		if ($entry['exp'] < time()) {
			unset($_SESSION['rastomed_captcha'][$tokenId]);
			return array('ok' => false, 'message' => 'Verification expired. A new captcha has been loaded, please try again.');
		}

		if ($value === '') {
			return array('ok' => false, 'message' => 'Please solve the captcha before submitting.');
		}

		if ($entry['tries'] >= 5) {
			unset($_SESSION['rastomed_captcha'][$tokenId]);
			return array('ok' => false, 'message' => 'Too many incorrect attempts. A new captcha has been loaded, please try again.');
		}

		if (hash_equals($entry['answer'], $value)) {
			unset($_SESSION['rastomed_captcha'][$tokenId]);
			return array('ok' => true, 'message' => '');
		}

		$_SESSION['rastomed_captcha'][$tokenId]['tries'] = $entry['tries'] + 1;
		return array('ok' => false, 'message' => 'Incorrect captcha answer. Please try again.');
	}
}

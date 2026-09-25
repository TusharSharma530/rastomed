<?php

define('RASTOMED_RECAPTCHA_SITE_KEY', '6LfBGs4tAAAAABAa8yv-Y4QEm7PR9QJFJUl8zlyn');
define('RASTOMED_RECAPTCHA_SECRET_KEY', '6LfBGs4tAAAAAKQuFneYW7UDK1y6XSD2wNrVb2BD');
define('RASTOMED_RECAPTCHA_VERIFY_URL', 'https://www.google.com/recaptcha/api/siteverify');

if (!function_exists('rastomed_recaptcha_site_key')) {

	function rastomed_recaptcha_site_key()
	{
		return RASTOMED_RECAPTCHA_SITE_KEY;
	}

	function rastomed_recaptcha_widget($id)
	{
		$domId = preg_replace('/[^A-Za-z0-9_-]/', '', (string) $id);

		return '<div class="recaptcha-box" data-recaptcha-box>'
			. '<div id="' . $domId . '" class="recaptcha-holder" data-recaptcha-holder></div>'
			. '</div>';
	}

	function rastomed_recaptcha_post($url, $fields)
	{
		if (function_exists('curl_init')) {
			$ch = curl_init($url);
			curl_setopt_array($ch, array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST           => true,
				CURLOPT_POSTFIELDS     => http_build_query($fields),
				CURLOPT_TIMEOUT        => 10,
				CURLOPT_CONNECTTIMEOUT => 5,
			));
			$body = curl_exec($ch);
			curl_close($ch);
			return is_string($body) ? $body : '';
		}

		$context = stream_context_create(array(
			'http' => array(
				'method'  => 'POST',
				'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
				'content' => http_build_query($fields),
				'timeout' => 10,
			),
		));
		$body = @file_get_contents($url, false, $context);
		return is_string($body) ? $body : '';
	}

	function rastomed_recaptcha_verify()
	{
		$token = isset($_POST['g-recaptcha-response']) ? trim((string) $_POST['g-recaptcha-response']) : '';
		if ($token === '') {
			return array('ok' => false, 'message' => 'Please complete the reCAPTCHA verification.');
		}

		$body = rastomed_recaptcha_post(RASTOMED_RECAPTCHA_VERIFY_URL, array(
			'secret'   => RASTOMED_RECAPTCHA_SECRET_KEY,
			'response' => $token,
			'remoteip' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '',
		));

		$data = json_decode($body, true);
		if (!is_array($data) || empty($data['success'])) {
			return array('ok' => false, 'message' => 'reCAPTCHA verification failed. Please try again.');
		}

		return array('ok' => true, 'message' => '');
	}
}

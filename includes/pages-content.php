<?php
/**
 * Helpers for pages table: plain-text description (no HTML in DB).
 * Format:
 *   - blank line = new paragraph
 *   - ## Heading = h2
 *   - ### Heading = h3
 *   - - item = list item (legal-arrow-list)
 */

function pages_html_to_plain($html) {
	$html = (string)$html;
	if (trim($html) === '') {
		return '';
	}
	$html = preg_replace('/<br\s*\/?>/i', "\n", $html);
	$html = preg_replace('/<h2[^>]*>/i', "\n\n## ", $html);
	$html = preg_replace('/<h3[^>]*>/i', "\n\n### ", $html);
	$html = preg_replace('/<h[1456][^>]*>/i', "\n\n## ", $html);
	$html = preg_replace('/<li[^>]*>/i', "\n- ", $html);
	$html = preg_replace('/<\/(p|ul|ol|div|article|table|tr|blockquote)>/i', "\n\n", $html);
	$html = preg_replace('/<\/h[1-6]>/i', "\n\n", $html);
	$html = preg_replace('/<\/li>/i', "\n", $html);
	$text = strip_tags($html);
	$text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
	$text = str_replace("\xc2\xa0", ' ', $text);
	$text = preg_replace('/[ \t]+/', ' ', $text);
	$text = preg_replace('/ *\n */', "\n", $text);
	$text = preg_replace('/\n\n- /', "\n- ", $text);
	$text = preg_replace('/\n{3,}/', "\n\n", $text);
	return trim($text);
}

function pages_plain_input($value) {
	$value = (string)$value;
	if (strpos($value, '<') !== false && strpos($value, '>') !== false) {
		return pages_html_to_plain($value);
	}
	$value = str_replace("\r\n", "\n", $value);
	return trim($value);
}

/**
 * Options:
 *   list_class - class for <ul> (default legal-arrow-list; '' for bare ul)
 *   intro      - use legal-page__intro on leading paragraphs (default true)
 *   article    - wrap content in article.legal-page__section (default true)
 */
function render_pages_description($text, $opts = []) {
	$listClass = $opts['list_class'] ?? 'legal-arrow-list';
	$useIntro = array_key_exists('intro', $opts) ? (bool)$opts['intro'] : true;
	$useArticle = array_key_exists('article', $opts) ? (bool)$opts['article'] : true;

	$text = str_replace(["\r\n", "\r"], "\n", (string)$text);
	$text = trim($text);
	if ($text === '') {
		return '';
	}

	$lines = explode("\n", $text);
	$html = '';
	$articleOpen = false;
	$listOpen = false;
	$seenHeading = false;
	$paraBuf = [];

	$flushPara = function () use (&$paraBuf, &$html, &$articleOpen, &$seenHeading, $useIntro, $useArticle) {
		if (!$paraBuf) {
			return;
		}
		$para = trim(implode("\n", $paraBuf));
		$paraBuf = [];
		if ($para === '') {
			return;
		}
		$esc = nl2br(htmlspecialchars($para, ENT_QUOTES, 'UTF-8'));
		if ($useIntro && !$seenHeading && !$articleOpen) {
			$html .= '<p class="legal-page__intro">' . $esc . "</p>\n";
			return;
		}
		if ($useArticle && !$articleOpen) {
			$html .= '<article class="legal-page__section">' . "\n";
			$articleOpen = true;
		}
		$html .= '<p>' . $esc . "</p>\n";
	};

	$closeList = function () use (&$listOpen, &$html) {
		if ($listOpen) {
			$html .= "</ul>\n";
			$listOpen = false;
		}
	};

	$ensureArticle = function () use (&$articleOpen, &$html, $useArticle) {
		if ($useArticle && !$articleOpen) {
			$html .= '<article class="legal-page__section">' . "\n";
			$articleOpen = true;
		}
	};

	$listOpenTag = $listClass !== '' ? '<ul class="' . htmlspecialchars($listClass, ENT_QUOTES, 'UTF-8') . '">' : '<ul>';

	foreach ($lines as $line) {
		$t = trim($line);

		if ($t === '') {
			$flushPara();
			$closeList();
			continue;
		}

		if (preg_match('/^###\s+(.*)$/', $t, $m)) {
			$flushPara();
			$closeList();
			$ensureArticle();
			$seenHeading = true;
			$html .= '<h3>' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . "</h3>\n";
			continue;
		}

		if (preg_match('/^##\s+(.*)$/', $t, $m)) {
			$flushPara();
			$closeList();
			$ensureArticle();
			$seenHeading = true;
			$html .= '<h2>' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . "</h2>\n";
			continue;
		}

		if (preg_match('/^[-*]\s+(.*)$/', $t, $m)) {
			$flushPara();
			$ensureArticle();
			$seenHeading = true;
			if (!$listOpen) {
				$html .= $listOpenTag . "\n";
				$listOpen = true;
			}
			$html .= '<li>' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . "</li>\n";
			continue;
		}

		if ($listOpen) {
			$closeList();
		}
		$paraBuf[] = rtrim($line);
	}

	$flushPara();
	$closeList();
	if ($articleOpen) {
		$html .= "</article>\n";
	}
	return $html;
}

<?php
/**
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('PROJECT_APP_PATH', __DIR__);
define('PROJECT_DOMAIN', 'wmde-bericht2017.test');

// Variables that are always available in views.
$lang = 'de';
$path = $_SERVER['REQUEST_URI'];
$isCanonical = false;

// Configure g11n stack early and strip locale from URL.
if (preg_match('#^/(de|en)(/.*)?#', $path, $matches)) {
	$isCanonical = true;
	$lang = $matches[1];
	$path = '/' . ltrim($matches[2], '/');
}

// Used to construct URLs in the view.
$url = function($goal, $lang) {
	$path = $lang . '/' . trim($goal, '/');
	return '/' . trim($path, '/');
};

// Used to construct a URL for switching the language, but
// staying on the same page.
$switchLanguageFromUrl = function($lang) use ($url) {
	return $url($lang === 'de' ? 'en' : 'de');
};

$viewFileFromURI = function($path, $lang) {
	// $path may contain query string
	$path = parse_url($path, PHP_URL_PATH);

	$viewBase = PROJECT_APP_PATH . '/views/pages/' . $lang;
	$viewName = str_replace('/', '_', trim($path, '/'));

	$viewFile = $viewBase . '/' . $viewName . '.php';
	$viewFile = realpath($viewFile);

	if ($viewName === '') {
		return $viewBase . '/home.php';
	}

	// Prevent directory traversal attack
	// see http://stackoverflow.com/a/4205278
	if ($viewFile === false || strpos($viewFile, $viewBase) !== 0) {
		return false;
	}
	return $viewFile;
};

// Match incoming request to routes and invoke the corresponding handler,
// once a route matched.
$routes = [];

$routes['#^/$#'] = function() {
	$reports = require PROJECT_APP_PATH .'/data/reports.php';
	$facts = require PROJECT_APP_PATH .'/data/facts.php';
	$fact = $facts[array_rand($facts)];
	return compact('reports', 'facts', 'fact');
};
$routes['#^/review$#'] = function() {
	$facts = require PROJECT_APP_PATH .'/data/facts.php';
	return compact('facts');
};
$routes['#^/report$#'] = function($matches, $query) {
	$reports = require PROJECT_APP_PATH .'/data/reports.php';

	if (isset($query['filter'])) {
		$reports = array_filter($reports, function($v) use ($query) {
			return $v['category'] === $query['filter'];
		});
	}
	return compact('reports');
};
$routes['#^/report/(.*)$#'] = function($matches) {
	$reports = require PROJECT_APP_PATH .'/data/reports.php';
	$report = null;

	foreach ($reports as $_report) {
		if ($_report['name'] === $matches[1]) {
			$report = $_report;
			break;
		}
	}
	return compact('report');
};

$routeMatched = false;
foreach ($routes as $regex => $handler) {
	if (preg_match($regex, parse_url($path, PHP_URL_PATH), $matches)) {
		$query = parse_url($path, PHP_URL_QUERY);
		parse_str($query, $query);

		extract($handler($matches, $query), EXTR_SKIP);

		$routeMatched = true;
		break;
	}
}
if (!$routeMatched) {
	header('HTTP/1.1 404 Not Found');
	exit();
}

// Some pages will need an inverted header.
$hasBlackHeader = (boolean) preg_match('#^(/report/?|/finance/fund)$#', $path);

// Render the template as a view.
$viewFile = $viewFileFromURI($path, $lang);

if ($viewFile === false || trim($path, '/') === 'home') {
	header('HTTP/1.1 404 Not Found');
	exit();
}

require PROJECT_APP_PATH . '/views/elements/' . $lang . '/header.php';
require $viewFile;
require PROJECT_APP_PATH . '/views/elements/' . $lang . '/footer.php';

?>
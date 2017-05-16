<?php

define('APP_PATH', dirname(__DIR__));
define('DOMAIN', 'wmde-bericht2016.dev');

// default language is german
$lang = 'de';
$path = $_SERVER['REQUEST_URI'];
$isCanonical = false;

// language controller
if (preg_match('#^/(de|en)(/.*)?#', $path, $matches)) {
	$isCanonical = true;
	$lang = $matches[1];
	$path = '/' . ltrim($matches[2], '/');
}

// link controller
$url = function($goal, $lang) {
	$path = $lang . '/' . trim($goal, '/');
	return '/' . trim($path, '/');
};

$translateFrom = function($path, $lang) use ($url) {
	if ($lang === 'de') {
		return $url($path, 'en');
	} elseif ($lang === 'en') {
		return $url($path, 'de');
	}
};

// view controller
$viewFileFromURI = function($path, $lang) {
	$viewBase = APP_PATH . '/views/pages/' . $lang;
	$viewName = str_replace('/', '_', trim($path, '/'));

	$viewFile = $viewBase . '/' . $viewName . '.php';
	$viewFile = realpath($viewFile);

	if ($viewName === '') {
		return $viewBase . '/home.php';
	}

	// prevent directory traversal attack
	// see http://stackoverflow.com/a/4205278
	if ($viewFile === false || strpos($viewFile, $viewBase) !== 0) {
		return false;
	}
	return $viewFile;
};

// view renderer
$viewFile = $viewFileFromURI($path, $lang);

if ($viewFile === false || trim($path, '/') === 'home') {
	header('HTTP/1.1 400 Bad Request');
	exit();
}

// "Model" Layer
if ($path === '/') {
	$facts = require APP_PATH .'/data/facts.php';
	$fact = $facts[array_rand($facts)];
}
if ($path === '/review') {
	$facts = require APP_PATH .'/data/facts.php';
}
if (preg_match('#^(/|/report)$#', $path)) {
	$reports = require APP_PATH .'/data/reports.php';
}
if (preg_match('#^/report/(.*)$#', $path, $matches)) {
	$reports = require APP_PATH .'/data/reports.php';
	$report = null;

	foreach ($reports as $_report) {
		if ($_report['name'] === $matches[1]) {
			$report = $_report;
			break;
		}
	}
}

// Some pages will need an inverted header.
$hasBlackHeader = (boolean) preg_match('#^(/report/?|/finance/fund)$#', $path);

require APP_PATH . '/views/elements/' . $lang . '/header.php';
require $viewFile;
require APP_PATH . '/views/elements/' . $lang . '/footer.php';

?>
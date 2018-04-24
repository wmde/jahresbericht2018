<?php
/**
 * Wikimedia Jahresbericht 2017
 *
 * Copyright (c) 2017 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by the AGPL v3
 * license that can be found in the LICENSE file.
 */

define('PROJECT_CONTEXT', 'dev');
define('PROJECT_APP_PATH', __DIR__);
define('PROJECT_DOMAIN', 'wmde-bericht2017.test');

if (PROJECT_CONTEXT === 'dev') {
	error_reporting(E_ALL);
	ini_set('display_errors', true);
} else {
	ini_set('display_errors', false);
}

$routes = [];
$helpers = [];
$viewVars = [];
$scripts = [];

$lang = 'de';
$path = $_SERVER['REQUEST_URI'];
$isCanonical = false;

// Configure g11n stack early and strip locale from URL.
if (preg_match('#^/(de|en)(/.*)?#', $path, $matches)) {
	$isCanonical = true;
	$lang = $matches[1];
	$path = '/' . ltrim($matches[2], '/');
}

//
// Helpers
//

// Used to construct URLs in the view.
$helpers['url'] = function($goal, $lang) {
	$path = $lang . '/' . trim($goal, '/');
	return '/' . trim($path, '/');
};

// Used to construct a URL for switching the language, but
// staying on the same page.
$helpers['switchLanguageFromUrl'] = function($lang) use ($path) {
	return rtrim('/' . ($lang === 'de' ? 'en' : 'de') . '' . $path, '/');
};

//
// Scripts
//
$scripts[] = 'views/layouts/default';

// Constructs a script path for the current page path. And will check if a script under
// that name is present in the filesystem. If not simply returns `null` otherwise
// it returns the script path, good for constructing the full script URL.
//
// Does not support pages with underscores.
$fragment = null;

if (!ltrim($path, '/')) {
	$fragment = 'pages/home';
} elseif (strpos($path, '/report') === 0)  {
	$fragment = 'pages/report';
} else {
	$fragment = 'pages/' . ltrim($path, '/');
}

if (file_exists(PROJECT_APP_PATH . '/assets/js/views/' . $fragment . '.js')) {
	$scripts[] = "views/{$fragment}";
}

//
// Routes
//

$routes['#^/$#'] = function() {
	$reports = require PROJECT_APP_PATH .'/data/reports.php';
	$facts = require PROJECT_APP_PATH .'/data/facts.php';
	$fact = $facts[array_rand($facts)];

	return compact('reports', 'facts', 'fact') + [
		'hasBlackHeader' => false
	];
};
$routes['#^/finance#'] = function($path) {
	return ['hasBlackHeader' => $path !== '/finance'];
};
$routes['#^/report$#'] = function($path, $query, $matches) {
	$filter = isset($query['filter']) ? $query['filter'] : null;

	$reports = require PROJECT_APP_PATH .'/data/reports.php';
	$filters = require PROJECT_APP_PATH .'/data/report_filters.php';

	if ($filter) {
		$reports = array_filter($reports, function($v) use ($filter) {
			return $v['category'] === $filter;
		});
		foreach ($filters as $f) {
			if ($f['name'] === $filter) {
				$filter = $f;
				break;
			}
		}
	}

	return compact('reports', 'filter', 'filters') + [
		'hasBlackHeader' => false
	];
};
$routes['#^/report/(.*)$#'] = function($path, $query, $matches) {
	$reports = require PROJECT_APP_PATH .'/data/reports.php';
	$report = null;

	foreach ($reports as $_report) {
		if ($_report['name'] === $matches[1]) {
			$report = $_report;
			break;
		}
	}
	return compact('report') + [
		'hasBlackHeader' => true
	];
};

//
// Functions
//

// Matches current request against registered routes and
// returns view variables.
$matchRoute = function($path, $routes) {
	$query = parse_url($path, PHP_URL_QUERY);
	parse_str($query, $query);

	$path = parse_url($path, PHP_URL_PATH);

	foreach ($routes as $regex => $handler) {
		if (preg_match($regex, $path, $matches)) {
			return $handler($path, $query, $matches);
		}
	}
	return false;
};

$renderView = function($viewVars, $scripts, $helpers, $_path, $_lang) {
	$_viewFileFromURI = function($path, $lang) {
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
	$_viewFile = $_viewFileFromURI($_path, $_lang);

	if ($_viewFile === false || trim($_path, '/') === 'home') {
		return false;
	}
	extract($helpers, EXTR_SKIP);
	extract($viewVars, EXTR_SKIP);

	require PROJECT_APP_PATH . '/views/elements/' . $_lang . '/header.php';
	require $_viewFile;
	require PROJECT_APP_PATH . '/views/elements/' . $_lang . '/footer.php';
};

//
// Handle the request
//
$viewVars += compact('lang', 'isCanonical', 'path');

if (($viewVars += $matchRoute($path, $routes)) === false) {
	header('HTTP/1.1 404 Not Found');
	exit();
}
if ($renderView($viewVars, $scripts, $helpers, $path, $lang) === false) {
	header('HTTP/1.1 404 Not Found');
	exit();
}

?>

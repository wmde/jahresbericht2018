<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Jahresbericht 2016</title>

	<!-- mark up the canonical page and any other variants; use complete url -->
	<!-- in this case, pages in default language are duplicated; prefer the prefixed '/de' paths -->
	<!-- see https://support.google.com/webmasters/answer/139066?visit_id=0-636295122699147333-3497274728&rd=1#2 -->
	<link rel="canonical" href="<?= trim(trim(DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">

<?php if ($isCanonical): ?>
	<!-- each language page should identify different language versions, including itself -->
	<!-- no need to list hreflang on non-canonical - in this case, unprefixed - urls -->
	<!-- see https://support.google.com/webmasters/answer/189077 -->
	<link rel="alternate" hreflang="de" href="<?= trim(trim(DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">
	<link rel="alternate" hreflang="en" href="<?= trim(trim(DOMAIN, '/') . '/en/' . trim($path, '/'), '/') ?>">
<?php endif ?>

	<link rel="icon" href="/assets/ico/app.png?v=__PROJECT_VERSION_BUILD__">
	<link rel="stylesheet" href="/assets/css/reset.css?v=__PROJECT_VERSION_BUILD__">
	<link rel="stylesheet" href="/assets/css/base.css?v=__PROJECT_VERSION_BUILD__">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

	<script src="/assets/js/require.js?v=__PROJECT_VERSION_BUILD__"></script>
	<script src="/assets/js/base.js?v=__PROJECT_VERSION_BUILD__"></script>
	<script src="/assets/js/views/pages/home.js?v=__PROJECT_VERSION_BUILD__"></script>
</head>

<body>

<header>
	<div class="main-logo">Logo</div>
	<h1>Wikimedia Jahresrückblick 2016</h1>
	<nav class="main-menu">
		<ul>
			<li><a href="<?= $url('/', $lang) ?>">Startseite</a></li>
			<li><a href="<?= $url('review', $lang) ?>">Jahresrückblick</a></li>
			<li><a href="<?= $url('report', $lang) ?>">Themen</a></li>
			<li><a href="<?= $url('finance', $lang) ?>">Finanzreport</a></li>
			<li><a href="<?= $translateFrom($path, $lang) ?>">Switch to English page</a></li>
		</ul>
	</nav>
</header>
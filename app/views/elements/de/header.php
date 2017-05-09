<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Jahresbericht 2016</title>

	<?php
	// mark up the canonical page and any other variants; use complete url
	// in this case, pages in default language are duplicated; prefer the prefixed '/de' paths
	// see https://support.google.com/webmasters/answer/139066?visit_id=0-636295122699147333-3497274728&rd=1#2
	?>
	<link rel="canonical" href="<?= trim(trim(DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">

<?php if ($isCanonical): ?>
	<?php
	// each language page should identify different language versions, including itself
	// no need to list hreflang on non-canonical - in this case, unprefixed - urls
	// see https://support.google.com/webmasters/answer/189077
	?>
	<link rel="alternate" hreflang="de" href="<?= trim(trim(DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">
	<link rel="alternate" hreflang="en" href="<?= trim(trim(DOMAIN, '/') . '/en/' . trim($path, '/'), '/') ?>">
<?php endif ?>

	<link rel="icon" href="/assets/ico/app.png?v=__PROJECT_VERSION__">
	<link rel="stylesheet" href="/assets/css/reset.css?v=__PROJECT_VERSION__">
	<link rel="stylesheet" href="/assets/css/base.css?v=__PROJECT_VERSION__">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

	<script src="/assets/js/require.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/base.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/views/pages/home.js?v=__PROJECT_VERSION__"></script>
</head>
<body>

<header class="main-header">
	<div class="cp">
		<div class="limit--l clearfix">
			<a class="logo logo--white main-header__logo image-replace" href="<?= $url('/', $lang) ?>">Wikimedia Deutschland</a>
			<nav class="nav main-header__nav">
				<ul class="nav__list">
					<li><a class="nav__link" href="<?= $url('/', $lang) ?>">Startseite</a></li>
					<li><a class="nav__link" href="<?= $url('review', $lang) ?>">Jahresrückblick</a></li>
					<li><a class="nav__link" href="<?= $url('report', $lang) ?>">Themen</a></li>
					<li><a class="nav__link" href="<?= $url('finance', $lang) ?>">Finanzen</a></li>
				</ul>
			</nav>
			<a class="lang-switch t--epsilon" href="<?= $translateFrom($path, $lang) ?>">English</a>
		</div>
	</div>
</header>
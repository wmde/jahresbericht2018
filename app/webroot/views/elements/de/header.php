<?php

// Page Title Controller
$title = ['Jahresbericht 2018'];

if (isset($report)) {
	$title[] = $report['title'][$lang];
} elseif ($path === '/report') {
	$title[] = 'Themen';
} elseif ($path === '/report/monuments') {
	$title[] = 'Wikipedia Loves Monuments';
} elseif ($path === '/finance') {
	$title[] = 'Finanzreport';
} elseif ($path === '/finance/assn') {
	$title[] = 'Finanzen WMDE e.V.';
} elseif ($path === '/finance/fund') {
	$title[] = 'Finanzen Fördergesellschaft';
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title><?php echo implode(' – ', array_reverse($title)) ?> – Wikimedia Deutschland e. V.</title>

	<?php
	// mark up the canonical page and any other variants; use complete url
	// in this case, pages in default language are duplicated; prefer the prefixed '/de' paths
	// see https://support.google.com/webmasters/answer/139066?visit_id=0-636295122699147333-3497274728&rd=1#2
	?>
	<link rel="canonical" href="<?= trim(trim(PROJECT_DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">

<?php if ($isCanonical): ?>
	<?php
	// each language page should identify different language versions, including itself
	// no need to list hreflang on non-canonical - in this case, unprefixed - urls
	// see https://support.google.com/webmasters/answer/189077
	?>
	<link rel="alternate" hreflang="de" href="<?= trim(trim(PROJECT_DOMAIN, '/') . '/de/' . trim($path, '/'), '/') ?>">
	<link rel="alternate" hreflang="en" href="<?= trim(trim(PROJECT_DOMAIN, '/') . '/en/' . trim($path, '/'), '/') ?>">
<?php endif ?>

	<link rel="icon" href="/assets/ico/app.png?v=__PROJECT_VERSION__">
	<link rel="stylesheet" href="/assets/css/normalize.css?v=__PROJECT_VERSION__">
	<link rel="stylesheet" href="/assets/css/base.css?v=__PROJECT_VERSION__">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116576892-1"></script>
	<script>
		// window.dataLayer = window.dataLayer || [];
		// function gtag(){dataLayer.push(arguments);}
		// gtag('js', new Date());
		//
		// gtag('config', 'UA-116576892-1', { 'anonymize_ip': true });
	</script>

	<script src="/assets/js/compat/core.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/require.js?v=__PROJECT_VERSION__"></script>
	<script src="/assets/js/base.js?v=__PROJECT_VERSION__"></script>
	<?php foreach ($scripts as $script): ?>
		<script async src="/assets/js/<?= $script ?>.js?v=__PROJECT_VERSION__"></script>
	<?php endforeach ?>
</head>
<body>

<?php if ($hasBlackHeader): ?>
<div class="cp real-logo-black real-logo">
<?php else: ?>
<div class="cp real-logo-white real-logo">
<?php endif ?>
	<a class="logo main-header__logo image-replace logo--s" href="<?= $url('/', $lang) ?>">Wikimedia Deutschland</a>
</div>
<div class="mn-container cp">
	<div class="mn-close"></div>
	<ul class="mn__list">
		<li><a class="mn__link" href="<?= $url('report', $lang) ?>">Themen</a></li>
		<li><a class="mn__link" href="<?= $url('finance', $lang) ?>">Finanzen</a></li>
	</ul>
	<div class="mn__mini-nav">
		<a class="t--epsilon lang-switch" href="<?= $switchLanguageFromUrl($lang) ?>">English Site</a>
		<a class="pdf-download t--epsilon" download href="/assets/doc/jahresbericht_2017_de.pdf">PDF</a>
		<a class="t--epsilon" href="https://spenden.wikimedia.de/apply-for-membership?piwik_campaign=jb2017&piwik_kwd=mitglieds_btn" target="new">Mitglied werden</a>
	</div>
</div>

<header
	<?php if ($hasBlackHeader): ?>
		class="main-header main-header--black"
	<?php else: ?>
		class="main-header main-header--white"
	<?php endif ?>
>
	<div class="cp">
		<div class="limit--l clearfix">
			<a class="logo main-header__logo image-replace logo--l" href="<?= $url('/', $lang) ?>">Wikimedia Deutschland</a>
			<nav class="nav main-header__nav">
				<ul class="nav__list">
					<li>
						<a
							class="nav__link<?= (preg_match('#^/report.*$#', $path) ? ' active' : '')?>"
							href="<?= $url('report', $lang) ?>"
						>
							Themen
						</a>
					</li>
					<li>
						<a
							class="nav__link<?= (preg_match('#^/finance.*$#', $path) ? ' active' : '')?>"
							href="<?= $url('finance', $lang) ?>"
						>
							Finanzen
						</a>
					</li>
				</ul>
				<main class="nav__list--upper">
					<a class="lang-switch" href="<?= $switchLanguageFromUrl($lang) ?>">English Site</a>
					<a class="pdf-download" download href="/assets/doc/jahresbericht_2017_de.pdf">PDF</a>
					<a href="https://spenden.wikimedia.de/apply-for-membership?piwik_campaign=jb2017&piwik_kwd=mitglieds_btn" target="new">Mitglied werden</a>
				</main>
			</nav>
			<nav class="nav mobile__nav">
				<div class="nav__link mn-trigger">Menü</div>
			</nav>
		</div>
	</div>
</header>

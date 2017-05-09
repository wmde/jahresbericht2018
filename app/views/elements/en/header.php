<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<title>Annual report 2016</title>

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

<header>
	<div class="main-logo">Logo</div>
	<h1>Wikimedia Annual Review 2016</h1>
	<nav class="main-menu">
		<ul>
			<li><a href="<?= $url('/', $lang) ?>">Homepage</a></li>
			<li><a href="<?= $url('review', $lang) ?>">Annual review</a></li>
			<li><a href="<?= $url('report', $lang) ?>">Subjects</a></li>
			<li><a href="<?= $url('finance', $lang) ?>">Finance report</a></li>
			<li><a href="<?= $translateFrom($path, $lang) ?>">Zur deutschen Seite wechseln</a></li>
		</ul>
	</nav>
</header>

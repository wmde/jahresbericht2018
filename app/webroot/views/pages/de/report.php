<main class="report-landing cp--6x-bottom">

		<?php if ($filter): ?>
		<section class="report-landing-hero cp cp--4x-top cp--4x-bottom">
			<div class="filter">
				<div class ="filter-head">
					<a href="<?= $url('report/' . $report['name'], $lang) ?>" class="filter-head--back h--delta">Zur Übersicht</a>
					<div class="filter-head--menu h--gamma"><?= $filter['title'][$lang] ?></div>
					<img class="filter-head--image" src="/assets/img/cube_themen_orange.svg" alt="">
					<div class="filter-text t--gamma-serif"><?= $filter['teaser'][$lang] ?></div>
				</div>
			</div>
		</section>
		<?php else: ?>
		<section class="report-landing-hero cp cp--6x-top cp--4x-bottom">
			<h1 class="h--beta report-landing-hero__title">Unsere Themen im Überblick</h1>
			<div class="report-landing-hero__cubes limit--l cp--2x-top">
				<?php foreach ($filters as $f): ?>
					<a
						class="report-landing-hero__cube nav-cube"
						href="?filter=<?= $f['name'] ?>"
					>
						<span class="nav-cube__title t--epsilon-emph"><?= $f['title'][$lang] ?></span>
					</a>
				<?php endforeach ?>
			</div>
		</section>
		<?php endif ?>


	<div class="limit--m report-landing__jbs">
		<div class="jb-hsplit-list">
		<?php foreach ($reports as $report): ?>
			<a class="jb-hsplit" href="<?= $url('report/' . $report['name'], $lang) ?>">
				<div class="bg--big-icons-green jb-hsplit__overlay"></div>
				<figure
					class="jb-hsplit__cover"
					style="background-image: url('<?= $report['cover'] ?>');"
				></figure>
				<div class="jb-hsplit__content">
					<h1 class="h--gamma jb-hsplit__title"><?= $report['title'][$lang] ?></h1>
					<p class ="h--delta jb-hsplit__title">&mdash; Zum Projekt</p>
				</div>
			</a>
		<?php endforeach ?>
			<!-- <a class="jb-hsplit" href="<?= $url('/report/monuments', $lang) ?>">
				<div class="bg--big-icons-green jb-hsplit__overlay"></div>
				<figure
					class="jb-hsplit__cover"
					style="background-image: url('/assets/img/13_monuments_hero.jpg');"
				></figure>
				<div class="jb-hsplit__content">
					<h1 class="h--gamma jb-hsplit__title">Wiki Loves Monuments</h1>
				</div>
			</a> -->
		</div>
	</div>
</main>

<main class="report-landing cp--6x-bottom">

	<section class="report-landing-hero cp cp--6x-top cp--4x-bottom">
		<h1 class="h--beta report-landing-hero__title">Unsere Themen im Überblick</h1>
		<div class="report-landing-hero__cubes limit--l cp--2x-top">
			<?php foreach ($filters as $f): ?>
				<a
					class="report-landing-hero__cube nav-cube<?= ($filter == $f['name'] ? ' active' : '') ?>"
					href="?filter=<?= $f['name'] ?>"
				>
					<span class="nav-cube__title t--epsilon-emph"><?= $f['title'][$lang] ?></span>
				</a>
			<?php endforeach ?>
		</div>
	</section>

	<div class="limit--m report-landing__jbs">
		<div class="jb-hsplit-list">
		<?php foreach ($reports as $report): ?>
			<a class="jb-hsplit" href="<?= $url('report/' . $report['name'], $lang) ?>">
				<div class="jb-hsplit__overlay bg--big-icons-green">
					<figure class="jb-hsplit__bg-icon">
						<img src="<?= $report['icon'] ?>" alt="">
					</figure>
					<span class="button button--outline-white">
						Zu diesem Thema
					</span>
				</div>
				<figure
					class="jb-hsplit__cover"
					style="background-image: url('<?= $report['cover'] ?>');"
				></figure>
				<div class="jb-hsplit__content">
					<h1 class="h--beta jb-hsplit__title"><?= $report['title'][$lang] ?></h1>
				</div>
			</a>
		<?php endforeach ?>
			<a class="jb-hsplit" href="<?= $url('/report/monuments', $lang) ?>">
				<div class="jb-hsplit__overlay bg--big-icons-green">
					<span class="button button--outline-white">
						Zu diesem Thema
					</span>
				</div>
				<figure
					class="jb-hsplit__cover"
					style="background-image: url('/assets/img/13_monuments_hero.jpg');"
				></figure>
				<div class="jb-hsplit__content">
					<h1 class="h--beta jb-hsplit__title">Wiki Loves Monuments</h1>
				</div>
			</a>
		</div>
	</div>
</main>
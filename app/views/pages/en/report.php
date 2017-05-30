<main class="report-landing bg--icons-light-blue cp cp--6x-top cp--6x-bottom">
	<h1 class="h--beta report-landing__title">Focal points’ overview</h1>

	<div class="limit--m">
		<div class="jb-hsplit-list">
		<?php foreach ($reports as $report): ?>
			<a class="jb-hsplit" href="<?= $url('report/' . $report['name'], $lang) ?>">
				<div class="jb-hsplit__overlay bg--big-icons-green">
					<figure class="jb-hsplit__bg-icon">
						<img src="<?= $report['icon'] ?>" alt="">
					</figure>
					<span class="button button--outline-white">
						More on this focal point
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
						More on this focal point
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
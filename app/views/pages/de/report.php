<main class="report-landing bg--icons-lavender cp cp--nav-zone">
	<h1 class="h--beta">Unsere Themen im Überblick</h1>

	<div class="jb-hsplit-list">
		<?php foreach ($reports as $report): ?>
		<div class="jb-hsplit">
			<figure
				class="jb-hsplit__cover"
				style="background-image: url('<?= $report['cover'] ?>');"
			></figure>
			<div class="jb-hsplit__content">
				<h1 class="h--beta jb-hsplit__title"><?= $report['title'][$lang] ?></h1>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</main>
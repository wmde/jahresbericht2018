<main class="home">
	<div class="wrapper">
		<section class="home-hero cp cp--nav-zone">
			<div class="limit--l">
				<div class="home-hero__title h--beta">
					Wikimedia<br>
					Deutschland<br>
					Jahresbericht<br>
					2017
				</div>
				<img class="home-hero__17" src="assets/img/17.png" alt="2017">
			</div>
		</section>
		<div class="home-hero__img t--zeta">
			<img class="home-hero__img--first" src="assets/img/wk_conference_colored.jpg">
			<figure
				class="home-hero__img--second"
				data-anchor-target=".home-hero__img--second"
				data-0="opacity:1;"
				data-500="opacity:0;"
				>
				<img class="home-hero__img--second" src="assets/img/wk_conference_tinted.jpg">
			</figure>
			<p>René Zieger (Wikimedia Commons), CC BY-SA 4.0</p>
		</div>
		<section class="section cp home__intro">
			<img src="assets/img/wk_conference_tinted.jpg">
			<div class="home__intro--layer"></div>
		</section>
		<div class="home__box">
			<div class="limit--m h--alpha">Gemeinsam wissen wir mehr</div>
		</div>
	</div>
	</section>
	<section class="reports clearfix cp--component-section loading">
		<div class="reports__left">
			<div class="reports__canvas">
				<div class="reports__cube reports__cube--1"></div>
				<div class="reports__cube reports__cube--2"></div>
				<div class="reports__cube reports__cube--3"></div>
			</div>
		</div>
		<ul>
			<li class="reports--store" data-url="">Movement Strategy(1)</li>
			<li class="reports--store" data-url="">Fellow Programm(2)</li>
			<li class="reports--store" data-url="">Freiwillige Unterstützen(3)</li>
			<li class="reports--store" data-url="">Freiwillige Unterstützen(4)</li>
			<li class="reports--store" data-url="">Freiwillige Unterstützen(5)</li>
			<li class="reports--store" data-url="">Freiwillige Unterstützen(6)</li>
			<li class="reports--store" data-url="">Freiwillige Unterstützen(7)</li>
			<li class="reports--store" data-url="">Freiwillige Unterstützen(8)</li>
		</ul>
		<div class="reports__right">
			<div class="reports__link-wrapper">
				<a class="reports__link h--beta" href="">
					<div class="reports__link-title">Movement Strategy</div>
					<div class="reports__link-project t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Projekt</div>
				</a>
				<a class="reports__link h--beta" href="">
					<div class="reports__link-title">Fellow Programm</div>
					<div class="reports__link-project t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Projekt</div>
				</a>
				<a class="reports__link h--beta" href="">
					<div class="reports__link-title">Freiwillige unterstützen</div>
					<div class="reports__link-project t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Projekt</div>
				</a>
			</div>
			<button class="animation-ctl-button reports__button reports__button--reload invis">
				<div class="animation-ctl-button__symbol"></div>
				Neue Themen laden
			</button>
			<button class="animation-ctl-button reports__button reports__button--all invis">
				<div class="animation-ctl-button__symbol"></div>
				Alle Themen anzeigen
			</button>
		</div>
	</section>
	<section class="achievements cp--component-section loading">
		<ul>
			<?php foreach($achievements as $item): ?>
			<li
				class="achievement--store"
				data-category="<?= $item['category'][$lang] ?>"
				data-number="<?= $item['number'] ?>"
				data-url="<?= $item['url'] ?>"
				data-postfix=""
			>
				<?= $item['teaser'][$lang] ?>
			</li>
			<?php endforeach ?>
		</ul>

		<div class="achievements__cube achievements__cube--mobile">
			<div class="achievements__cube-side achievements__cube-side--left">
				<div class="achievements__cube-side achievements__cube-side--left"></div>
			</div>
			<div class="achievements__cube-side achievements__cube-side--top">
				<div class="achievements__cube-side achievements__cube-side--top"></div>
			</div>
			<div class="achievements__cube-side achievements__cube-side--right">
				<div class="achievements__cube-side achievements__cube-side--right"></div>
			</div>
		</div>

		<div class="achievements__flex-wrapper">
			<div class="achievements__left">
				<div class="achievement">
					<div class="achievement__category t--epsilon">
						<?= $achievements[0]['category'][$lang] ?>
					</div>
					<div class="achievement__number t--alpha" data-number="<?= $achievements[0]['number'] ?>">
						<div class="achievement__number-placeholder">
							<?= $achievements[0]['number'] ?>
						</div>
						<div class="achievement__number-postfix"></div>
					</div>
					<div class="achievement__teaser t--delta-serif"><?= $achievements[0]['teaser'][$lang] ?></div>
					<a
						href="<?= $url($achievements[0]['teaser'], $lang) ?>"
						class="achievement__link t--zeta-emph"
					>
						&mdash;&nbsp;&nbsp; Zum Projekt
					</a>
				</div>
			</div>
			<div class="achievements__cube">
				<div class="achievements__cube-side achievements__cube-side--left">
					<div class="achievements__cube-side achievements__cube-side--left"></div>
				</div>
				<div class="achievements__cube-side achievements__cube-side--top">
					<div class="achievements__cube-side achievements__cube-side--top"></div>
				</div>
				<div class="achievements__cube-side achievements__cube-side--right">
					<div class="achievements__cube-side achievements__cube-side--right"></div>
				</div>
			</div>
			<div class="achievements__right">
				<div class="achievement">
					<div class="achievement__category t--epsilon">
						<?= $achievements[1]['category'][$lang] ?>
					</div>
					<div class="achievement__number t--alpha" data-number="<?= $achievements[1]['number'] ?>">
						<div class="achievement__number-placeholder">
							<?= $achievements[1]['number'] ?>
						</div>
						<div class="achievement__number-postfix"></div>
					</div>
					<div class="achievement__teaser t--delta-serif"><?= $achievements[1]['teaser'][$lang] ?></div>
					<a
						href="<?= $url($achievements[1]['teaser'], $lang) ?>"
						class="achievement__link t--zeta-emph"
					>
						&mdash;&nbsp;&nbsp; Zum Projekt
					</a>
				</div>
			</div>
		</div>
		<button class="achievements__button animation-ctl-button invis">
			<div class="animation-ctl-button__symbol"></div>
			Neue Erfolge laden
		</button>
	</section>
	<section class="finance-banner">
		<div class="home__bagels">
			<figure
				class="home__bagel--1"
				data-anchor-target=".finance-banner"
				data-bottom-top="transform:rotate(0deg);"
				data-top-bottom="transform:rotate(360deg);"
			>
				<img src="/assets/img/start_finanzen_circle_1.png" alt="Image of a random bagel chart">
			</figure>
			<figure
				class="home__bagel--2"
				data-anchor-target=".finance-banner"
				data-bottom-top="transform:rotate(360deg);"
				data-top-bottom="transform:rotate(0deg);"
			>
				<img src="/assets/img/start_finanzen_circle_2.png" alt="Image of random bagel chart">
			</figure>
		</div>
		<p class="h--beta">Unsere Finanzen 2017</p>
		<a class="finance-banner__button h--delta" href="<?= $url('finance', $lang) ?>">&mdash; Zum Finanzteil</a>
	</section>
</main>

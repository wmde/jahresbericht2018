<main class="home">
	<div class="wrapper">
		<section class="home-hero cp cp--nav-zone">
			<div class="limit--l">
				<div class="home-hero__title h--beta">
					Wikimedia<br>
					Deutschland<br>
					Jahresbericht<br>
					2018
				</div>
				<img class="home-hero__18" src="assets/img/18.png" alt="Das Jahr 2018">
			</div>
		</section>
		<div class="home-hero__img t--zeta">
			<img class="home-hero__img--first" src="assets/img/wk_conference_colored.jpg" alt="Wikimedia Konferenz">
			<figure
				class="home-hero__img--second"
				data-anchor-target=".home-hero__img--second"
				data-0="opacity:1;"
				data-500="opacity:0;"
				>
				<img class="home-hero__img--second" src="assets/img/wk_conference_tinted.jpg" alt="Wikimedia Konferenz">
			</figure>
			<p>Jason Krüger for Wikimedia Deutschland e.V.; adapted by user: David Saroyan (<a href="https://commons.wikimedia.org/wiki/File:Wikimedia_Conference_2017_–_Group_photo_2_(big)_with_WMCON_logo.jpg" target="new">Wikimedia Commons</a>), beschnitten, eingefärbt von Atelier Disko für WMDE, <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new"> <span style ="white-space: nowrap">CC BY-SA 4.0</span></a></p>
		</div>
		<section class="section cp home__intro">
			<img src="assets/img/wk_conference_tinted.jpg" alt="Wikimedia Konferenz">
			<div class="home__intro--layer"></div>
		</section>
		<div class="home__box">
			<div class="limit--m h--alpha">Gemeinsam wissen wir mehr</div>
		</div>
	</div>
	</section>
	<section class="achievements cp--component-section loading">
		<ul>
			<?php foreach($achievements as $item): ?>
			<li
				class="achievement--store"
				data-category="<?= $item['category'][$lang] ?>"
				data-number="<?= $item['number'] ?>"
				data-url="/<?= $lang ?><?= $item['url'] ?>"
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
							<?= $formatNumber($achievements[0]['number'], $lang) ?>
						</div>
						<div class="achievement__number-postfix"></div>
					</div>
					<div class="achievement__teaser t--delta-serif"><?= $achievements[0]['teaser'][$lang] ?></div>
					<a
						href="<?= $url($achievements[0]['teaser'], $lang) ?>"
						class="achievement__link t--zeta-emph"
					>
						&mdash;&nbsp;&nbsp; Zum Thema
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
						&mdash;&nbsp;&nbsp; Zum Thema
					</a>
				</div>
			</div>
		</div>
		<button class="achievements__button t--zeta-emph animation-ctl-button invis">
			<div class="animation-ctl-button__symbol"></div>
			Neue Erfolge laden
		</button>
	</section>
	<section class="chart cp--component-section">
		<div class="chart__container">
			<div class="chart__headline">
				<div class="chart__headline--description t--epsilon">
					März 2013 - März 2019
				</div>
				<h1 class="h--beta">Mitgliederentwicklung</h1>
			</div>

			<div class="charts loading">
				<div class="charts__texts">
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2019</span>
						<span class="chart-text__number t--epsilon-emph">72.611</span>
					</p>
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2018</span>
						<span class="chart-text__number t--epsilon-emph">65.374</span>
					</p>
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2017</span>
						<span class="chart-text__number t--epsilon-emph">43.138</span>
					</p>
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2016</span>
						<span class="chart-text__number t--epsilon-emph">29.169</span>
					</p>
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2015</span>
						<span class="chart-text__number t--epsilon-emph">15.778</span>
					</p>
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2014</span>
						<span class="chart-text__number t--epsilon-emph">9.803</span>
					</p>
					<p class="chart-text">
						<span class="chart-text__date t--epsilon">01.03.2013</span>
						<span class="chart-text__number t--epsilon-emph">2.618</span>
					</p>
				</div>

				<div class="chart-bars__animation">
					<div class="chart-bar percent-2019">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
					<div class="chart-bar percent-2018">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
					<div class="chart-bar percent-2017">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
					<div class="chart-bar percent-2016">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
					<div class="chart-bar percent-2015">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
					<div class="chart-bar percent-2014">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
					<div class="chart-bar percent-2013">
						<img class="chart-bar__image" src="/../../assets/img/charts_illustration.svg">
						<div class="inner"></div>
					</div>
				</div>
			</div>
		</div>
		<a href="https://spenden.wikimedia.de/apply-for-membership?piwik_campaign=jb2017&piwik_kwd=mitglieds_btn" target="new" class="chart__button button button--outline-white">Jetzt Mitglied werden</a>
	</section>
	<section class="reports loading clearfix cp--component-section loading">
		<ul class="reports__data">
			<?php foreach ($reports as $report) : ?>
				<li class="reports--store" data-url="<?= $url("/report/{$report['name']}", $lang) ?>" data-cover="<?= $report['cover'] ?>"><?= $report['title'][$lang] ?></li>
			<?php endforeach ?>
		</ul>
		<div class="reports__background"></div>
		<div class="reports__left">
			<div class="reports__canvas">
				<div class="reports__cube reports__cube--1"></div>
				<div class="reports__cube reports__cube--2"></div>
				<div class="reports__cube reports__cube--3"></div>
			</div>
		</div>
		<div class="reports__right">
			<div class="reports__link-wrapper">
				<a class="reports__link h--beta" href="">
					<div class="reports__link-title">Movement Strategy</div>
					<div class="reports__link-project t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Thema</div>
				</a>
				<a class="reports__link h--beta" href="">
					<div class="reports__link-title">Fellow Programm</div>
					<div class="reports__link-project t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Thema</div>
				</a>
				<a class="reports__link h--beta" href="">
					<div class="reports__link-title">Freiwillige unterstützen</div>
					<div class="reports__link-project t--zeta-emph">&mdash;&nbsp;&nbsp; Zum Thema</div>
				</a>
			</div>
			<button class="animation-ctl-button reports__button reports__button--reload t--zeta-emph invis">
				<div class="animation-ctl-button__symbol"></div>
				Neue Themen laden
			</button>
			<a href="<?= $lang . '/report' ?>" class="animation-ctl-button reports__button reports__button--all t--zeta-emph invis">
				<div class="animation-ctl-button__symbol"></div>
				Alle Themen anzeigen
			</a>
		</div>
	</section>
	<section class="finance-banner">
		<div class="limit--l cp--component-section">
			<div class="home__bagels">
				<figure
					class="home__bagel--1"
					data-anchor-target=".finance-banner"
					data-bottom-top="transform:rotate(0deg);"
					data-top-bottom="transform:rotate(360deg);"
				>
					<img src="/assets/img/home_circle_1.png" alt="Finanzvisualisierung">
				</figure>
				<figure
					class="home__bagel--2"
					data-anchor-target=".finance-banner"
					data-bottom-top="transform:rotate(360deg);"
					data-top-bottom="transform:rotate(0deg);"
				>
					<img src="/assets/img/home_circle_2.png" alt="Finanzvisualisierung">
				</figure>
			</div>
			<a href="<?= $url('finance', $lang) ?>">
				<p class="h--beta">Unsere Finanzen 2018</p>
				<p class="finance-banner__button h--delta">
					<span>&mdash;</span>
					<span>Zum Finanzteil</span>
				</p>
			</a>
		</div>
	</section>
</main>

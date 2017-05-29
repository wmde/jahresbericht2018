<main class="home">
	<section class="home-hero cp cp--nav-zone">
		<div class="limit--l">
			<h1 class="home-hero__title">
				Wikimedia<br>
				Annual Report<br>
				2016
			</h1>
			<img class="home-hero__16" src="assets/img/16_b.png" alt="2016">
		</div>
	</section>
	<section class="section cp bg--icons-white home__intro">
		<div class="section__body">
			<h1 class="h--beta">Dear Readers,</h1>
			<div class="limit--l">
				<h2 class="section__heading"><div>Welcome</div></h2>
				<div class="limit--s">
					<p class="t--gamma-serif">In January 2016, Wikipedia had its 15th anniversary and celebrations were held in many locations across the world. At Wikimedia Deutschland, we marked this occasion throughout the entire year. In December, as a gift to Wikipedia’s active contributors, we entrusted a disc with Wikipedia articles in nearly 180 languages to a private mission to outer space. The global Wikipedia community decided collectively which articles should be immortalized on the moon as a snapshot of the knowledge of mankind. The initiative shows how far the idea of an encyclopedia that everyone can openly edit in just 15 years has come. It is the most successful project of its kind, used by millions of people – and it would be unthinkable without the effort of thousands of volunteers.</p>
					<p class="t--gamma-serif">Fifteen years after Wikipedia’s birth, open knowledge means a lot more than free articles on a website: communities write, take pictures, follow projects, meet virtually and in person. We support them at Wikimedia Deutschland and try to inspire even more people to participate. We develop software that makes work in the projects easier. We are, moreover, committed to establishing a political and legal framework so that knowledge can also be openly shared and used in the future. In the pages that follow, we not only take a look at these three areas of emphasis, but at all the areas that shaped the work of our organization in 2016.</p>
					<p class="t--gamma-serif">Wikipedia is only possible thanks to the people who contribute to it. This is also true of the work of Wikimedia Deutschland and our many members – 50,000 at the start of 2017 – and donors. Many thanks to everyone who supported us in 2016!</p>
				</div>
			</div>
			<div class="limit--m figs">
				<figure class="fig">
					<img class="fig__image" src="/assets/img/abraham_taherivand.jpg" alt="Porträt von Abraham Taherivand">
					<figcaption class="fig__caption">Abraham Taherivand<br>Executive Director</figcaption>
				</figure>
				<figure class="fig">
					<img class="fig__image" src="/assets/img/tim_moritz_hector.jpg" alt="Porträt von Tim Moritz Hector">
					<figcaption class="fig__caption">Tim Moritz Hector<br>Chair of the Supervisory Board</figcaption>
				</figure>
			</div>
		</div>
	</section>
	<section class="section cp--center-section bg--green home__facts">
		<div class="bg--stripe"></div>
		<div class="section__body limit--l">
			<h2 class="section__heading"><div>Year in Review 2016</div></h2>
			<div class="section__body">
				<div class="jb-fact limit--s">
					<figure class="fig jb-fact__icon">
						<img src="<?= $fact['icon'] ?>"></img>
					</figure>
					<div class="jb-fact__content">
						<?php if ($fact['head'][$lang] !== ''): ?>
							<p class="t--delta jb-fact__content-head"><?= $fact['head'][$lang] ?></p>
						<?php endif ?>
						<h1 class="h--alpha jb-fact__title"><?= $fact['number'][$lang] ?></h1>
						<p class="t--delta"><?= $fact['tail'][$lang] ?></p>
						<a class="button" href="<?= $url('review', $lang) ?>">See all facts</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section cp--center-section bg--icons-light-blue">
		<div class="limit--l">
			<h2 class="section__heading"><div>Projects</div></h2>
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<?php foreach ($reports as $report): ?>
					<div class="swiper-slide">
						<div class="jb-vsplit">
							<figure
								class="jb-vsplit__cover"
								style="background-image: url('<?= $report['cover'] ?>');"
							></figure>
							<div class="jb-vsplit__content">
								<h1 class="h--beta jb-vsplit__title"><?= $report['title'][$lang] ?></h1>
								<div class="jb-vsplit__teaser">
									<?php echo $report['teaser'][$lang] ?>
								</div>
								<a
									class="jb-vsplit__button button button--outline-green"
									href="<?= $url('report/' . $report['name'], $lang) ?>"
								>
									Go to this project
								</a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="swiper-button-next swiper-button-next--green"></div>
				<div class="swiper-button-prev swiper-button-prev--green"></div>
			</div>
			<div class="section__actions">
				<a class="button button--bg-green" href="<?= $url('report', $lang) ?>">Go to project overview</a>
			</div>
		</div>
	</section>
	<section class="finance-banner">
		<div class="home__bagels">
			<?php // animation powered by skrollr; vertical translation according to bagel css values, e.g. "top" or "bottom" ?>
			<figure
				class="home__bagel--1"
				data-anchor-target=".finance-banner"
				data-bottom-top="top: -700px; transform:rotate(-180deg);"
				data-top-bottom="top: 100px; transform:rotate(180deg);"
			>
				<img src="/assets/img/start_finanzen_circle_1.png" alt="Image of a random bagel chart">
			</figure>
			<figure
				class="home__bagel--2"
				data-anchor-target=".finance-banner"
				data-bottom-top="bottom: 0px; transform:rotate(80deg);"
				data-top-bottom="bottom: -800px; transform:rotate(0deg);"
			>
				<img src="/assets/img/start_finanzen_circle_2.png" alt="Image of random bagel chart">
			</figure>
		</div>
		<h1 class="h--alpha">Finances 2016</h1>
		<a class="button finance-banner__button" href="<?= $url('finance', $lang) ?>">Go to financial section</a>
	</section>
	<section class="section cp--upped-section home__join">
		<h1 class="h--beta">Become a member online!</h1>
		<div class="section__body">
			<p class="t--delta">It’s easy and it starts at only 2 euros per month.</p>
		</div>
		<div class="section__actions">
			<a href="http://wmde.org/WikimediaMitglied" target="new" class="button button--bg-green">Become a member</a>
		</div>
	</section>
</main>
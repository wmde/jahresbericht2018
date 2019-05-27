<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			At the Wikimedia Conference 2018, hosted by Wikimedia Deutschland, Wikimedians discussed passionately how the Wikimedia movement needs to adapt to be able to achieve its 2030 goals.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Vkw.studiogood" target="new">
				Jason Krüger for Wikimedia Deutschland e. V.
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:Wikimedia_Conference_2018_–_108.jpg" target="new">
				Wikimedia Conference 2018 – 108
			</a>,

			cutout by <a href="https://atelierdisko.de" target="new">Atelier Disko</a> for WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Wikimedia 2030</em>
			</h1>
			<div class="section__teaser t--gamma">
				What do we – the international Wikimedia movement – want to build and achieve in the next 10-15 years? What should Wikimedia be known for in the world in 2030? And who will have joined our movement? We have been dealing with these questions since 2017.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					We have now determined where we want to go: Wikimedia has set itself the goal of becoming the most important supporting structure for the entire Free Knowledge movement – and everyone who wants to join us ought to be welcome at any time.
				</p>
				<?php if (isset($achievements[0])): ?>
					<div class="achievement-box">
						<span class="achievement-box__category t--epsilon">
							<?= $achievements[0]['category'][$lang] ?>
						</span>
						<span class="achievement-box__number h--alpha">
							<?= $formatNumber($achievements[0]['number'], $lang) ?>
						</span>
						<span class="achievement-box__teaser t--delta-serif">
							<?= $achievements[0]['teaser'][$lang] ?>
						</span>
					</div>
				<?php endif ?>
				<p>
					We want to achieve this through our two goals "Knowledge as a Service" and "Knowledge Equity". Knowledge as a service embodies above all the idea of being the platform for the world’s knowledge – everyone can contribute, but also change it, and continue to put it to use in each person’s context. Knowledge equity means that we want to focus even more on people and their knowledge, who were previously excluded due to power structures and privileges as well as political or social hurdles.
				</p>
				<p>
					These are noble goals. But how do we achieve them? What do we have to change in our structures in and around the Wikimedia projects in order to be where we want to be in 2030?
				</p>
				<p>
					Wikimedia Deutschland has been working intensively on these questions since the middle of last year – together with numerous full-time employees and volunteers of the global Wikimedia movement. In nine thematic working groups, about 117 Wikimedians develop recommendations on how we can modernize our structures to such an extent that we can successfully pursue this new course together. Wikimedia Deutschland supports this process in the best possible way, because we believe that this extensive and inclusive process is essential for the future of Free Knowledge.
				</p>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--l">
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<video controls>
									<source src="https://upload.wikimedia.org/wikipedia/commons/transcoded/1/1b/Knowledge_belongs_to_all_of_us_-_2030.wikimedia.org.webm/Knowledge_belongs_to_all_of_us_-_2030.wikimedia.org.webm.1080p.vp9.webm" type="video/webm; codecs=vp9">
								</video>
							</div>
							<div class="video__caption limit--s">
								<a href="https://commons.wikimedia.org/wiki/File:Knowledge_belongs_to_all_of_us_-_2030.wikimedia.org.webm" target="new">
								Knowledge belongs to all of us
								</a>
								<br>
								Video by Victor Grigas, Wikimedia Foundation, Cinematography by Anne Braun, Music by Wake and Lawrence Grey
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">
									CC BY-SA 4.0
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--s">
			<div class="border-box border-box--report">
				<div class="t--delta">LINKS</div>
				<ul class="bullet-list">
					<li>
						Learn more on the
						<a href="https://2030.wikimedia.org " target="new">project website</a>
					<li>
						Blog:
						<a href="https://blog.wikimedia.de/2018/05/07/free-knowledge-worldwide-the-faces-behind-wikimedia-part-1/" target="new">Free Knowledge Worldwide: The Faces behind Wikimedia – Part 1</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/05/07/free-knowledge-worldwide-the-faces-behind-wikimedia-part-1/" target="new">Wikimedia 2030: Wikimedia’s role in shaping the future of the information commons</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/search" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>Technical wishes</p>
		</a>
	</section>
</main>

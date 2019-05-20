<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			In 2018, interested people in German-speaking countries had the opportunity to take a look behind the scenes of Wikipedia.
		<!-- (<a href="https://commons.wikimedia.org/wiki/File:Gruppenfoto_WikiCon2017_IMG_9159_LR10_by_Stepro.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a> -->
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Visiting Wikipedia</em>
			</h1>
			<div class="section__teaser t--gamma">
				For several years now, the number of voluntary editors who share their knowledge with everyone on Wikipedia has been declining. Wikimedia Deutschland has been actively trying to counteract this development since 2016. After all, if not enough people write articles in Wikipedia, correct mistakes, add pictures and keep information up-to-date, the quality of the free online encyclopedia will suffer. What Wikipedia urgently needs are new people who want to participate in the most famous knowledge project of our time.
			</div>
			<div class="section__body t--gamma-serif">
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
					In recent years Wikimedia Deutschland has therefore tried to attract more people to work on Wikipedia. This always includes fundamental educational work on the functioning of the encyclopedia: Many readers of Wikipedia are still not aware that everyone can participate and that Wikipedia is exclusively built on voluntary commitment. With large banner campaigns we have shown easy ways to participate, but with only moderate success: Even if many people understood that everyone can participate in Wikipedia – only very few took the step to long-term participation. Improved online help services for Wikipedia newcomers, such as explanatory videos or help pages, were also unable to reverse the trend of author decline.
				</p>
				<p>
					In 2018, we tried several new approaches to get more people excited about working with Wikipedia. We have continued to focus on improved online services for newcomers, which have resulted in four guided training modules, amongst other things, teaching newcomers the basics of editing the encyclopedia. A new participation page shows in which fields of knowledge Wikipedia still has gaps and which articles are no longer up-to-date, so that new editors can directly start their collaboration on the encyclopedia with concrete tasks in mind.
				</p>
				<p>
					The biggest activity to attract new Wikipedia volunteers, however, took place far away from the computer and focused on personal exchange: On Sunday, 28 October 2018, a total of 11 local communities from the German-speaking countries invited visitors to take a look behind the scenes of Wikipedia and talk to active authors on site. Together with Wikimedia Österreich and Wikimedia Schweiz, Wikimedia Deutschland supported the big Wikipedia day in planning and organising the event as well as by developing  online banners that pointed to the individual venues. And with great success: The rush on the day took the volunteers in the local Wikipedia offices by surprise: More than 850 visitors jumped at the opportunity to visit volunteer communities in Ulm, Augsburg, Stuttgart, Munich, Cologne, Hanover, Hamburg, Berlin, Zurich, Linz and Vienna.
				</p>
				<?php if (isset($achievements[1])): ?>
				<div class="achievement-box">
					<span class="achievement-box__category t--epsilon">
						<?= $achievements[1]['category'][$lang] ?>
					</span>
					<span class="achievement-box__number h--alpha">
						<?= $achievements[1]['number'] ?>
					</span>
					<span class="achievement-box__teaser t--delta-serif">
						<?= $achievements[1]['teaser'][$lang] ?>
					</span>
				</div>
				<?php endif ?>
				<p>
					The programme on the Wikipedia day was designed by the volunteers themselves and could hardly have been more varied. In addition to questions about Wikipedia and introductory courses on working on articles, photos also played an important role. For example, visitors in Stuttgart were able to scan historical photos. Elsewhere, there were insights into drone photography. And in Cologne, traditional dishes such as ‘bean soup with half a chicken’ were first cooked and then photographed. The Augsburg community organized a photo walk, during which cultural-historical monuments and a museum were visited and documented for Wikipedia.
				</p>
				<p>
					In all 11 cities, volunteers and staff drew a common conclusion: there is lots of interest in how Wikipedia works and getting to know the "real people behind it". It remains to be seen whether this interest will lead to a greater readiness to become active on Wikipedia as well. We will build on the success of the Wikipedia day in 2019 and try out further ways to ensure the quality and continuity of Wikipedia for the future.
				</p>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--l">
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<img src="/../../../assets/img/reports/day_of_action_additional.jpg"></img>
							</div>
							<div class="video__caption limit--s">
								Wikipedia up close: At the first Wikipedia day, volunteer authors talk about their work in 11 local Wikipedia offices.
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
						<a href="https://blog.wikimedia.de/2019/03/22/wikipedia-day-an-unexpected-huge-success/" target="new">Blog article</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/future" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Ausblick 2019</p>
		</a>
	</section>
</main>

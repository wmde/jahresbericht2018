<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Lena Schall (motionensemble.de) (<a href="https://commons.wikimedia.org/wiki/File:Figur_Machmit_3_Wikipedia-Animation.png" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Getting more people excited about Wikipedia</em>
			</h1>
			<div class="section__teaser t--gamma">
				Almost everyone has looked up something on Wikipedia at some time or other. For some people this is perhaps just once or twice a year, many others do this daily. It is now hard to imagine life without the free online encyclopaedia. What many do not realise is that Wikipedia is created exclusively by volunteer authors in their free time. However, the number of active contributors providing their knowledge to keep the German language version of Wikipedia alive by writing, expanding, improving, updating and illustrating articles has been decreasing for several years. We consider this downward trend in the number of Wikipedia authors to be a threat to a lively and diverse community and to the quality of the content in Wikipedia. We have attempted to do something about this in 2017.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					But how do you convince people who primarily use Wikipedia as a reference to actively contribute? We attempted to do just that in 2017 using four banner campaigns. Within Wikipedia, we displayed a clear call to action for people to participate. This could be in the form of proofreading for errors, or putting images into articles. Wikipedia readers who clicked on the banner were taken to a site with resources such as explanatory videos, online training and guided tours making it easier for new contributors to get going with Wikipedia.
				</p>
				<p>
					We used these campaigns to test different ideas and assumptions. What is more likely to appeal to Wikipedia readers: A simple and down-to-earth banner design, or a colourful and striking one? Which is better at motivating people: Generally asking for help, or displaying in the banner itself just how easily the article source can be edited? We tried these and many other things in the four campaigns and evaluated the results. Throughout the year, findings from the previous campaigns were used for the next.
				</p>
				<?php if (isset($achievements[0])): ?>
				<div class="achievement-box">
					<span class="achievement-box__category t--epsilon">
						<?= $achievements[0]['category'][$lang] ?>
					</span>
					<span class="achievement-box__number h--alpha">
						<?= $achievements[0]['number'] ?>
					</span>
					<span class="achievement-box__teaser t--delta-serif">
						<?= $achievements[0]['teaser'][$lang] ?>
					</span>
				</div>
				<?php endif ?>
				<p>
					In doing so, we were able to achieve some level of success. 1,531 people created a Wikipedia user account as a result of our banner campaigns, 334 of them successfully started working on articles. This means that we are able to convince people to actively contribute their knowledge to Wikipedia. The resources we produced were able to successfully explain how to participate in Wikipedia.
				</p>
					Have our banner campaigns in 2017 successfully managed to ward off the decreasing  number of contributors that represent such a threat to Wikipedia? Certainly not. But we have learned a lot. For example, we know that whilst the campaigns were running, more people created a user account in order to start editing Wikipedia than otherwise would have. This means that the campaigns are reaching readers and convincing them to participate. Surveys have shown us that still too few people are aware that everyone is able to contribute to Wikipedia. The campaigns have helped to spread awareness of this possibility.
				<p>
					Despite this, the campaigns are just a first step. They raise awareness. But the road to creating active Wikipedia contributors is long. Throughout 2018, we want to use the findings from our campaigns in 2017 to develop and test new options. We will continue to improve the resources for new users and therefore increase the proportion of people regularly contributing to Wikipedia. Furthermore, we will help the existing community to provide support to new authors getting started with Wikipedia.
				</p>
				<p>

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
								<iframe src="https://www.youtube-nocookie.com/embed/CL3P62YWOY4?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								At Wikimedia Deutschland’s 20th General Assembly on 17. 06. 2017 in Bamberg, we presented one of the main topics of our work: attract and retain new volunteers for Wikipedia
								<a href="http://commons.wikimedia.org/wiki/File:Neue_Ehrenamtliche_gewinnen_und_halten_-_Video_von_der_20._Mitgliederversammlung_-_Langversion.webm" target="new">Wikimedia deutschland is looking for new Volunteers for Wikipedia</a>, creative director: Elisabeth Mandl, camera and editing:  Stefan Brainbauer for Wikimedia Deutschland
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/knowledge" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Share knowledge more easily</p>
		</a>
	</section>
</main>

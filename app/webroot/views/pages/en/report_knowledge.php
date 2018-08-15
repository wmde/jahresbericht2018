<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Elisabeth Mandl (WMDE) (<a href="https://commons.wikimedia.org/wiki/File:22._Mitgliederversammlung_28.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Share knowledge more easily</em>
			</h1>
			<div class="section__teaser t--gamma">
				With the right tools, great things can be created more easily. The volunteers who create content for Wikipedia also need the best tools so that they can contribute to Free Knowledge as effortlessly as possible. Within our Technical Wishes project, we are improving the software behind Wikipedia and working to develop better tools together with the people who are using it: the volunteers from the Wikimedia projects.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Ideas for new or improved software features are collected together with the community  via surveys. In 2017, a total of 450 Wikimedia contributors (twice the number as in the last survey) submitted, discussed and prioritised 188 technical wishes. 2017 saw the implementation of various features including an advanced search form that significantly improved complex searches within Wikipedia. Yet another wish that was fulfilled was the improved view for comparing two versions of Wikipedia articles. Changes to the text within added sections are now highlighted, making them easier to follow.
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
					The new tools that were developed benefit more than just German Wikipedia contributors: They facilitate the work being done not only in the almost 300 different language versions of Wikipedia, but throughout all Wikimedia projects in all languages. Ideas that originate from the German language version of Wikipedia must be turned into features that can be used internationally. This means, for example, that they must work with languages that are written from right to left.
				</p>
				<p>
					The most important tool for fulfilling technical wishes is still the contact we have with volunteers and listening to their needs. The weekly online discussion with the Wikimedia Deutschland development team, started in 2017, was very well received and enhanced the work done by all parties. We also work closely with the development teams at the Wikimedia Foundation in San Francisco and exchange ideas on a regular basis. More technical wishes will be fulfilled in 2018 and new features provided that will make it even easier to work with Free Knowledge.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/wikicon" class="button button--report">
			<p class="button--small">next topic</p>
			<p>WikidataCon: the first international Wikidata conference</p>
		</a>
	</section>
</main>

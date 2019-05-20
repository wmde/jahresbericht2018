<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			The proverbial search for the needle in the haystack: The improved search function makes it easier to find content in Wikipedia.
			<!-- (<a href="https://commons.wikimedia.org/wiki/File:Wikidatacon-2017-group-pano-1.jpg" target="new">Wikimedia Commons</a>), beschnitten von Atelier Disko für WMDE, <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a> -->
			</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Advanced Search for Wikipedia & Co.</em>
			</h1>
			<div class="section__teaser t--gamma">
				Together with Wikipedia volunteers and the Wikimedia Foundation, Wikimedia Deutschland is improving the software behind Wikipedia & Co. in the Technical Wishes project. The results are of benefit to everyone who is involved in Wikimedia projects as well as the many thousands who use Wikipedia every day to search for information. A good example of the great effect of such software improvements is the new specialized search mask.
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
					The German-language Wikipedia alone has more than 2.2 million articles (as of December 2018). Attempting to find specific content can sometimes feel like the proverbial search for the needle in the haystack. That’s why if you go and search the world’s largest encyclopedia, you will see a new interface that provides several common search terms. No longer will people looking for their favorite type of salad be faced with the dilemma of 50,000 search results for rocket. More specifically, <a href="https://en.wikipedia.org/wiki/Special:Search" target="new">search pages</a> now have an additional visual interface that provides several common search options. For instance, when you type space, Nasa, and missile into the field “Not this text” and salad into “One of these words”, you can narrow your search for rocket down to <a href="https://en.wikipedia.org/w/index.php?search=rocket+-space+-NASA+-missile+salad&title=Special%3ASearch&profile=advanced&fulltext=1&advancedSearch-current=%7B%22options%22%3A%7B%22not%22%3A%5B%22space%22%2C%22NASA%22%2C%22missile%22%5D%2C%22or%22%3A%5B%22salad%22%5D%7D%2C%22namespaces%22%3A%5B0%5D%7D&ns0=1" target="new">little more than 100 results</a>. Other options are to search in page titles, for exact text, to look for pages in certain categories, with a particular template, etc.
				</p>
				<p>
					These changes, called <a href="https://meta.wikimedia.org/wiki/WMDE_Technical_Wishes/AdvancedSearch" target="new">Advanced Search</a>, were developed by <a href="https://wikimedia.de/en" target="new">Wikimedia Deutschland</a> with support from the Wikimedia Foundation. The idea for this feature was born in a workshop series with authors in Germany. From there, it was developed together with the different language communities with the help of prototypes and feedback rounds. It became the new default interface for the search page for all Wikimedia wikis in November 2018.
				</p>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--s">
			<div class="border-box border-box--report">
				<div class="t--delta">LINKS</div>
				<ul class="bullet-list">
					<li>
						<a href="https://wikimediafoundation.org/2018/12/13/eureka-a-new-visual-interface-for-specialized-searches/" target="new">Blog article</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/upload" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>No Upload-Filter</p>
		</a>
	</section>
</main>

<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			How does that word sound? The Wikibase installation Lingua Libre structures and preserves spoken language.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Seeris" target="new">
				Seeris
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:LinguaLibreAtikamkew1.jpg" target="new">
				LinguaLibreAtikamkew1
			</a>,

			cutout by <a href="https://atelierdisko.de" target="new">Atelier Disko</a> for WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>The Wikibase Software as a Basis for new Knowledge Projects</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikimedia's free and collaboratively maintained knowledge database Wikidata structures the knowledge of the world in language-independent data objects that can be enriched with various types of information. Both humans and machines can access this treasure trove of data and generate new knowledge. Wikibase, the software behind Wikidata, is also available as free and open software for all. In 2018, we continued to work on making Wikibase even easier to use for others. Additionally, we offered workshops to interested organizations to explain the use of Wikibase for open knowledge projects.
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
					One of the many examples of an open data project created with Wikibase is Lingua Libre. The directory of free audio voice recordings aims to preserve the sound of the world's languages and the pronunciation of their words in the form of structured data and to make them freely available to everyone. The project originated in France, where the initiators were keen to promote endangered regional languages. The great thing about Lingua Libre is that everyone can add to the spoken vocabulary – be it with a few words, proverbs or whole sentences. Thus, even people who are not familiar with phonetic transcription can hear how individual words are pronounced at the push of a button.
				</p>
				<p>
					Up to 1,200 recordings per hour can now be recorded via the online application and uploaded directly to the free media archive Wikimedia Commons. Via the connection to Wikidata, the recorded sounds enrich Wikimedia projects such as Wikipedia or the free dictionary Wiktionary in particular – but they also support linguistics specialists in their research.
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
						<a href="https://blog.wikimedia.de/2018/12/14/many-faces-of-wikibase-lingua-libre-makes-ˈlaen̩%C9%A1wɪdʒəz-audible/" target="new">Blog article</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/year-review" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>Looking back at 2018</p>
		</a>
	</section>
</main>

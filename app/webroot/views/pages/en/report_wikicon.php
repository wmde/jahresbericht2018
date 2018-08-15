<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Fuzheado (<a href="https://commons.wikimedia.org/wiki/File:Wikidatacon-2017-group-pano-1.jpg" target="new">Wikimedia Commons</a>), cropped by Atelier Disko for WMDE, <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>WikidataCon: the first international Wikidata conference</em>
			</h1>
			<div class="section__teaser t--gamma">
				What started five years ago as an empty Wiki, has now grown into a huge knowledge database with more than 47 million entries, freely available to everybody: Wikidata. This has been made possible by the approximately 8,000 active volunteer editors from around the world. Wikidata therefore celebrated its fifth birthday with an event aimed at bringing the international community of volunteers closer together by holding a face to face exchange with one another: the world’s first WikidataCon.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Since its launch in the autumn of 2012, the goal of Wikidata has been to give more people more access to more knowledge. Instead of articles, knowledge is stored in Wikidata in the form of language-independent data objects which can be edited and have information added in different languages simultaneously. More than 51,000 editors have already added a huge amount of Free Knowledge to Wikidata and it continues to grow.
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
					Over 190 million edits were made in the Free Knowledge database by around 8,000 active volunteer editors from around the world in 2017. In comparison: In the same period, almost 71,000 active Wikipedia contributors made around 130 million edits across all 300 language versions of Wikipedia. This makes Wikidata the currently fastest growing Wikimedia knowledge project. 
				</p>
				<p>
					2017 saw Wikidata celebrate its fifth birthday with a conference organised by Wikimedia Deutschland for the Wikidata community. At the end of October, 180 participants – people who work on Wikidata, people who develop the software behind it or use the information held within it – came together in Berlin to share their knowledge about Wikidata. In more than 100 presentations, workshops, discussions and various other formats the attendees shared their knowledge. The enthusiasm for Wikidata of all those present could be felt throughout the entire conference and served to further strengthen the solidarity and dedication of the international Wikidata community.
				</p>
				<p>
					This enthusiasm held by the volunteer community also stood out in the WikidataCon conference program. Three program threads focussing on the topics of “Education and Science”, “GLAM” (Galleries, Libraries, Archives and Museums), and “Data Quality” allowed participants to not only take a look back at what has been achieved, but also see what the future holds for Wikidata. Alongside the long-term assurance of data quality and the strategic expansion of the platform, it was also of critical importance that as many people as possible could use the knowledge stored in Wikidata. Participants felt that the conference showed just how important and inspirational this exchange of knowledge can be for the work being done on volunteer-run projects. “The diversity and quality of Wikidata-driven innovation at the #WikidataCon blew me away [...] At none of the other many Wikimedia events over the years have I seen such a high level of technical generosity” said Jakob @nichtich when summarising the conference on Twitter. Everyone who took part in WikidataCon went home eager to share their newly acquired knowledge with their local communities. The next WikidataCon is planned to coincide with the 7th birthday of the Free Knowledge database in 2019.
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
								<iframe src="https://www.youtube-nocookie.com/embed/-qC0otvWIiU?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								On October 29th the Free Knowledge database Wikidata celebrated its 5th birthday. Wikimedia Deutschland says thanks to the community for its commitment!, 5 years of Wikidata – Happy Birthday!, Elisabeth Mandl and Denis Schröder for Wikimedia Deutschland
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/DC32C220Cuw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								On 22.11.2017 Lydia Pintscher gave a talk on "Wikidata – Curating Data about the World with 17000 Volunteers" as part of the public lecture series "Open Technology For An Open Society" #ot4os co-hosted by the Free University Berlin and Wikimedia Deutschland; Lydia Pintscher: Wikidata #ot4os, camera and editing: Henning Röhrborn, Wikimedia Deutschland, Freie Universität Berlin, Center für Digitale Systeme (CeDiS)
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next swiper-button-next--black"></div>
				<div class="swiper-button-prev swiper-button-prev--black"></div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/digitalomat" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Digital-O-Mat: an election aid for net politics</p>
		</a>
	</section>
</main>

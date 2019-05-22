<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			A tangible metaphor: The new data groundwater pump puts a spotlight on the common interest in data policy.<br>

			Wikimedia Deutschland e. V,

			<a href="https://commons.wikimedia.org/wiki/File:Datenpumpe_09.png" target="new">
				Datenpumpe 09
			</a>,

			cutout by <a href="https://atelierdisko.de" target="new">Atelier Disko</a> for WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Data is the new Groundwater: Towards a Focus on the Public Interest in Data Policy.</em>
			</h1>
			<div class="section__teaser t--gamma">
				When debating data policy, too much emphasis is put on who is earning money with data and how. Whilst these are important questions, equally important aspects of data policy to do with Free Knowledge are often overlooked: Who should benefit from public data and its processing? How can data be protected as a resource and become a sensibly used public good? We believe much more needs to be said about the common good in data policy-making. Which is why we put forward a new data metaphor:
			</div>
			<p class="section__title h--beta">
				Data is the new groundwater.
			</p>
			<div class="section__body t--gamma-serif">
					Data is not a "new oil", it is created at all times, changes without being used up and may only become a commodity under certain conditions. For the information society, data is therefore much more like groundwater. Just as a world without water is inconceivable, data as a transportable form of information forms the basis for Free Knowledge and thus also for Wikipedia.
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
					In order to better illustrate our demand to regard data politically not only as a commodity or power factor, but also as a public good, we had the data groundwater pump built in 2018. There is a display at the top of the pump. When the pump is operated, the "water basin" fills with blue LED light until the water level reaches the screen. There, predefined queries from our free knowledge database Wikidata are displayed: e.g. a world map with all airports named after women, or the average age of current members of the Bundestag – all live via the Internet.
				</p>
				<p>
					Wikimedia Deutschland regards access to knowledge and education as a human right. With the metaphor of "data as groundwater" introduced in 2018, we demonstrate that data about our world (such as weather, traffic, demographic data) should be freely available to everyone as a public good.
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
						Learn more about our political work on the
						<a href="https://meta.wikimedia.org/wiki/DE_policy" target="new">project website </a>
					<li>
						blog:
						<a href="https://blog.wikimedia.de/2019/04/08/data-is-the-new-groundwater/" target="new">Data is the new groundwater</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/data" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>Lexicographical Data on Wikidata</p>
		</a>
	</section>
</main>

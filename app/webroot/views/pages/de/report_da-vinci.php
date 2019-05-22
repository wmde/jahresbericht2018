<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Gelungene Kombination: Im Kulturhackathon Coding da Vinci kommen Kulturinstitutionen und Kreative aus Gestaltung und Software-Entwicklung zusammen.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Wladimir_Raizberg_%28WMDE%29" target="new">
				Wladimir Raizberg (WMDE)
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:CodingdaVinci2017_Preisverleihung.jpg" target="new">
				CodingdaVinci2017 Preisverleihung
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Coding da Vinci – wie Kulturinstitutionen zu Plattformen für kulturellen Austausch werden</em>
			</h1>
			<div class="section__teaser t--gamma">
				Gemeinsam mit der <a href="https://www.deutsche-digitale-bibliothek.de/" target="new">Deutschen Digitalen Bibliothek</a>, der <a href="https://www.okfn.de/" target="new">Open Knowledge Foundation Deutschland</a> und dem <a href="https://www.digis-berlin.de/" target="new">Forschungs- und Kompetenzzentrum Digitalisierung (digis)</a> brachte Wikimedia Deutschland 2014 erstmals Kulturinstitutionen wie Museen und Archive mit Kunstschaffenden aus Softwareentwicklung und Gestaltung für einen Kreativ-Wettbewerb mit offenen Daten zusammen – dem ersten Kulturhackathon Coding da Vinci. Aus den Aufnahmen von Vogelstimmen, die das Berliner Naturkundemuseum zur Verfügung stellte, entstand innerhalb von nur sechs Wochen beispielsweise der </a> und dem <a href="http://www.farbtrommel.de/zwitscherwecker/" target="new">zzZwitscherwecker</a>. Die App weckt Schlummernde mit fröhlichem Gezwitscher, das erst dann verstummt, wenn die richtige Vogelart zugeordnet wurde.
			</div>
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
			<div class="section__body t--gamma-serif">
				<p>
					Sechs weitere Coding da Vinci Hackathons haben seitdem in unterschiedlichen Regionen der Bundesrepublik stattgefunden – insgesamt haben 146 Kulturinstitutionen ihre verborgenen Schätze in 218 digitalen Datensets mehr als 1.600 Kreativen zur Verfügung gestellt. Mehr als hundert tolle Prototypen und Webanwendungen, Apps und Spiele sind daraus als Open-Source-Projekte entstanden.
				</p>
				<p>
					Coding da Vinci macht das kreative Potenzial von digitalem Kulturgut sichtbar und hilft, es zu entfalten. Vor allem für die teilnehmenden Kulturinstitutionen ist diese Erfahrung enorm wichtig – sie lernen, welche Chancen sich durch die digitale Öffnung ihrer Sammlungen bieten. Mit den innovativen Anwendungen wird nicht nur die Attraktivität von Kulturgut und die Sichtbarkeit der Kulturinstitutionen erhöht. Offene Kulturdaten laden auch in der vernetzten Gesellschaft neue Zielgruppen dazu ein, sich mit dem kulturellen Erbe schöpferisch auseinanderzusetzen und neues Wissen zu generieren. Museen wandeln sich von Orten des Bewahrens, Konservierens und Deponierens zu Plattformen für kulturellen Austausch – in den Städten und im Digitalen.
				</p>
				<p>
					Die positiven Effekte von Coding da Vinci für die digitale Transformation von Kultur- und Gedächtnisinstitutionen sieht auch die Kulturstiftung des Bundes. Sie fördert die Weiterentwicklung des Hackathons in den nächsten Jahren mit 1,2 Millionen Euro.
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
								<iframe src="https://www.youtube-nocookie.com/embed/8_URZDvowZQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Coding da Vinci Berlin 2017
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/QqbUis0fluk?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Coding da Vinci Ost 2018
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next swiper-button-next--black"></div>
				<div class="swiper-button-prev swiper-button-prev--black"></div>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--s">
			<div class="border-box border-box--report">
				<div class="t--delta">LINKS</div>
				<ul class="bullet-list">
					<li>
						Mehr zum Kulturhackathon Coding da Vinci erfahren Sie auf der
						<a href="https://codingdavinci.de/" target="new">Projektwebsite</a>
					<li>
						Blog:
						<a href="https://blog.wikimedia.de/2018/06/28/zwitschernde-voegel-fallendes-obst-und-eine-virtuelle-mittagsfrau-preistraeger-von-coding-da-vinci-ost/" target="new">Zwitschernde Vögel, fallendes Obst und eine virtuelle Mittagsfrau</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/12/10/mittelalterliche-monster-wandelbare-kunstwerke-und-chattende-kaiser-erster-kultur-hackathon-coding-da-vinci-rhein-main/" target="new">Mittelalterliche Monster, wandelbare Kunstwerke und chattende Kaiser</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/data-new-water" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Daten sind das neue Grundwasser</p>
		</a>
	</section>
</main>

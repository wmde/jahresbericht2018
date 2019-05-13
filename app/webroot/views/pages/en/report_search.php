<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Fuzheado (<a href="https://commons.wikimedia.org/wiki/File:Wikidatacon-2017-group-pano-1.jpg" target="new">Wikimedia Commons</a>), beschnitten von Atelier Disko für WMDE, <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Verbesserte Suchfunktion für Wikipedia & Co.</em>
			</h1>
			<div class="section__teaser t--gamma">
				Gemeinsam mit ehrenamtlichen Wikipedia-Aktiven und der Wikimedia-Foundation verbessert Wikimedia Deutschland im Projekt Technische Wünsche die Software, die hinter Wikipedia & Co. liegt und erweitert sie um neue Funktionen. Die Ergebnisse kommen allen Menschen, die in den Wikimedia-Projekten unterwegs sind zugute. Also auch den vielen Tausenden, die täglich in der Wikipedia etwas nachschlagen. Ein gutes Beispiel für die große Wirkung solcher Software-Verbesserungen ist die neue spezialisierte Suchmaske.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Darum haben die <a href="https://de.wikipedia.org/w/index.php?search=&title=Spezial:Suche&go=Artikel" target="new">Suchseiten</a> der Wikimedia-Wikis jetzt eine neue Oberfläche mit einigen gängigen Optionen zum spezialisierten Suchen. Botanikerinnen und Botaniker stehen damit beispielsweise nicht mehr vor dem Dilemma, sich bei ihrer Suche nach Kiefer durch ganze 9.000 Ergebnisse stöbern zu müssen. Sie können nun eingeben, dass die gefundenen Seiten das Wort Nadelbaum enthalten sollen, aber nicht das Wort Knochen, und erhalten nur noch <a href="https://de.wikipedia.org/w/index.php?search=Kiefer+Nadelbaum+-Knochen&title=Spezial:Suche&profile=advanced&fulltext=1&advancedSearch-current=%7B%22options%22%3A%7B%22not%22%3A%5B%22Knochen%22%5D%2C%22plain%22%3A%5B%22Nadelbaum%22%5D%7D%2C%22namespaces%22%3A%5B0%5D%7D&ns0=1" target="new">knapp 400 Suchergebnisse</a>. Andere Möglichkeiten sind die Suche in Seitentiteln, nach einer genauen Textfolge, die Suche nach Seiten in bestimmten Kategorien, mit einer bestimmten Vorlage und vieles mehr.
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
					Die neue <a href="https://de.wikipedia.org/wiki/Wikipedia:Technische_Wünsche/Spezialisierte_Suche" target="new">Suchoberfläche</a>  wurde bei Wikimedia Deutschland entwickelt und von  der Wikimedia Foundation unterstützt. Die neue Funktion nahm in einer Workshopreihe mit Autorinnen und Autoren der deutschsprachigen Wikipedia-Community ihren Anfang und wurde gemeinsam mit den Communitys der verschiedenen Sprachprojekte entwickelt. Seit November 2018 steht sie in allen Wikis als Standardfunktion auf der Suchseite zur Verfügung.
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
								Am 29. Oktober wurde die freie Wissensdatenbank Wikidata 5 Jahre alt. Wikimedia Deutschland dankt der Community für ihr Engagement!; 5 Jahre Wikidata – Happy Birthday!, Elisabeth Mandl und Denis Schröder für Wikimedia Deutschland,
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
								Am 22.11.2017 hielt Lydia Pintscher den Vortrag "Wikidata - Curating Data about the World with 17000 Volunteers" im Rahmen der Ringvorlesung "Open Technology For An Open Society" #ot4os , von der Freie Universität Berlin und Wikimedia Deutschland; Lydia Pintscher: Wikidata #ot4os, Kamera und Schnitt: Henning Röhrborn, Wikimedia Deutschland, Freie Universität Berlin, Center für Digitale Systeme (CeDiS);
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
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/digitalomat" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p> Digital-O-Mat: die netzpolitische Wahlhilfe </p>
		</a>
	</section>
</main>

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
				<em>Die Software Wikibase als Basis für neue Wissensprojekte</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikimedias freie und gemeinschaftlich gepflegte Wissensdatenbank Wikidata strukturiert das Wissen der Welt in sprachunabhängigen Datenobjekten, die mit verschiedenen Informationen angereichert werden können. Sowohl Menschen als auch Maschinen können auf diesen Datenschatz zugreifen und neues Wissen generieren. Auch Wikibase, die Software hinter Wikidata, ist als freie und offene Software für alle Menschen verfügbar. 2018 haben wir weiter daran gearbeitet, Wikibase noch einfacher nutzbar für andere zu gestalten und in Workshops mit interessierten Organisationen die Verwendung von Wikibase für offene Wissensprojekte erklärt.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Eines der vielen Beispiele für ein mit Wikibase entstandenes offenes Datenprojekt ist <a href="https://lingualibre.fr/wiki/LinguaLibre:Main_Page" target="new">Lingua Libre</a>. Das Verzeichnis kostenloser Audio-Sprachaufzeichnungen hat das Ziel, den Klang der Sprachen der Welt und die Aussprache ihrer Wörter in Form strukturierter Daten zu bewahren und allen Menschen frei verfügbar zu machen. Seinen Ursprung hat das Projekt in Frankreich, wo es den Initiatoren darum ging, gefährdete Regionalsprachen zu fördern. Das tolle an Lingua Libre ist, das alle Menschen den gesprochenen Wortschatz vervollständigen können – sei es mit wenigen Worten, Sprichwörtern oder ganzen Sätzen. So können auch Menschen, die sich mit der Lautschrift nicht auskennen, per Klick hören, wie einzelne Worte ausgesprochen werden.
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
					Mittlerweile können über die Online-Anwendung bis zu 1200 Aufzeichnungen pro Stunde aufgenommen und direkt ins freie Medienarchiv Wikimedia Commons hochgeladen werden. Über die Anbindung an Wikidata bereichern die aufgezeichneten Klänge vor allem Wikimedia-Projekte wie Wikipedia oder auch das freie Wörterbuch Wiktionary – sie  unterstützen aber auch Spezialisten für Linguistik in ihrer Forschung.
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

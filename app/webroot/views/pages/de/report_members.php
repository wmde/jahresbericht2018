<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">René Zieger (<a href="https://commons.wikimedia.org/wiki/File:171118_Wikimedia_MV_08.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Schon Mitglied?</em>
			</h1>
			<div class="section__teaser t--gamma">
				All unsere Projekte sind nur Dank der finanziellen Unterstützung der vielen tausend Spendenden und unserer Vereinsmitglieder möglich. Im Jahr 2017 haben wir eine neue Rekordzahl an Mitgliedern erreicht. Mehr als 65.000 Menschen unterstützen uns mittlerweile in unserem Engagement für Freies Wissen. Damit hat sich die Zahl der Mitglieder allein in den vergangenen zwei Jahren mehr als verdoppelt.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Neben richtungsweisenden Entscheidungen wie der Zustimmung zur neuen strategischen Ausrichtung der internationalen Wikimedia-Bewegung standen beide Versammlungen ganz im Zeichen des „aufeinander Zugehens“. Eines unserer größten Ziele war es, vor Ort unsere Arbeit und unsere Projekte noch erlebbarer zu machen und die Mitglieder aktiv ins Vereinsgeschehen miteinzubeziehen. Aus diesem Grund wurde der formelle Teil erstmals von einem bunten Rahmenprogramm begleitet. In Bamberg gab es den <b>„Jahrmarkt des Freien Wissens“</b> in Berlin öffneten wir die Tore zum <b>„Haus des Freien Wissens“.</b>
				</p>
				<p>
					Dabei gab es viel zu entdecken: In Bamberg diskutierten die Mitglieder zum Beispiel über die Zukunft der Wikipedia und machten bei einer Fototour durch die Stadt Bilder für das freie Medienarchiv Wikimedia Commons. In Berlin konnten die Besuchenden die zehn Gewinner des Fotowettbewerbs „Wiki Loves Monuments“ bestaunen und lernten beim interaktiven „politischen Positionenraten“, welche Meinungen einzelne politische Akteure vertreten und welche Auswirkungen diese auf Freies Wissen haben.
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
					Auf großes Interesse stießen auch wieder unsere Einführungskurse, bei denen die Mitglieder zusammen mit den Referentinnen und Referenten jede Menge Wissenswertes über die Wikipedia, die freie Wissensdatenbank Wikidata und das freie Medienarchiv Wikimedia Commons lernten. In Berlin informierte außerdem die neu gegründete Arbeitsgemeinschaft Partizipation die Teilnehmenden in einem Workshop über die zahlreichen Beteiligungsmöglichkeiten innerhalb des Vereins.
				</p>
				<p>
					Auch 2018 wird es wieder zwei Mitgliederversammlungen geben. Am 26. Mai sind wir im Zentrum für Kunst und Medien in Karlsruhe zu Gast. Dort werden wir unser Rahmenprogramm „Zentrum des Freien Wissens“ noch weiter ausbauen und es erstmals auch für die Öffentlichkeit zugänglich machen, um so noch mehr Menschen von unserer Arbeit und unseren Projekten begeistern zu können. Die zweite Mitgliederversammlung findet am 1. Dezember 2018 in Berlin statt. Hier steht vor allem die Wahl des neuen Präsidiums im Mittelpunkt.
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
								<iframe src="https://www.youtube-nocookie.com/embed/ys1Xc_iCId0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Die 20. Mitgliederversammlung von Wikimedia Deutschland am 17.06.2017 in Bamberg;
								Mitgliederversammlung Wikimedia Deutschland 2017, Kreative Leitung: Elisabeth Mandl, Kamera und Schnitt: Stefan Brainbauer für Wikimedia Deutschland,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/international" class="button button--report">
			<p class="button--small"> Zum nächsten Thema </p>
			<p> Wikimedias strategische Ausrichtung anpacken </p>
		</a>
	</section>
</main>

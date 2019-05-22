<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Auf der Wikimedia Conference 2018, ausgerichtet von Wikimedia Deutschland, diskutierten Wikimedianerinnen und Wikimedianer die Notwendigkeiten das Wikimedia-Netzwerk zu verändern, um die Ziele für 2030 zu erreichen.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Vkw.studiogood" target="new">
				Jason Krüger for Wikimedia Deutschland e.V.
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:Wikimedia_Conference_2018_–_108.jpg" target="new">
				Wikimedia Conference 2018 – 108
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Wikimedia 2030</em>
			</h1>
			<div class="section__teaser t--gamma">
				Was möchten wir – die internationale Wikimedia-Bewegung – in den nächsten 10-15 Jahren aufbauen und erreichen? Wofür soll Wikimedia im Jahr 2030 in der Welt bekannt sein? Und wer wird sich unserer Bewegung angeschlossen haben? Mit diesen Fragen beschäftigen wir uns seit 2017.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Wohin wir wollen haben wir inzwischen festgelegt: Wikimedia hat sich das Ziel gegeben die wichtigste, unterstützende Struktur für die gesamte Bewegung für Freies Wissen zu werden – und alle, die sich uns anschließen möchten, sind jederzeit willkommen mitzumachen.
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
					Wir wollen das über unsere beiden Ziele „Wissen als Dienst“ (Knowledge as a Service) und „Chancengleichheit auf Wissen“ (Knowledge Equity) erreichen. Wissen als Dienst verkörpert dabei vor allem den Gedanken die Plattform für das gesamte Wissen der Welt zu sein – alle können beitragen, es aber auch verändern, und im eigenen Sinne weiternutzen. Chancengleichheit auf Wissen bedeutet, dass wir uns noch stärker den Menschen und deren Wissen zuwenden wollen, die bisher aufgrund von Machtstrukturen und Privilegien sowie politischen oder sozialen Hürden ausgeschlossen waren.
				</p>
				<p>
					Das sind hehre Ziele, die sich Wikimedia vorgenommen hat. Doch wie erreichen wir diese? Was müssen wir an unseren Strukturen in und um die Wikimedia-Projekte verändern, damit wir 2030 dort sind, wo wir sein wollen?
				</p>
				<p>
					Mit diesen Fragen beschäftigt sich Wikimedia Deutschland seit Mitte letzten Jahres intensiv – zusammen mit zahlreichen Haupt- und Ehrenamtlichen des globalen Wikimedia-Netzwerkes. In neun thematischen Arbeitsgruppen erarbeiten etwa 117 Wikimedianerinnen und Wikimedianer Empfehlungen, wie wir unsere Strukturen so weitreichend modernisieren, dass wir gemeinsam erfolgreich diesen neuen Kurs verfolgen können. Wikimedia Deutschland unterstützt diesen Prozess bestmöglich, denn wir glauben, dass dieser umfangreiche und inklusive Prozess essentiell für die Zukunft Freien Wissens ist.
				</p>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--l">
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<video controls>
									<source src="https://upload.wikimedia.org/wikipedia/commons/transcoded/1/1b/Knowledge_belongs_to_all_of_us_-_2030.wikimedia.org.webm/Knowledge_belongs_to_all_of_us_-_2030.wikimedia.org.webm.1080p.vp9.webm" type="video/webm; codecs=vp9">
								</video>
							</div>
							<div class="video__caption limit--s">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--s">
			<div class="border-box border-box--report">
				<div class="t--delta">LINKS</div>
				<ul class="bullet-list">
					<li>
						<a href="https://2030.wikimedia.org " target="new">https://2030.wikimedia.org </a>
					<li>
						<a href="https://blog.wikimedia.de/2018/05/05/freies_wissen_weltweit_teil_1/" target="new">Freies Wissen weltweit: Die Gesichter hinter Wikimedia – Teil 1</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/05/12/freies-wissen-weltweit-die-gesichter-hinter-wikimedia-teil-2/" target="new">Freies Wissen weltweit: Die Gesichter hinter Wikimedia – Teil 2</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/05/19/freies-wissen-weltweit-die-gesichter-hinter-wikimedia-teil-3/" target="new">Freies Wissen weltweit: Die Gesichter hinter Wikimedia – Teil 3</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/search" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Technische Wünsche</p>
		</a>
	</section>
</main>

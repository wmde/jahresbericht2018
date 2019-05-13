<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Ralf Rebmann (<a href="https://commons.wikimedia.org/wiki/File:Auftaktveranstaltung_Fellow-Programm_Freies_Wissen_2017_189.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Vom Nischenthema zur gesellschaftlichen Debatte: 15 Organisationen gegen Upload-Filter</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikipedia lebt vom freien Austausch von Informationen. Die Online-Wissenssammlung gibt wieder, was in Büchern, Medien und wissenschaftlichen Artikeln dargelegt wird und durch weltweiten Austausch neuer Erkenntnisse entsteht. Deswegen setzen wir uns leidenschaftlich für ein freies Netz ein, das Austausch und Kooperation fördert.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Im Rahmen der europäischen Reform des Urheberrechts, die teils wichtige Verbesserungen auch für den freien Zugang zu Wissen bringen wird, wurde 2016 erstmals die Einführung von Upload-Filtern zur Verhinderung von Urheberrechtsverletzungen propagiert. Egal ob Text, Bild oder Videobeitrag – sämtliche Inhalte einzelner Nutzenden auf größeren Internetplattformen sollen dem Vorschlag nach bereits vor dem Hochladen (Upload) auf vermeintliche Urheberrechtsverletzungen geprüft. Solche, die als potenziell rechtsverletzend maschinell erkannt werden, sollen blockiert werden. Differenzierte Urteile darüber, was rechtlich erlaubt ist oder nicht – sei es Kritik, Satire oder Kunst – können diese Filter aber nicht treffen. Somit bedrohen sie freie Meinungsäußerung und Vielfalt im Netz.
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
			</div>
			<div class="section__body t--gamma-serif">
					2018 haben wir und deshalb in einem Offenen Brief mit zahlreichen Partnern zusammengetan, um gegen die Einführung von Upload-Filtern zu kämpfen. Neben Wikimedia Deutschland haben sich 14 weitere Organisationen aus Zivilgesellschaft und Internetwirtschaft (darunter Bitkom, Verbraucherzentrale Bundesverband und die Open Knowledge Foundation) mit ihren Bedenken an Bundesregierung und EU-Abgeordnete gewandt und damit ein öffentliches Zeichen gesetzt. Wikipedia wurde letztendlich von der Filterpflicht ausgenommen, dennoch haben wir uns gemeinsam mit den Wikipedia-Freiwilligen weiter für Verbesserungen der Reform im Sinne des Freien Wissens eingesetzt.
				</p>
				<p>
					Immer wieder haben wir zusammen mit zahlreichen Netzorganisationen über die Probleme der Reform und Alternativvorschläge informiert. Aus einem komplexen “Nischenthema” ist spätestens 2019 eine breite gesellschaftliche Debatte über <a href="https://blog.wikimedia.de/2019/04/16/freies-wissen-auf-europaeischer-ebene-angekommen/" target="new">Freiheit und Reglementierung des Netzes</a> geworden. Vor der Abstimmung im EU-Parlament gingen Tausende vor allem junge Menschen deutschlandweit gegen Upload-Filter auf die Straße. Die Unterstützung des Parlaments haben die Filter trotzdem erhalten, die Umsetzung der Richtlinie erfolgt nun aber unter dem kritischen Blick einer interessierten und informierten Öffentlichkeit.
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
								<iframe src="https://www.youtube-nocookie.com/embed/ZQ6iXhlwBAM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Das Fellow-Programm Freies Wissen ist ein gemeinsames Projekt von Wikimedia Deutschland, dem Stifterverband und der VolkswagenStiftung, und richtet sich an Nachwuchswissenschaftlerinnen und -wissenschaftler, die ihre Forschungsprozesse offen gestalten möchten;
								Fellow-Programm Freies Wissen, Kamera: Ian Delú, Joana Kauer, Schnitt: Joana Kauer für Wikimedia Deutschland,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
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
				<p>
					Die beiden Programm-Verantwortlichen bei Wikimedia, Sarah Behrens und Christopher Schwarzkopf, erzählen im im Open Science Radio mehr über die Idee, die Motivation, den bereits erfolgreich absolvierten ersten Durchlauf, sowie den gegenwärtigen Durchlauf und die Zukunft des Programms.
				</p>
				<ul class="bullet-list">
					<li><a href="http://www.openscienceradio.org/2017/12/12/osr094-freies-wissen-in-der-wissenschaft-wmde-de/" target="new">Folge 1</a></li>
					<li><a href="http://www.openscienceradio.org/2018/02/07/osr096-fellow-programm-projekte-ring-a-scientist-organizing-openness-wmde-de/" target="new">Folge 2</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/2017" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p> Das Jahr 2017 bei Wikimedia Deutschland </p>
		</a>
	</section>
</main>

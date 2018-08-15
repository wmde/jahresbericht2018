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
				<em>Offene Wissenschaft aktiv vorantreiben</em>
			</h1>
			<div class="section__teaser t--gamma">
				Als Gesellschaft zur Förderung Freien Wissens versucht Wikimedia Deutschland, die Grundprinzipien der Wikipedia auf alle gesellschaftlichen Bereiche zu übertragen. Mit dem Fellow-Programm Freies Wissen unterstützen wir deshalb junge Forschende dabei, die Methoden, Daten und Ergebnisse ihrer Arbeit frei verfügbar und für alle Menschen nachnutzbar zu machen. Die Idee ist, dass die Fellows nicht nur selbst lernen, Offene Wissenschaft zu praktizieren, sondern ihre Kenntnisse in den Institutionen weiterverbreiten.
				Damit setzen wir uns für eine stärkere Öffnung wissenschaftlicher Forschung und Lehre ein.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Das 2016 von Wikimedia Deutschland und dem Stifterverband ins Leben gerufene <a href="https://de.wikiversity.org/wiki/Wikiversity:Fellow-Programm_Freies_Wissen" target="new">Fellow-Programm Freies Wissen</a> ging 2017 in die zweite Runde. Es stellt dem jungen Wissenschafts-Nachwuchs Expertinnen und Experten zur Seite, die ihnen theoretische und praktische Grundlagen einer offenen wissenschaftlichen Arbeitsweise vermitteln. Für das zweite Programmjahr konnte mit der VolkswagenStiftung ein weiterer großer Partner gewonnen werden, sodass wir im Vergleich zum Pilot-Durchlauf die Anzahl der geförderten Fellows von 10 auf 20 verdoppeln konnten.
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
					Die Bandbreite der geförderten Projekte reicht von der Islamwissenschaft über die Neurowissenschaften bis hin zur Klimaforschung. Die Praxis der Forschungsarbeit setzt dabei zum einen auf Transparenz: Prozesse und Datensammlungen werden offen zugänglich dokumentiert. Zum anderen geht es darum, den Austausch mit Communitys jenseits des universitären Bereichs zu suchen. Das Projekt <a href="https://www.ring-a-scientist.org/" target="new">„Ring a Scientist“</a> schlägt beispielsweise eine Brücke zwischen Forschung und Schule. Über eine Internetplattform können sich Lehrerinnen und Lehrer mit Wissenschaftlerinnen und Wissenschaftlern zum Videotelefonat verabreden und ihre Schulklassen zum Beispiel an Live-Versuchen teilhaben lassen, die nur in speziell ausgerüsteten Laboren durchführbar sind. So wird wissenschaftliche Arbeit für Schülerinnen und Schüler auf ganz neue Art erlebbar.
				</p>
				<p>
					Der zweite Programmdurchlauf endet im Juni 2018 mit einer öffentlichen Abschlussveranstaltung, bei der die geförderten Fellows ihre Projekte und Ergebnisse vorstellen. 2018 sollen erneut bis zu 20 Nachwuchs-Wissenschaftlerinnen und -Wissenschaftler im Fellow-Programm Freies Wissen gefördert werden.
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
			<p class="button--small"> Zum nächsten Thema </p>
			<p> Das Jahr 2017 bei Wikimedia Deutschland </p>
		</a>
	</section>
</main>

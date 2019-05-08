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
				<em>Daten sind das neue Grundwasser: Für mehr Gemeinwohlorientierung in der Datenpolitik.</em>
			</h1>
			<div class="section__teaser t--gamma">
				Als Gesellschaft zur Förderung Freien Wissens versucht Wikimedia Deutschland, die Grundprinzipien der Wikipedia auf alle gesellschaftlichen Bereiche zu übertragen. Mit dem Fellow-Programm Freies Wissen unterstützen wir deshalb junge Forschende dabei, die Methoden, Daten und Ergebnisse ihrer Arbeit frei verfügbar und für alle Menschen nachnutzbar zu machen. Die Idee ist, dass die Fellows nicht nur selbst lernen, Offene Wissenschaft zu praktizieren, sondern ihre Kenntnisse in den Institutionen weiterverbreiten.
				Damit setzen wir uns für eine stärkere Öffnung wissenschaftlicher Forschung und Lehre ein.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Wenn es um Daten geht, wird meist nur diskutiert, wer wie mit Daten Geld verdienen darf. Dadurch werden jedoch wichtige Fragen ausgeblendet, die auch Freies Wissen betreffen: Wem sollen öffentliche Daten und ihre Verarbeitung nutzen? Wie können Daten als Ressource geschützt und zu einem sinnvoll genutzten Gemeingut werden? Wir meinen: In der Datenpolitik muss viel mehr über Gemeinwohl geredet werden. Dafür schlagen wir eine neue Daten-Metapher vor.
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
			<p class="section__title h--beta">
				<em>Daten sind das neue Grundwasser</em>
			</p>
			<div class="section__body t--gamma-serif">
					Daten sind kein „neues Öl“, sie entstehen jederzeit neu, wandeln sich, ohne sich zu verbrauchen und dürfen nur unter bestimmten Bedingungen zur Ware werden. Für die  Informationsgesellschaft sind Daten daher viel eher wie Grundwasser. Genau wie eine Welt ohne Wasser nicht denkbar ist, bilden Daten als transportable Form von Information die Grundlage für Freies Wissen und damit auch für die Wikipedia.
				</p>
				<p>
					Zur besseren Veranschaulichung unserer Forderung, Daten politisch nicht nur als Ware oder Machtfaktor, sondern auch als Gemeingut anzusehen, haben wir 2018 die Daten-Grundwasserpumpe bauen lassen. Oben auf der Pumpe befindet sich ein Display. Wird der Schwengel der Pumpe bedient, füllt sich das “Wasserbecken” mit blauem LED-Licht, bis der Wasserstand den Bildschirm erreicht hat. Dort werden dann vordefinierte Abfragen unserer freien Wissendatenbank Wikidata angezeigt: zum Beispiel eine Weltkarte mit allen Flughäfen, die nach Frauen benannt sind, oder das Durchschnittsalter der aktuellen Bundestagsabgeordneten – alles live übers Netz abgefragt.
				</p>
				<p>
					Wikimedia Deutschland versteht den Zugang zu Wissen und Bildung als Menschenrecht. Mit der 2018 vorgestellten Metapher von “Daten als Grundwasser” zeigen wir auf, dass Daten über unsere Welt (wie Wetter-, Verkehrs-, demographische Daten) als Gemeingut allen Menschen frei zur Verfügung stehen sollten.
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

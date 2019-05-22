<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Eine Metapher zum Anfassen: Die neue Daten-Grundwasserpumpe steht für mehr Gemeinwohlorientierung in der Datenpolitik.<br>

			Wikimedia Deutschland e. V,

			<a href="https://commons.wikimedia.org/wiki/File:Datenpumpe_09.png" target="new">
				Datenpumpe 09
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Daten sind das neue Grundwasser: Für mehr Gemeinwohlorientierung in der Datenpolitik.</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wenn es um Daten geht, wird meist nur diskutiert, wer wie mit Daten Geld verdienen darf. Dadurch werden jedoch wichtige Fragen ausgeblendet, die auch Freies Wissen betreffen: Wem sollen öffentliche Daten und ihre Verarbeitung nutzen? Wie können Daten als Ressource geschützt und zu einem sinnvoll genutzten Gemeingut werden? Wir meinen: In der Datenpolitik muss viel mehr über Gemeinwohl geredet werden. Dafür schlagen wir eine neue Daten-Metapher vor.
			</div>
			<p class="section__title h--beta">
				Daten sind das neue Grundwasser
			</p>
			<div class="section__body t--gamma-serif">
					Daten sind kein „neues Öl“, sie entstehen jederzeit neu, wandeln sich, ohne sich zu verbrauchen und dürfen nur unter bestimmten Bedingungen zur Ware werden. Für die  Informationsgesellschaft sind Daten daher viel eher wie Grundwasser. Genau wie eine Welt ohne Wasser nicht denkbar ist, bilden Daten als transportable Form von Information die Grundlage für Freies Wissen und damit auch für die Wikipedia.
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
					Zur besseren Veranschaulichung unserer Forderung, Daten politisch nicht nur als Ware oder Machtfaktor, sondern auch als Gemeingut anzusehen, haben wir 2018 die Daten-Grundwasserpumpe bauen lassen. Oben auf der Pumpe befindet sich ein Display. Wird der Schwengel der Pumpe bedient, füllt sich das “Wasserbecken” mit blauem LED-Licht, bis der Wasserstand den Bildschirm erreicht hat. Dort werden dann vordefinierte Abfragen unserer freien Wissendatenbank Wikidata angezeigt: zum Beispiel eine Weltkarte mit allen Flughäfen, die nach Frauen benannt sind, oder das Durchschnittsalter der aktuellen Bundestagsabgeordneten – alles live übers Netz abgefragt.
				</p>
				<p>
					Wikimedia Deutschland versteht den Zugang zu Wissen und Bildung als Menschenrecht. Mit der 2018 vorgestellten Metapher von “Daten als Grundwasser” zeigen wir auf, dass Daten über unsere Welt (wie Wetter-, Verkehrs-, demographische Daten) als Gemeingut allen Menschen frei zur Verfügung stehen sollten.
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
						<a href="https://blog.wikimedia.de/2018/09/15/daten-sind-das-neue-grundwasser/" target="new">Blogbeitrag</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/data" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Lexeme in Wikidata </p>
		</a>
	</section>
</main>

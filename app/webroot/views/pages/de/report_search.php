<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Die sprichwörtliche Suche nach der Nadel im Heuhaufen: Dank der verbesserten Suchfunktion lassen sich Inhalte in der Wikipedia leichter finden.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Richard_Bartz" target="new">
				Richard Bartz
			</a>,
			Munich aka
			<a href="https://commons.wikimedia.org/wiki/User:Makro_Freak" target="new">
				Makro Freak
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:Murnauer_Moos_Marsh_2.jpg" target="new">
				Murnauer Moos Marsh 2
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/2.5/legalcode" target="new">
				CC BY-SA 2.5
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Verbesserte Suchfunktion für Wikipedia & Co.</em>
			</h1>
			<div class="section__teaser t--gamma">
				Gemeinsam mit ehrenamtlichen Wikipedia-Aktiven und der Wikimedia-Foundation verbessert Wikimedia Deutschland im Projekt Technische Wünsche die Software, die hinter Wikipedia & Co. liegt und erweitert sie um neue Funktionen. Die Ergebnisse kommen allen Menschen, die in den Wikimedia-Projekten unterwegs sind, zugute. Also auch den vielen Tausenden, die täglich in der Wikipedia etwas nachschlagen. Ein gutes Beispiel für die große Wirkung solcher Software-Verbesserungen ist die neue spezialisierte Suchmaske.
			</div>
			<div class="section__body t--gamma-serif">
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
					Darum haben die <a href="https://de.wikipedia.org/w/index.php?search=&title=Spezial:Suche&go=Artikel" target="new">Suchseiten</a> der Wikimedia-Wikis jetzt eine neue Oberfläche mit einigen gängigen Optionen zum spezialisierten Suchen. Botanikerinnen und Botaniker stehen damit beispielsweise nicht mehr vor dem Dilemma, sich bei ihrer Suche nach Kiefer durch ganze 9.000 Ergebnisse stöbern zu müssen. Sie können nun eingeben, dass die gefundenen Seiten das Wort Nadelbaum enthalten sollen, aber nicht das Wort Knochen, und erhalten nur noch <a href="https://de.wikipedia.org/w/index.php?search=Kiefer+Nadelbaum+-Knochen&title=Spezial:Suche&profile=advanced&fulltext=1&advancedSearch-current=%7B%22options%22%3A%7B%22not%22%3A%5B%22Knochen%22%5D%2C%22plain%22%3A%5B%22Nadelbaum%22%5D%7D%2C%22namespaces%22%3A%5B0%5D%7D&ns0=1" target="new">knapp 400 Suchergebnisse</a>. Andere Möglichkeiten sind die Suche in Seitentiteln, nach einer genauen Textfolge, die Suche nach Seiten in bestimmten Kategorien, mit einer bestimmten Vorlage und vieles mehr.
				</p>
				<p>
					Die neue <a href="https://de.wikipedia.org/wiki/Wikipedia:Technische_Wünsche/Spezialisierte_Suche" target="new">Suchoberfläche</a> wurde mit Unterstützung der Wikimedia Foundation bei Wikimedia Deutschland entwickelt. Die neue Funktion nahm in einer Workshopreihe mit Autorinnen und Autoren der deutschsprachigen Wikipedia-Community ihren Anfang und wurde gemeinsam mit den Communitys der verschiedenen Sprachprojekte entwickelt. Seit November 2018 steht sie in allen Wikis als Standardfunktion auf der Suchseite zur Verfügung.
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
						Mehr Informationen auf der
						<a href="de.wikipedia.org/wiki/Wikipedia:Technische_Wünsche" target="new">Projektwebsite</a>
					<li>
						Blog:
						<a href="https://blog.wikimedia.de/2018/12/14/heureka-eine-neue-benutzeroberflaeche-fuer-spezialisierte-suchanfragen/" target="new">
							Heureka! Eine neue Benutzeroberfläche für spezialisierte Suchanfragen
						</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/upload" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>No Upload-Filter</p>
		</a>
	</section>
</main>

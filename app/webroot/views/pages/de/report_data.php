<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Mehr verstehen: Durch Sprachdaten in unserer freien Wissensdatenbank Wikidata entsteht neues Wissen.
			<!-- (<a href="https://commons.wikimedia.org/wiki/File:22._Mitgliederversammlung_28.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a> -->
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Lexikografische Daten in Wikidata: Wörter, Wörter, Wörter</em>
			</h1>
			<div class="section__teaser t--gamma">
				Sprache macht unsere Welt schön, vielfältig und kompliziert. Unsere freie Wissensdatenbank <a href="https://www.wikidata.org/wiki/Wikidata:Main_Page" target="new">Wikidata</a> ist ein mehrsprachiges Projekt, das die mehr als 300 Sprachen der Wikimedia-Projekte bedient. Diese Mehrsprachigkeit im Kern von Wikidata bedeutet, dass von Anfang an jedes eingetragene Element zu einem Wissensgegenstand und jede Eigenschaft, die dieses Element beschreibt, eine Bezeichnung in einer der unterstützten Sprachen tragen kann. Dadurch wird Wikidata zu einer polyglotten Wissensdatenbank, die die Sprache ihrer Benutzerinnen und Benutzer spricht.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Die Erweiterung von Wikidata um Sprachdaten ist eine spannende neue Anwendung. Während strukturierte Daten über die Summe allen menschlichen Wissens Maschinen und künstlicher Intelligenz helfen können, die Welt zu verstehen, können sprachliche Daten in Wikidata ihnen helfen zu verstehen, wie Menschen ihr Wissen mit Wörtern ausdrücken. Mit all den Sprachkombinationen, die wir in Wikimedia-Projekten haben, eröffnen sich ganz neue Möglichkeiten: Übersetzungen aus dem Estnischen ins Maltesische oder von Tamil nach Zulu – obwohl ein gedrucktes Wörterbuch für diese Kombinationen wahrscheinlich nicht existiert, kann es mit strukturierten Daten über Sprachen generiert werden.
				</p>
				<p>
					Datenobjekte in Wikidata beschreiben bislang einen Gegenstand, eine Person oder ein Konzept in dieser Welt. Was Wikidata bis 2018 nicht hatte, war die sprachliche Seite der Dinge: die Wörter, um diese Objekte so zu beschreiben, wie sie in einer Sprache erscheinen, ihre grammatikalischen Formen und Bedeutungen. Seit 2017 haben wir Funktionen in Wikidata und der Software Wikibase entwickelt, die es ermöglichen, sprachliche Daten zu beschreiben. Wir nennen diese <strong>lexikographische Daten</strong>. Als offizieller Teil Wikidatas wurden sie im Mai 2018 eingeführt. Zeit, einen genaueren Blick darauf zu werfen.
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
					Lexikographische Daten bedeuten genau das: Daten, die in einem Lexikon vorkommen können. Womit wir es hier zu tun haben, ist die linguistische Seite der Wörter. Da das Wort "Wort" bereits sehr überladen ist, verwenden wir den sprachwissenschaftlichen Begriff Lexem — ein <a href="https://de.wikipedia.org/wiki/Lexem" target="new">Lexem</a> ist ein Eintrag in einem Wörterbuch.
				</p>
				<p>
					Das erste Lexem innerhalb Wikidata ist das sumerische Wort für "Mutter". Da das Sumerische eine der ältesten Sprachen ist, die wir kennen, und das Wort für Mutter eines der grundlegendsten Wörter in jeder Sprache ist, ist es gut möglich, dass es sich dabei um eine der frühesten sprachlichen Äußerungen der Menschheitsgeschichte handelt.
				</p>
				<p>
					Jedes Lexem hat <strong>Bedeutungen</strong>, die anzeigen, was ein Wort in verschiedenen Sprachen bedeutet. Es gibt auch<strong> Formen</strong>, die beschreiben, wie sich das Lexem grammatikalisch ändern kann – etwa die 15 Fälle, in denen ein Substantiv in der finnischen Sprache verwendet werden kann.
				</p>
				<p>
					Natürlich können lexikographische Daten genauso abgefragt werden, wie andere Daten auch. Über Abfragen können beispielsweise tolle neue Anwendungen erstellt werden. Einer der häufigsten Gründe für Kopfschmerzen bei Deutschlernenden sind die Artikel von Substantiven: der, die, das. Dabei scheint es nur wenig Logik zu geben, was meist bedeutet, dass Artikel auswendig gelernt werden müssen. Zum Glück gibt es ein Spiel, das lexikographische Daten in Wikidata verwendet, um das Auswendiglernen einfacher zu machen: <a href="http://auregann.fr/derdiedas/" target="new">DerDieDas</a>. Wer schafft 10 zufällig ausgewählte deutsche Substantive mit dem richtigen Artikel? Für diejenigen, die bereits Deutsch sprechen, gibt es auch eine <a href="http://auregann.fr/unune" target="new">französische</a> und eine <a href="https://tools.wmflabs.org/enet/" target="new">dänische</a> Version.
				</p>
				<p>
					Wikidata verfügt derzeit (Stand März 2019) über 43.440 Lexeme in 315 verschiedenen Sprachen, Dialekten oder Schriften. Das ist zwar bereits ein guter Anfang, aber es ist eindeutig nur der erste Schritt. Die Erforschung lexikografischer Daten auf Wikidata kann also beginnen –  zusammen können wir einen neuen Fundus für Freies Wissen an Sprachdaten aufbauen!
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
						<a href="https://blog.wikimedia.de/2019/03/25/lexikographische-daten-in-wikidata/" target="new">Blogbeitrag</a>
					<li>
						Artikelspiel: <a href="http://auregann.fr/derdiedas/" target="new">deutsch</a>, <a href="http://auregann.fr/unune" target="new">französisch</a>, <a href="https://tools.wmflabs.org/enet/" target="new">dänisch</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/day-of-action" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Wikipedia Aktionstag</p>
		</a>
	</section>
</main>

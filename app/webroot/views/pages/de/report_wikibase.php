<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Wie klingt das Wort? Mit der Wikibase-Installation Lingua Libre wird gesprochene Sprache strukturiert und bewahrt.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Seeris" target="new">
				Seeris
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:LinguaLibreAtikamkew1.jpg" target="new">
				LinguaLibreAtikamkew1
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Die Software Wikibase als Basis für neue Wissensprojekte</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikimedias freie und gemeinschaftlich gepflegte Wissensdatenbank Wikidata strukturiert das Wissen der Welt in sprachunabhängigen Datenobjekten, die mit verschiedenen Informationen angereichert werden können. Sowohl Menschen als auch Maschinen können auf diesen Datenschatz zugreifen und neues Wissen generieren. Auch Wikibase, die Software hinter Wikidata, ist als freie und offene Software für alle Menschen verfügbar. 2018 haben wir weiter daran gearbeitet, Wikibase noch einfacher nutzbar für andere zu gestalten und in Workshops mit interessierten Organisationen die Verwendung von Wikibase für offene Wissensprojekte erklärt.
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
					Eines der vielen Beispiele für ein mit Wikibase entstandenes offenes Datenprojekt ist <a href="https://lingualibre.fr/wiki/LinguaLibre:Main_Page" target="new">Lingua Libre</a>. Das Verzeichnis kostenloser Audio-Sprachaufzeichnungen hat das Ziel, den Klang der Sprachen der Welt und die Aussprache ihrer Wörter in Form strukturierter Daten zu bewahren und allen Menschen frei verfügbar zu machen. Seinen Ursprung hat das Projekt in Frankreich, wo es den Initiatoren darum ging, gefährdete Regionalsprachen zu fördern. Das tolle an Lingua Libre ist, das alle Menschen den gesprochenen Wortschatz vervollständigen können – sei es mit wenigen Worten, Sprichwörtern oder ganzen Sätzen. So können auch Menschen, die sich mit der Lautschrift nicht auskennen, per Klick hören, wie einzelne Worte ausgesprochen werden.
				</p>
				<p>
					Mittlerweile können über die Online-Anwendung bis zu 1200 Aufzeichnungen pro Stunde aufgenommen und direkt ins freie Medienarchiv Wikimedia Commons hochgeladen werden. Über die Anbindung an Wikidata bereichern die aufgezeichneten Klänge vor allem Wikimedia-Projekte wie Wikipedia oder auch das freie Wörterbuch Wiktionary – sie  unterstützen aber auch Spezialisten für Linguistik in ihrer Forschung.
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
						<a href="https://blog.wikimedia.de/2018/12/14/many-faces-of-wikibase-lingua-libre-macht-ˈʃpʁa%CB%90xə-hoerbar/" target="new">Blogbeitrag</a>
					<li>
						<a href="https://commons.wikimedia.org/wiki/Category:Lingua_Libre_pronunciation-deu" target="new">https://commons.wikimedia.org/wiki/Category:Lingua_Libre_pronunciation-deu</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/year-review" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Das Jahr 2018</p>
		</a>
	</section>
</main>

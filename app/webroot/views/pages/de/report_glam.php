<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(/assets/img/06_glam_hero.jpg)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">NEU (<a href="https://commons.wikimedia.org/wiki/File:Landemodul_ALINA_und_Lunar_Quattro_2.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Auf Tour zu Kulturgütern für die Wikipedia</em>
			</h1>
			<div class="section__teaser t--gamma">
				Gemeinsam mit Freiwilligen durch Kooperationen mit Institutionen Kulturgüter zu befreien und sie der Menschheit kostenfrei zugänglich zu machen – diese wilde Idee verfolgt Wikimedia mit seiner <a href="https://de.wikipedia.org/wiki/Wikipedia:GLAM" target="new">GLAM-Arbeit</a>. Die Abkürzung steht dabei für die Institutionen, die von der freien Zugänglichkeit von Kulturdaten begeistert werden sollen: Galleries, Libraries, Archives and Museums (Galerien, Bibliotheken, Archive und Museen). Zahlreiche spannende Partnerschaften sind aufgrund des Engagements der Wikimedia-Community 2017 neu entstanden und weiter gewachsen.
			</div>
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
			<div class="section__body t--gamma-serif">
				<p>
					Mit dem Format GLAM on Tour fördern wir die Kooperation zwischen Freiwilligen aus den Wikimedia-Projekten und Kulturinstitutionen. Acht Tour-Stationen fanden 2017 statt und führten von der Musikinstrumente-Abteilung des Museums für Kunst und Gewerbe in Hamburg bis zum Monte Verità im Tessin. Bei Sonderführungen, wissenschaftlichen Vorträgen und Schreibwerkstätten erwarben Freiwillige in der direkten Zusammenarbeit mit Vertretenden der Institutionen zusätzliches Fachwissen, das sie anschließend in den Wikimedia-Projekten mit der ganzen Welt teilten.
				</p>
				<p>
					2017 waren beispielsweise 21 Wikipedia-Aktive zu Gast im Schloss Fürstenberg und erweiterten ihr Wissen rund um eine der ältesten Porzellanmanufakturen Deutschlands. Ein ganzes Wochenende lang erhielten die Ehrenamtlichen exklusive Einblicke in die Porzellan-Produktionsstätten des Museums, hörten Expertenvorträge und arbeiteten gemeinsam daran, das Wissen rund um das Kulturgut Porzellan in der Wikipedia festzuhalten: 39 neue Artikel wurden erstellt, 25 bestehende erweitert und viele weitere mit neuen Bildern versehen. Die Wertschätzung der Ehrenamtlichen und ihrer Arbeit für die Wikipedia wurde nicht zuletzt durch die Anwesenheit des Bürgermeisters am Begrüßungstag deutlich.  
				</p>
				<p>
					Auch 2018 werden wir versuchen, die Freiwilligen weiter mit den GLAM-Institutionen zu vernetzen. Einen großen Stellenwert wird auch das Europäische Kulturerbejahr einnehmen, das über unsere Grenzen hinaus das Bewusstsein für das gemeinsame europäische Kulturerbe stärken soll.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href='<?= $url('/report', $lang) ?>' class="button button--report">Zur Themenübersicht</a>
		<a href='/report/fellow' class="button button--report">
			<p class="button--small"> Zum nächsten Projekt </p>
			<p> Offene Wissenschaft aktiv vorantreiben </p>
		</a>
	</section>
</main>

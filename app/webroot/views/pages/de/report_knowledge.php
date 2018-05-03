<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(/assets/img/03_knowledge_hero.jpg)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Elisabeth Mandl (WMDE) (<a href="https://commons.wikimedia.org/wiki/File:22._Mitgliederversammlung_28.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Einfacher Wissen teilen</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wer die richtigen Werkzeuge hat, kann leichter tolle Sachen erschaffen. Auch die ehrenamtlichen Autorinnen und Autoren, die die Inhalte der Wikipedia erstellen, brauchen die bestmöglichen Werkzeuge, damit sie so reibungslos wie möglich zu Freiem Wissen beitragen können. Mit dem Projekt <a href="https://de.wikipedia.org/wiki/Wikipedia:Technische_Wünsche" target="new">Technische Wünsche</a> verbessern wir die Software hinter der Wikipedia und entwickeln bessere Werkzeuge gemeinsam mit denen, die sie nutzen: den Ehrenamtlichen aus den Wikimedia-Projekten.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					2017 haben insgesamt 450 Wikimedia-Aktive (doppelt so viele wie bei der letzten Umfrage) 188 technische Wünsche eingereicht, diskutiert und priorisiert. Umgesetzt wurde 2017 unter anderem ein erweitertes Suchformular, das komplexere Suchanfragen innerhalb der Wikipedia enorm erleichtert. Ein weiterer erfüllter Wunsch besteht in der verbesserten Ansicht zwischen zwei Bearbeitungsständen eines Wikipedia-Artikels. Textänderungen innerhalb eines hinzugefügten Abschnitts werden jetzt hervorgehoben und können somit viel besser nachvollzogen werden.
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
					Die entwickelten neuen Werkzeuge kommen aber nicht nur den Aktiven innerhalb der deutschen Wikipedia zugute: Sie erleichtern die Arbeit nicht nur in den fast 300 Wikipedia-Sprachversionen, sondern in sämtlichen Wikimedia-Projekten aller Sprachen. Denn auch wenn die Ideen aus der deutschsprachigen Wikipedia kommen, müssen die neuen Funktionen international nutzbar sein. Dafür müssen sie beispielsweise auch für Sprachen funktionieren, in denen von rechts nach links geschrieben wird.
				</p>
				<p>
					Das wichtigste Werkzeug für die Erfüllung von technischen Wünschen bleibt der Kontakt zu den Ehrenamtlichen und ein offenes Ohr für deren Bedürfnisse. Die 2017 neu eingerichtete wöchentliche Online-Beratungsstunde mit dem Entwicklerteam von Wikimedia Deutschland wurde sehr gut angenommen und bereichert die Arbeit auf beiden Seiten. Auch mit den Entwicklerteams der Wikimedia Foundation in San Francisco arbeiten wir eng zusammen  und tauschen uns regelmäßig aus. 2018 werden weitere technische Wünsche erfüllt und neue Funktionen bereitgestellt, um die Arbeit an Freiem Wissen noch einfacher zu gestalten.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/wikicon" class="button button--report">
			<p class="button--small"> Zum nächsten Thema </p>
			<p> WikidataCon: Die erste internationale Konferenz rund um Wikidata </p>
		</a>
	</section>
</main>

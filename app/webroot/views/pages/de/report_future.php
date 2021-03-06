<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Der Blick nach vorn: Das sind unsere Pläne für die kommenden Jahre.<br>
			Matteo Paganelli,
			<a href="https://commons.wikimedia.org/wiki/File:Matteo-paganelli-157464-unsplash.jpg" target="new">
				Matteo-paganelli-157464-unsplash
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/publicdomain/zero/1.0/legalcode" target="new">
				CC0 1.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Ausblick: So geht’s 2019 und in den kommenden Jahren weiter</em>
			</h1>
			<div class="section__teaser t--gamma">
				Unsere Vision ist eine Welt, in der alle Menschen am Wissen der Menschheit teilhaben, es nutzen und mehren können. Diese große Idee erfordert auch große Veränderungen innerhalb unserer Gesellschaft.
			</div>
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
			<div class="section__body t--gamma-serif">
				<p>
					Projekte wie Wikipedia sind tolle Beispiele für gelebtes Freies Wissen. Wir müssen sie in den nächsten Jahren weiterentwickeln und dafür sorgen, dass sie relevant bleiben.
				</p>
				<p>
					Wir wissen aber auch: Die Welt besteht nicht nur aus Wikimedia-Projekten. Wir wollen mehr Menschen und Institutionen für den freien Zugang zu Wissen begeistern. Wir müssen uns mit anderen Organisationen vernetzen, unsere Vision hinaus in die Welt tragen und dafür sorgen, dass Freies Wissen in unserem Alltag zur Selbstverständlichkeit wird.
				</p>
				<p>
					Für die Arbeit in unseren drei Handlungsfeldern bedeutet das für die nächsten Jahre folgendes:
				</p>
			</div>
			<p class="h--gamma">
				Freiwillige
			</p>
			<div class="section__body t--gamma-serif">
				<p>
					Wir unterstützen die Wikimedia-Communitys – also die Ehrenamtlichen, die ihr Wissen in Projekten wie Wikipedia oder Wikidata mit der gesamten Welt teilen – da wo sie Hilfe benötigen. Wir begleiten sie aktiv dabei, neue Freiwillige aufzunehmen und zu integrieren und neue Technologien und Formate einzubeziehen.
				</p>
			</div>
			<p class="h--gamma">Technolgie</p>
			<div class="section__body t--gamma-serif">
				<p>
					Wir wollen erreichen, dass unsere freie Wissensdatenbank Wikidata ein zentraler  Knotenpunkt und die Software Wikibase ein essentieller Baustein in einem Netzwerk offener strukturierter Daten wird. Daran arbeiten wir gemeinsam mit Wikimedia-Aktiven, der Wikimedia-Bewegung und Partnerorganisationen. Je mehr Menschen dieses Netzwerk nutzen, desto mehr Nutzen zieht die gesamte Menschheit daraus.
				</p>
			</div>
			<p class="h--gamma">Rahmenbedingungen</p>
			<div class="section__body t--gamma-serif">
				<p>
					Wir wollen dafür sorgen, dass mehr Inhalte als Freies Wissen nutzbar sind. Dazu gehören beispielsweise Digitalisate von Kunstwerken, die nicht mehr urheberrechtlich geschützt sind und steuerfinanziertes Wissen wie staatlich beauftragte Studien. In einem Netzwerk mit Partnerorganisationen verstärken wir unsere politische Wirkung auch auf internationaler Ebene und bauen unsere Kooperationen mit Kulturinstitutionen weiter aus. Wir wollen, dass Menschen ein kritisches Bewusstsein für Informationen im Netz entwickeln und sich im digitalen Raum beteiligen können. Erst dann können sie aktiv zu Freiem Wissen beitragen und sich unserer Vision anschließen.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/glam" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Glam on Tour Grunewald</p>
		</a>
	</section>
</main>

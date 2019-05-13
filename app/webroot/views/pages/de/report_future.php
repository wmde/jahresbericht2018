<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Jason Krüger for Wikimedia Deutschland e.V. (<a href="https://commons.wikimedia.org/wiki/File:Wikimedia_Conference_2017_–_147.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
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
	<section class="section report__links">
		<div class="limit--l">
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/5CKFKyc7We4?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Welche Zukunft möchten wir gemeinsam aufbauen? Dieses Video zeigt den globalen Prozess 2017, die zukünftige Rolle von Wikimedia in der Welt zu definieren;
								Wikimedia 2030, Wikimedia Foundation,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">CC BY-SA 4.0</a>
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
				<ul class="bullet-list">
					<li><a href="https://meta.wikimedia.org/wiki/Strategy/Wikimedia_movement/2017/Direction/de#Unsere_Strategische_Ausrichtung:_Dienst_und_Gerechtigkeit" target="new">Die strategische Ausrichtung von Wikimedia</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/2018" class="button button--report">
			<p class="button--small"> Zum nächsten Thema </p>
			<p> Ausblick: So geht es 2018 weiter </p>
		</a>
	</section>
</main>

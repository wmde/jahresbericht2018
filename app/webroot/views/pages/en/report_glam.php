<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Brunswyk (<a href="https://commons.wikimedia.org/wiki/File:GLAM-on-Tour_Museum_Schloss_Fuerstenberg_Wikipedianer_bei_der_Arbeit_(Brunswyk_2017).JPG" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Wie die Kunst ins Netz kommt</em>
			</h1>
			<div class="section__teaser t--gamma">
				<strong>G</strong>alerien, Bibliotheken (<strong>L</strong>ibraries), <strong>A</strong>rchive und <strong>M</strong>useen (kurz GLAMs) bewahren Wissen und vermitteln es. Wikimedia Deutschlands Ziel ist es, dieses Wissen im digitalen Raum mithilfe der <a href="https://meta.wikimedia.org/wiki/Wikimedia_projects" target="new">Wikimedia-Projekte</a> und dem Engagement kulturbegeisterter Ehrenamtlicher frei und offen für alle Menschen verfügbar zu machen. Das Konzept überzeugt: 15 Kulturinstitutionen von Berlin bis Zürich haben 2018 ihre Türen für GLAM on Tour-Stationen geöffnet. Besonders gefreut haben wir uns über die Einladung in ein weiteres Juwel der Stiftung Preußische Schlösser und Gärten: das Jagdschloss Grunewald.
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
					Das Amsterdamer <a href="https://www.rijksmuseum.nl/en/rijksstudio?ii=0&p=0&from=2018-12-19T13%3A11%3A50.4346035Z" target="new">Rijksmuseum</a>, das <a href="https://kottke.org/18/11/the-art-institute-of-chicago-has-put-50000-high-res-images-from-their-collection-online" target="new">Art Institute of Chicago</a>, zuletzt das <a href="https://wikimediafoundation.org/2019/01/24/we-applaud-the-cleveland-museum-of-arts-new-open-access-policy-and-heres-what-remains-to-be-done/" target="new">Cleveland Museum of Art</a>: Sie alle haben Tausende Werke von Hokusai bis Edward Hopper online unter freier Lizenz veröffentlicht. Auch die deutsche Kulturszene sucht nach neuen Wegen der Interaktion mit ihrem Publikum und gänzlich neuen Zielgruppen – nicht mehr bloß vor Ort.
				</p>
				<p>
					Umso größer ist das Interesse an neuen Partnern in den Netzcommunitys: Als populärste Wissenssammlung im Internet ist Wikipedia für Millionen Menschen die erste Anlaufstelle für Informationen und damit auch ein wichtiges Medium für Kulturinstitutionen. Aus diesem gemeinsamen Interesse von Kulturszene und Wikipedia-Freiwilligen ist eine sehr aktive GLAM-Community entstanden: Mit fachkundiger Unterstützung der einladenden Institution dokumentieren, fotografieren und schreiben Wikipedia-Freiwillige Artikel zu Sammlungen, Institutionen und einzelnen Werken. Wikimedia Deutschland fungiert als Organisator und Ansprechpartner für Museen und Stiftungen und unterstützt die Freiwilligen vor Ort. Im besten Fall entstehen daraus dann langfristige Partnerschaften.
				</p>
				<p>
					Eine solche ist die Kooperation mit der Stiftung Preußische Schlösser und Gärten, die 2015 erstmals Wikimedia-Aktive ins Schloss Caputh einlud. 2018 folgte ein Wochenende zu Gast im Jagdschloss Grunewald: Dem Anlass zu Ehren führte die “Schlossherrin” selbst durch den historischen Bau und seine Geschichte, ein Kunsthistoriker der Stiftung trug mit seinem enormen Wissensschatz rund um die Cranach-Sammlung zur Überarbeitung und Neuerstellung von über 50 Wikipedia-Artikeln durch die Freiwilligen bei. Auch 2019 wird diese erfolgreiche Partnerschaft mit einer sommerlichen Kulturreise in die Parkanlage Sanssouci fortgesetzt.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/fellow" class="button button--report">
			<p class="button--small"> Zum nächsten Thema </p>
			<p> Offene Wissenschaft aktiv vorantreiben </p>
		</a>
	</section>
</main>

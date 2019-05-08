<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Lena Schall (motionensemble.de) (<a href="https://commons.wikimedia.org/wiki/File:Figur_Machmit_3_Wikipedia-Animation.png" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Wiki Loves Monuments im europäischen Kulturerbejahr</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikipedia kennen alle, Millionen Menschen schauen täglich in die größte gemeinschaftlich erstellte digitale Wissenssammlung unserer Zeit. Aber sie könnte noch viel bunter sein. Fotos machen das Wissen der Welt auf anschauliche Weise erlebbar. Daher lädt die internationale Wikipedia-Community jedes Jahr im September alle Menschen dazu ein, bei Wiki Loves Monuments mitzumachen und Bilder von Kulturdenkmälern mit der ganzen Welt zu teilen.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Wiki Loves Monuments gilt seit 2012 laut Guinnes-Buch der Rekorde als größter Fotowettbewerb der Welt und wird von ehrenamtlichen Wikipedia-Aktiven organisiert. Jährlich werden dabei allein in Deutschland ca. 20.000 Bilder unter einer freien Lizenz ins Medienarchiv Wikimedia Commons geladen und stehen damit für Wikipedia und alle Menschen zur freien Verfügung. Der Wettbewerb leistet einen großen Beitrag zum Denkmalschutz und der Bewahrung kultureller Vielfalt.
				</p>
				<p>
					2018 stand Wiki Loves Monuments ganz im Zeichen des <a href="https://sharingheritage.de/" target="new">Europäischen Kulturerbejahres</a>. Gefördert von der <a href="https://de.wikipedia.org/wiki/Beauftragter_der_Bundesregierung_für_Kultur_und_Medien" target="new">Beauftragten der Bundesregierung für Kultur und Medien</a> setzte Wikimedia Deutschland gemeinsam mit Wikimedia-Aktiven verschiedene Maßnahmen ein, um den Fotowettbewerb in der Öffentlichkeit noch bekannter und attraktiver zu machen. Mit einem internationalen Sonderpreis wurde beispielsweise der Blick auf das Besondere am europäischen Kulturerbe und seiner Geschichte gelenkt: Wo finden sich Spuren gemeinsamer europäischer Geschichte? Welches Denkmal in meiner Nähe zeugt von unserer geteilten Geschichte? Der Sonderpreis lud Menschen aller Altersklassen dazu ein, bei einer Spurensuche Kulturerbe zu erkunden.
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
					Insbesondere an jüngere Zielgruppen richtete sich ein <a href="https://blog.wikimedia.de/2018/06/08/sie-haben-uns-ein-denkmal-gebaut/" target="new">Jugendfotoworkshop</a>, der im Juni in Erfurt stattfand. Hier wurden Jugendliche befähigt, Denkmäler zu erkennen, in guter Qualität abzulichten und die Bilder für den Wettbewerb hochzuladen. Nach einer theoretischen Einführung konnten die Fotografie-Begeisterten ihre neu erworbenen Kenntnisse bei einem Fotowalk durch die denkmalgeschützte Innenstadt direkt in die Praxis umsetzen.
				</p>
					Speziell für die Zusammenarbeit mit Institutionen haben wir gemeinsam mit der Deutschen UNESCO-Kommission Wikimedia-Aktive zu Wikipedia-Kulturbotschafterinnen und -Kulturbotschaftern weitergebildet. Die Teilnehmenden werden in Seminaren und Workshops dazu qualifiziert, erfolgreiche Kooperationsprojekte mit Kultur- und Gedächtnisinstitutionen zu initiieren und fortzuführen.
				<p>
					Um den Einsatz neuester Foto-Technik drehte sich der Workshop, bei dem fortgeschrittene Fotografie-Begeisterte lernten 360°-Panoramen von denkmalgeschützten Kulturerbestätten aufzunehmen. 360°-Fotografien lassen die Betrachtenden in beeindruckender Weise die Atmosphäre des Aufnahmeorts spüren und verleihen Denkmälern in der Wikipedia so ein ganz besonderes Gesicht. Auch diese neue Technik wurde im Rahmen von Wiki Loves Monuments 2018 erstmals mit Spezialpreisen ausgezeichnet.
				</p>
				<p>
					Die beeindruckendsten Bilder des Wettbewerbs im Kulturerbejahr werden von Wikimedia Deutschland in einem besonderen Bildband zu Wiki Loves Monuments gesammelt und veröffentlicht. Viel weitreichender ist jedoch der große Nutzen, den die Tausenden Bilder in der Wikipedia erreichen. Denn alle Bilder tragen dazu bei, dass Menschen weltweit einen Eindruck der Denkmäler gewinnen können. Damit wird Geschichte bewahrt und Wissen geteilt.
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
								<iframe src="https://www.youtube-nocookie.com/embed/CL3P62YWOY4?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Auf der 20. Mitgliederversammlung von Wikimedia Deutschland am 17.06.2017 in Bamberg wird der Vereinsschwerpunkt „Neue Freiwillige für die Wikipedia gewinnen und halten“ vorgestellt;
								<a href="http://commons.wikimedia.org/wiki/File:Neue_Ehrenamtliche_gewinnen_und_halten_-_Video_von_der_20._Mitgliederversammlung_-_Langversion.webm" target="new">Wikimedia Deutschland sucht neue Freiwillige für die Wikipedia</a>, kreative Leitung: Elisabeth Mandl, Kamera und Schnitt: Stefan Brainbauer für Wikimedia Deutschland
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/knowledge" class="button button--report">
			<p class="button--small"> Zum nächsten Thema </p>
			<p> Einfacher Wissen teilen </p>
		</a>
	</section>
</main>
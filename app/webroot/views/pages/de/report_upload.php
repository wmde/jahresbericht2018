<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Gemeinsam für ein freies Internet: 2018 haben wir uns mit Partnern aus Internetwirtschaft und Zivilgesellschaft gegen Upload-Filter engagiert.<br>
			Christian Schneider

			<a href="https://commons.wikimedia.org/wiki/File:No-Upload-Filter_Verteilaktion_%286%29.jpg" target="new">
				No-Upload-Filter Verteilaktion (6)
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Vom Nischenthema zur gesellschaftlichen Debatte: 15 Organisationen gegen Upload-Filter</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikipedia lebt vom freien Austausch von Informationen. Die Online-Wissenssammlung gibt wieder, was in Büchern, Medien und wissenschaftlichen Artikeln dargelegt wird und durch weltweiten Austausch neuer Erkenntnisse entsteht. Deswegen setzen wir uns leidenschaftlich für ein freies Netz ein, das Austausch und Kooperation fördert.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Im Rahmen der europäischen Reform des Urheberrechts, die teils wichtige Verbesserungen auch für den freien Zugang zu Wissen bringen wird, wurde 2016 erstmals die Einführung von Upload-Filtern zur Verhinderung von Urheberrechtsverletzungen propagiert. Egal ob Text, Bild oder Videobeitrag – sämtliche Inhalte einzelner Nutzenden auf größeren Internetplattformen sollen dem Vorschlag nach bereits vor dem Hochladen (Upload) auf vermeintliche Urheberrechtsverletzungen geprüft werden. Solche, die als potenziell rechtsverletzend maschinell erkannt werden, sollen blockiert werden. Differenzierte Urteile darüber, was rechtlich erlaubt ist oder nicht – sei es Kritik, Satire oder Kunst – können diese Filter aber nicht treffen. Somit bedrohen sie freie Meinungsäußerung und Vielfalt im Netz.
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
			</div>
			<div class="section__body t--gamma-serif">
					2018 haben wir uns deshalb in einem Offenen Brief mit zahlreichen Partnerorganisationen zusammengetan, um gegen die Einführung von Upload-Filtern zu kämpfen. Neben Wikimedia Deutschland haben sich 14 weitere Organisationen aus Zivilgesellschaft und Internetwirtschaft (darunter Bitkom, Verbraucherzentrale Bundesverband und die Open Knowledge Foundation) mit ihren Bedenken an Bundesregierung und EU-Abgeordnete gewandt und damit ein öffentliches Zeichen gesetzt. Wikipedia wurde letztendlich von der Filterpflicht ausgenommen, dennoch haben wir uns gemeinsam mit den Wikipedia-Freiwilligen weiter für Verbesserungen der Reform im Sinne des Freien Wissens eingesetzt.
				</p>
				<p>
					Immer wieder haben wir zusammen mit zahlreichen Netzorganisationen über die Probleme der Reform und Alternativvorschläge informiert. Aus einem komplexen „Nischenthema“ ist spätestens 2019 eine breite gesellschaftliche Debatte über <a href="https://blog.wikimedia.de/2019/04/16/freies-wissen-auf-europaeischer-ebene-angekommen/" target="new">Freiheit und Reglementierung des Netzes</a> geworden. Vor der Abstimmung im EU-Parlament gingen tausende, vor allem junge Menschen deutschlandweit gegen Upload-Filter auf die Straße. Die Unterstützung des Parlaments haben die Filter trotzdem erhalten, die Umsetzung der Richtlinie erfolgt nun aber unter dem kritischen Blick einer interessierten und informierten Öffentlichkeit.
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
								<iframe src="https://www.youtube-nocookie.com/embed/upMR4T4lKl8?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Filter-Verteilaktion
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/tvc7hcmbTds?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Monsters of Law zu Uploadfiltern
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next swiper-button-next--black"></div>
				<div class="swiper-button-prev swiper-button-prev--black"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--s">
			<div class="border-box border-box--report">
				<div class="t--delta">LINKS</div>
				<ul class="bullet-list">
					<li>
						Mehr Informationen zu unserer politischen Arbeit auf der
						<a href="https://meta.wikimedia.org/wiki/DE_policy" target="new">Projektwebsite</a>
					<li>
						Blog:
						<a href="https://blog.wikimedia.de/2019/02/11/probleme-der-eu-urheberrechtsreform-bleiben-bestehen/" target="new">Probleme der EU-Urheberrechtsreform bleiben bestehen</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/03/16/wird-die-wikipedia-bald-vorgefiltert-upload-filter-nein-danke/" target="new">Wird die Wikipedia bald vorgefiltert?</a>
					<li>
						<a href="https://blog.wikimedia.de/2019/03/15/wikipedia-protest/" target="new">Wikipedia schaltet sich ab – für das freie Internet</a>
					<li>
						<a href="https://blog.wikimedia.de/2019/04/16/freies-wissen-auf-europaeischer-ebene-angekommen/" target="new">Freies Wissen: Auf europäischer Ebene angekommen </a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/wiki-loves-monuments" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Wiki Loves Monuments</p>
		</a>
	</section>
</main>

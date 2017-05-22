<main class="report-detail">
	<section
		class="hero cp cp--nav-zone"
		style="background-image: url(/assets/img/01_volunteers_hero.jpg)"
	>
		<img class="hero__center-illu" src="/assets/ico/01_volunteers_white.svg" alt="Illustration" >
		<div class="hero__filter"></div>
	</section>
	<section class="section cp">
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Neue Freiwillige</em><br>Neue Autorinnen und Autoren für die Wikipedia gesucht
			</h1>
			<div class="section__teaser t--gamma">
				Wikipedia zu lesen ist einfach und alltäglich für Viele. Dass sie auch mitschreiben und ihre Kenntnisse einbringen ­können, wissen aber die Wenigsten. Bei Wikipedia gibt es keine hauptamtliche Redaktion; alle Inhalte sind ehrenamtlichem Engagement zu verdanken. Die Wikipedia lebt also von der Mitarbeit möglichst vieler Menschen. Doch die Zahl der ­Autorinnen und Autoren, die regelmäßig Bearbeitungen durchführen, geht jedes Jahr zurück. Und das bei immer mehr ­Artikeln – im November 2016 wurde die 2 Millionen-Marke in der deutschsprachigen Wikipedia geknackt.					</div>
			<div class="section__body t--gamma-serif">
				<p>
					Wenn sich auch in Zukunft immer weniger Menschen engagieren, können bestehende Artikel nicht mehr aktuell gehalten werden – oder keine neuen entstehen. Das würde dazu führen, dass man Wikipedia irgendwann nicht mehr sinnvoll nutzen kann und sich auf die (leider vergebliche) Suche nach anderen kosten­losen und freien Wissensquellen machen müsste.
				</p>
				<p>
					Wikimedia Deutschland möchte der Entwicklung der sinkenden Autorenzahlen entgegenwirken. Im Jahr 2016 wollten wir neue Wege finden, um Freiwillige für die Wikipedia zu gewinnen und diese bei ihrem kontinuierlichen Engagement zu unterstützen. Wir hatten uns vorgenommen, eine große Kampagne durchzuführen, um neue Freiwillige auf die Arbeit in Wikipedia aufmerksam zu machen. Erst einmal mussten jedoch viel Grundlagenarbeit geleistet und Inhalte geschaffen werden. So haben wir uns in einem ersten Schritt auf das Halten von Neu-Angemeldeten fokussiert und wollten gemeinsam mit der Community eine Infrastruktur aufbauen, die den Einstieg in Wikipedia weniger anspruchsvoll gestaltet. Erst dann ist es sinn­voll, mehr Menschen von einer Mitarbeit zu überzeugen.
				</p>
				<p>
					Zu Beginn des Projekts haben wir mittels einer Studie die aktuelle Situation analysiert. Zudem gab es gemeinsame Workshops mit Ehrenamtlichen sowie eine Umfrage zur Willkommenskultur in der Wikipedia. Vor allem Interviews mit potenziellen Neulingen haben uns gezeigt: Hilfe und Einstiegsmöglichkeiten, zugeschnitten auf neue Autorinnen und Autoren, sind ein elementarer Punkt, denn Schwierigkeiten tauchen vor allem während der ersten Bearbeitungen auf. Hilfeseiten werden in der Wikipedia nicht so einfach gefunden und es gibt keine spezielle Seite für Neulinge. Wenn Bearbeitungen oder neue Artikel sofort gelöscht werden, führt das leicht zu Frustration. Hier möchte Wikimedia Deutschland ansetzen und den Einstieg für neue Autorinnen und Autoren einfacher gestalten, denn nur so bleiben sie auch langfristig dabei.
				</p>
				<p>
					Als ersten Schritt wollten wir Neuen in einem kompakten und leicht zugänglichen Format erklären, wie Wikipedia funktioniert. Dafür haben wir verschiedene Videos produziert: Die Erklärvideos und Tutorials können innerhalb der Wikipedia eingesetzt werden. Sie wurden von der Community gut angenommen und bereits auf vielen Hilfeseiten eingebaut. Die Motivationsvideos verfolgen einen anderen Ansatz: Sie machen auf die Möglichkeit der Arbeit in der Wikipedia aufmerksam und wurden über viele verschiedene Kanäle gestreut.
				</p>
				<p>
					Ein weiteres geplantes Projekt war es, gemeinsam mit der Community die Hilfeseiten der Wikipedia zu vereinfachen und für neue Autorinnen und Autoren leichter zugänglich zu machen. Dies musste jedoch verschoben werden, da ein solches Vorhaben einer längerfristigen Planung bedarf.
				</p>
				<p>
					Wikimedia Deutschland hat 2016 eine gute Basis ge­­­schaffen, um die Neuautorengewinnung für die Wikipedia voranzutreiben. Weitere Inhalte und Kampagnen werden wir 2017 entwickeln, damit die Wikipedia auch in Zukunft verlässlich, umfassend, aktuell und damit eine der zentralen Informationsquellen bleibt.
				</p>
			</div>
		</div>
	</section>
	<section class="section cp--center-section">
		<div class="limit--l">
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<figure class="fig">
							<img class="fig__image" src="/assets/img/abraham_taherivand.jpg" alt="Porträt von Abraham Taherivand">
							<figcaption class="fig__caption limit--s">
								Abraham Taherivand.
								<a href="http://renezieger.de" target="new">Bild: René Zieger</a>,
								<a href="https://creativecommons.org/licenses/by/4.0/" target="new">CC BY 4.0</a>
							</figcaption>
						</figure>
					</div>
					<?php foreach ($videos as $video): ?>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://player.vimeo.com/video/<?= $video['id']?>?byline=0&title=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								<?= $video['title'][$lang] ?>
								Wird mein Text in der Wikipedia sofort veröffentlicht?
								<a href="https://creativecommons.org/licenses/by-sa/3.0/" target="new">CC BY-SA 3.0</a>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="swiper-button-next swiper-button-next--green"></div>
				<div class="swiper-button-prev swiper-button-prev--green"></div>
			</div>
		</div>
	</section>
	<section class="section cp--center-section">
		<div class="limit--s">
			<div class="border-box border-box--green">
				<div class="h--gamma">LINKS</div>
				<ul class="bullet-list">
					<li><a href="https://example.org" target="new">Projektseite</a>
					<li><a href="https://example.org" target="new">Lorem</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="section cp--center-section bg--icons-light-blue">
		<div class="section__actions">
			<a href="<?= $url('/report', $lang) ?>" class="button button--bg-green">Zur Themenübersicht</a>
		</div>
	</section>
</main>
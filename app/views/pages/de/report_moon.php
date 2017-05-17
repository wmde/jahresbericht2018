<main class="report-detail">
	<section
		class="hero cp cp--nav-zone"
		style="background-image: url(/assets/img/hero_moon.jpg)"
	>
		<img class="hero__center-illu" src="/assets/ico/moon_white.svg" alt="Illustration" >
	</section>
	<section class="section cp">
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Gratulieren:</em><br>Wikipedia wird 15…und fliegt zum Mond!
			</h1>
			<div class="section__teaser t--gamma">
				Eine Enzyklopädie, die alle einfach verändern dürfen? „Das hat doch keine Zukunft, das
				kann nicht funktionieren...“, hieß es noch 2001. 2016 ist Wikipedia nun 15 Jahre alt
				geworden. Aller Zweifel zum Trotz ist aus der viel belächelten Idee eines der größten
				Freiwilligenprojekte der Welt geworden: Heute lesen und bearbeiten Menschen aus aller Welt
				rund 44 Millionen Artikel in fast 300 Sprachen.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Zum 15. Geburtstag bekam Wikipedia ein ganz besonderes Geschenk: Weil sie die größte Enzyklopädie der Geschichte und ein Symbol der Zusammenarbeit ist, darf Wikipedia auf eine Reise zum Mond gehen. Schließlich lebt das Projekt davon, dass Menschen ihr Wissen teilen – mit der ganzen Welt und nun sogar noch weit darüber hinaus.
				</p>
				<blockquote class="quote">
					<div class="quote__body">
						<p class="t--beta">
							„Meines Erachtens ist die Bedeutung der Idee Freies Wissen kaum zu überschätzen. Offene Konzepte, die nicht nur kostenlosen Zugriff, sondern vor allem auch eine transformative Nachnutzung ermöglichen, haben nicht nur in der Wissenschaft großes Potenzial, sondern können insgesamt zu einem effektiveren, effizienteren, aber auch gerechteren Umgang mit Wissen beitragen."
						</p>
					</div>
					<footer class="quote__author t--gamma">
						Marion Goller, Fellow von der Westfälischen Wilhelms-Universität Münster
					</footer>
				</blockquote>
				<p>
					Die PT Scientists aus Berlin, die als Freizeit-Wissenschaftler beim Google Lunar-X-Prize gestartet sind, möchten Wikipedia mit ihrem ersten rein privat finanzierten Mondflug ein Denkmal setzen. Als Einsteiger in die Thematik der Raumfahrt haben sich die PT Scientists nämlich selbst viel Wissen aus Wikipedia angeeignet. Robert Böhme, Leiter der PT Scientists, erinnert sich: „Für uns war Wikipedia am Anfang eine unheimlich wichtige Wissensquelle, weil wir einfach Außenseiter aus der Raumfahrt sind. Und es hat uns geholfen, den Einstieg zu kriegen und einfach das Nötigste zu lernen und zu sehen, was mit einem freien Austausch von Informationen alles möglich ist.“
				</p>
				<p>
					Da die Enzyklopädie in ihrem Umfang mittlerweile jedoch alle Grenzen herkömmlicher Datenträger sprengt, musste zuerst entschieden werden, welche Artikel für den Mond festgehalten werden sollen. Für das Projekt stand uns eine 20 Gigabyte umfassende Datendisc zur Verfügung, die durch ihre besondere Beschaffenheit die Reise ins All überstehen soll. In der ersten Phase des Projekts Wikipedia to the Moon wurde von der internationalen Wikipedia-Community diskutiert, welche der Millionen Artikel verewigt werden sollen. Einer der Vorschläge lautete, den Wikipedia-Artikel über den Mond aus allen Sprachen der Welt zum Mond zu schicken. Auch der Vorschlag, alle Artikel zu nehmen, mit deren Hilfe menschliche DNA von Außerirdischen künstlich rekonstruiert werden könne, fand einige Anhänger. Mit den exzellenten Artikeln und Listen aus allen Sprachversionen, entschied sich die Community schließlich dafür, die exzellenten Artikel aus der Wikipedia als Zeitkapsel für die Nachwelt festzuhalten. Dies sind Artikel, die nach einem umfangreichen Bewertungsprozess der Wikipedia-Community als die besten und vollständigsten gelten. Von Juli bis Oktober arbeiteten daraufhin Wikipedia-Autorinnen und -Autoren aus aller Welt an ihren Lieblingsartikeln, um diese noch besser zu machen und sie für einen Platz auf der Mond-Datendisc zu qualifizieren. Mehr als 450 neue exzellente Artikel sind so innerhalb von vier Monaten entstanden, 19 davon aus Deutschland. Das Münchner Olympiastadion wird nun ebenso auf dem Mond verewigt wie Dalís Schnurrbart.
				</p>
				<p>
					Wikimedia Deutschland begleitete diesen Prozess kommunikativ und logistisch. Wir wollten das Projekt nutzen, um auf die Möglichkeit der Mit­arbeit in Wikipedia aufmerksam zu machen. Auf der Abschlussveranstaltung des Projekts am 05. Dezember 2016, dem Internationalen Tag des Ehren­amtes, waren die PT Scientists mit ihrem Lande­modul ALINA und einem Mondrover bei Wikimedia Deutschland zu Besuch. Sie erhielten die Wikipedia-Disc und beantworteten Fragen rund um ihre Mission zum Mond. Voraussichtlich Anfang 2018 wird der Datenträger am Landemodul befestigt und zum Mond geschossen, wo er dann für mindestens 1.000 Jahre als Zeitkapsel zu finden sein wird. Gemeinsam mit den Artikeln, werden auch die Benutzernamen der jeweiligen Autorinnen und Autoren auf dem Mond hinterlegt, um ihr Engagement im digitalen Ehrenamt zu würdigen.
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
<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Mitentscheiden: Auf der Mitgliederversammlung von Wikimedia Deutschland werden richtungsweisende Entscheidungen zur Zukunft des Vereins getroffen.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Annika_Möller_%28WMDE%29" target="new">
				Anne Braun for Wikimedia Deutschland
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:23._Mitgliederversammlung_Wikimedia_Deutschland_22.jpg" target="new">
				23. Mitgliederversammlung Wikimedia Deutschland 22
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Mehr als 70.000 Mitglieder – Ein starkes Fundament</em>
			</h1>
			<div class="section__teaser t--gamma">
				Als Gesellschaft zur Förderung Freien Wissens engagieren wir uns auf zahlreichen Wegen, um unsere Vision einer Welt, in der das Wissen der Welt allen Menschen zur freien Verfügung steht, zu verwirklichen. Möglich ist das vor allem Dank der Unterstützung unserer Vereinsmitglieder. Sie sind neben den tausenden Spendenden ein tragender Pfeiler für Wikimedia Deutschland und unser Engagement für Freies Wissen.
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
					Die Zahl der Menschen, die uns dauerhaft in unserer Arbeit unterstützen, wächst von Jahr zu Jahr – mittlerweile sind es bereits über 70.000 Mitglieder (Stand: März 2019). Sie geben unseren Zielen nicht nur das so wichtige Fundament, sondern gestalten auch aktiv den Verein und seine Zukunft mit. So beispielsweise auf den Mitgliederversammlungen, die 2018 in Karlsruhe und Berlin stattfanden:
				</p>
				<p>
					Mehr als 250 Besucherinnen, Besucher und Mitglieder kamen im Mai im Zentrum für Kunst und Medien in Karlsruhe zusammen. Über eine interaktive Ausstellungsfläche, in Kurzvorträgen und offenen Gesprächsrunden konnten sie die Welt rund um Wikipedia und Wikimedia besser kennenlernen.
				</p>
				<p>
					Im Dezember kam dann die 23. Mitgliederversammlung in Berlin zusammen. Neben der <a href="https://blog.wikimedia.de/2018/12/01/6-praesidium-von-wikimedia-deutschland-ist-gewaehlt/" target="new">Neuwahl des ehrenamtlichen Präsidiums</a> wurden hier richtungsweisende Entscheidungen zur Zukunft des Vereins getroffen. So entscheiden die Mitglieder künftig im Rahmen der Mitgliederversammlung direkt die strategische Ausrichtung des Vereins mit. In diesem Zuge beschloss die Mitgliederversammlung die <a href="https://meta.wikimedia.org/wiki/Wikimedia_Deutschland/Zukunftsprozess/Strategien" target="new">strategischen Richtungen für die drei Handlungsfelder</a> (Freiwillige, Technologie, Rahmenbedingungen), die die Arbeit Wikimedias in den nächsten Jahren maßgeblich prägen werden.
				</p>
				<p>
					Eine weitere Neuerung ist der Beschluss der Mitglieder, sich ab 2019 nur noch einmal jährlich zur Mitgliederversammlung zu treffen. Diese wird dann Teil eines ganzen Wikimedia-Wochenendes – erstmals am 15. und 16. Juni 2019 in Berlin. Am Samstag laden wir Mitglieder, Partnerorganisationen, Freunde, Ehrenamtliche und die Öffentlichkeit am großen <a href="https://tagdesfreienwissens.wikimedia.de/" target="new">Tag des Freien Wissens</a> dazu ein, den Verein und die Wikimedia-Projekte besser kennenzulernen. Die formelle Mitgliederversammlung findet dann am Sonntag statt und schließt damit das erste Wikimedia-Wochenende.
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
								<iframe src="https://www.youtube-nocookie.com/embed/L6pZtGB56xw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								<a href="https://www.youtube.com/watch?v=L6pZtGB56xw" target="new">
								Grußbotschaft des 6. Präsidiums von Wikimedia Deutschland
								</a>
								<br>
								Anne Braun für Wikimedia Deutschland,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">
									CC BY-SA 4.0
								</a>
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
					<li>
						Mehr Informationen zur Mitgliedschaft bei Wikimedia Deutschland auf unserer
						<a href="https://wikimedia.de/de/mitglied-werden" target="new">Website</a>
					<li>
						Blog:
						<a href="https://blog.wikimedia.de/2018/05/28/die-22-mv-im-rueckblick-wer-nicht-wagt/" target="new">Die 22. MV im Rückblick: Wer nicht wagt…</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/12/01/6-praesidium-von-wikimedia-deutschland-ist-gewaehlt/" target="new">6. Präsidium von Wikimedia Deutschland ist gewählt</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/prospects" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Internationales: Wikimedia 2030</p>
		</a>
	</section>
</main>

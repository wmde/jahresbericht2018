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
				<em>Wikimedias strategische Ausrichtung anpacken</em>
			</h1>
			<div class="section__teaser t--gamma">
				Was möchten wir – die internationale Wikimedia-Bewegung – in den nächsten 10-15 Jahren aufbauen und erreichen? Wofür soll Wikimedia im Jahr 2030 in der Welt bekannt sein? Und wer wird sich unserer Bewegung angeschlossen haben? Diesen großen Fragen widmeten sich im Jahr 2017 hunderte von Menschen und Organisationen, die gemeinsam die Zukunft von Wikimedia gestalten möchten. In einem groß angelegten, globalen Strategieprozess  <a href="https://meta.wikimedia.org/wiki/Strategy/Wikimedia_movement/2017/de" target="new">„Wikimedia 2030“</a> wurden sowohl Wikimedianerinnen und Wikimedianer als auch viele externe Partnerorganisationen sowie Lesende und Spendende zur Zukunft Wikimedias befragt. Mithilfe dieser vielfältigen Beiträge sowie begleitenden Recherchen und Analysen haben wir im internationalen Movement-Strategieprozess eine neue Strategische Ausrichtung entwickelt.
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
					Zum ersten Mal bekennt sich Wikimedia dazu, eine soziale Bewegung zu sein, die weit über die Grenzen der Enzyklopädie hinaus auf die Gesellschaft wirken will: Wir wollen die essenzielle Infrastruktur im Ökosystems des Freien Wissens werden. Alle, die unsere Vision teilen, können sich uns anschließen. Dabei legen wir besonderen Fokus auf die Konzepte „Wissen als Dienst“ und „Gerechtigkeit des Wissens“.
				</p>
				<p>
					Wissen als Dienst: Wir werden zu einer Plattform, die über Schnittstellen und Communitys der ganzen Welt Freies Wissen anbietet, immer mit dem Ziel, verschiedene Arten von Freiem Wissen zu sammeln und möglichst vielen Organisationen, Menschen und Maschinen zur Verfügung zu stellen.
				</p>
				<p>
					Gerechtigkeit des Wissens bedeutet, dass wir uns verstärkt den Menschen und dem Wissen zuwenden, die bisher aufgrund von Machtstrukturen und Privilegien sowie politischen oder sozialen Hürden ausgeschlossen waren.
				</p>
				<p>
					Diese strategische Ausrichtung wurde von einer überwältigenden Mehrheit an Wikimedia-Organisationen unterstützt, und auch Wikimedia Deutschland hat sie aus ganzem Herzen bestätigt. Jetzt ist es die Aufgabe aller Beteiligten innerhalb der Wikimedia-Bewegung, gemeinsam mit unseren Partnern herauszufinden, wie wir die neue Ausrichtung in unsere tägliche Arbeit integrieren. Die Zeichen stehen auf Wandel, und Wikimedia Deutschland wird sich auch in der nächsten Phase des Prozesses aktiv in die internationale Debatte einbringen.
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
			<p> Ausblick: so geht es 2018 weiter </p>
		</a>
	</section>
</main>

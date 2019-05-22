<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			2018 hatten Interessierte im deutschsprachigen Raum die Möglichkeit, hinter die Kulissen der Wikipedia zu schauen.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Vkw.studiogood" target="new">
				Vkw.studiogood
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:Keyvisual-wikipedia-lokal-2018.png" target="new">
				Keyvisual-wikipedia-lokal-2018
			</a>,

			Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Zu Gast bei der Wikipedia</em>
			</h1>
			<div class="section__teaser t--gamma">
				Seit mehreren Jahren sinkt die Zahl der freiwilligen Autorinnen und Autoren, die in der Wikipedia ihr Wissen mit allen Menschen teilen. Seit 2016 versucht Wikimedia Deutschland aktiv, dieser Entwicklung entgegenzuwirken. Denn wenn nicht mehr genug Menschen in der Wikipedia Artikel schreiben, Fehler ausbessern, Bilder einpflegen und Informationen aktuell halten, dann leidet die Qualität der freien Online-Enzyklopädie. Was die Wikipedia also dringend braucht, sind neue Menschen, die sich am bekanntesten Wissensprojekt unserer Zeit beteiligen wollen.
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
					In den letzten Jahren hat Wikimedia Deutschland daher versucht, mehr Mitwirkende für die Arbeit an Wikipedia zu gewinnen. Dazu gehört immer wieder grundlegende Aufklärungsarbeit über die Funktionsweise der Enzyklopädie: Noch immer ist vielen Lesenden der Wikipedia nicht bewusst, dass sich hier wirklich alle beteiligen können und Wikipedia ausschließlich von ehrenamtlichem Engagement lebt. Mit großen Bannerkampagnen haben wir einfache Möglichkeiten zur Mitarbeit aufgezeigt, jedoch mit nur mäßigem Erfolg: Selbst wenn viele Menschen verstanden haben, dass alle mitmachen können bei Wikipedia – den Schritt zur langfristigen Beteiligung gingen nur sehr wenige. Auch verbesserte Online-Hilfsangebote für Wikipedia-Neulinge, wie Erklärvideos oder Hilfeseiten, konnten den Trend des Autorenschwundes nicht umkehren.
				</p>
				<p>
					2018 haben wir mehrere neue Ansätze ausprobiert, um mehr Menschen für die Mitarbeit an Wikipedia zu begeistern. Wir haben zwar weiterhin auf verbesserte Online-Angebote für Neulinge gesetzt, wodurch beispielsweise <a href="https://outreachdashboard.wmflabs.org/training/wikipedia-editieren" target="new">vier angeleitete Trainingsmodule</a> zur Arbeit in der Wikipedia entstanden sind. Hier können die Grundlagen des Editierens der Enzyklopädie gut erlernt werden. Eine <a href="https://tools.wmflabs.org/mitmachen/" target="new">neue Mitmach-Seite</a> zeigt auf, in welchen Wissensgebieten die Wikipedia noch Lücken aufweist und welche Artikel nicht mehr ganz aktuell sind, sodass neue Autorinnen und Autoren mit konkreten Aufgaben ihre Mitarbeit an der Enzyklopädie direkt beginnen können.
				</p>
				<p>
					Die größte Aktion zur Gewinnung von neuen Wikipedia-Aktiven fand jedoch fernab vom Computer statt und setzte auf persönlichen Austausch: Am Sonntag, den 28. Oktober 2018, luden insgesamt 11 lokale Communitys aus dem deutschsprachigen Raum dazu ein, einen Blick hinter die Kulissen der Wikipedia zu werfen und vor Ort mit den aktiven Autorinnen und Autoren ins Gespräch zu kommen. Wikimedia Deutschland unterstützte zusammen mit Wikimedia Österreich und Wikimedia Schweiz den großen Aktionstag bei der Planung und Organisation und schaltete beispielsweise Online-Banner, die auf die einzelnen Veranstaltungsorte hinwiesen. Und das mit großem Erfolg. Der Andrang am Aktionstag hat die Ehrenamtlichen in den lokalen Wikipedia-Büros nicht schlecht staunen lassen: Mehr als 850 Besucherinnen und Besucher folgten unserer Einladung und besuchten die Communitys in Ulm, Augsburg, Stuttgart, München, Köln, Hannover, Hamburg, Berlin, Zürich, Linz und Wien.
				</p>
				<?php if (isset($achievements[1])): ?>
				<div class="achievement-box">
					<span class="achievement-box__category t--epsilon">
						<?= $achievements[1]['category'][$lang] ?>
					</span>
					<span class="achievement-box__number h--alpha">
						<?= $achievements[1]['number'] ?>
					</span>
					<span class="achievement-box__teaser t--delta-serif">
						<?= $achievements[1]['teaser'][$lang] ?>
					</span>
				</div>
				<?php endif ?>
				<p>
					Das Programm am Wikipedia-Aktionstag wurde von den Ehrenamtlichen selbst gestaltet und hätte kaum vielfältiger sein können. Neben Fragerunden zur Wikipedia, Einführungskursen zur Arbeit an Artikeln spielten auch Fotos eine große Rolle. So konnten etwa Besuchende in Stuttgart historische Fotos einscannen. Andernorts gab es Einblicke in die Drohnenfotografie. Und in Köln wurden Traditionsgerichte wie Bohnensuppe mit halben Hähnchen erst gekocht und dann abgelichtet. Die Augsburger organisierten einen Fotospaziergang, bei dem kulturhistorische Denkmäler und ein Museum besucht und für die Wikipedia dokumentiert wurden.
				</p>
				<p>
					In allen 11 Städten gab es ein übergreifendes Fazit: Das Interesse, zu verstehen, wie die Wikipedia funktioniert und die “echten Menschen dahinter” kennenzulernen, ist extrem groß. Ob sich aus diesem Interesse auch die Bereitschaft entwickelt, selbst in der Wikipedia aktiv zu werden, bleibt abzuwarten. Wir werden 2019 auf dem Erfolg des Aktionstages aufbauen und weitere Wege ausprobieren, um Qualität und Fortbestand der Wikipedia für die Zukunft zu sichern.
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
								<img src="/../../../assets/img/reports/day_of_action_additional.jpg"></img>
							</div>
							<div class="video__caption limit--s">
								Wikipedia hautnah: Beim ersten Wikipedia-Aktionstag erzählen die ehrenamtlichen Autorinnen und Autoren  in 11 lokalen Wikipedia-Büros von ihrer Arbeit.<br>
								<a href="https://commons.wikimedia.org/wiki/User:Claudia.Garad" target="new">
									Claudia.Garad
								</a>,

								<a href="https://commons.wikimedia.org/wiki/File:WikipediaVorOrt-Linz-2018.jpg" target="new">
									WikipediaVorOrt-Linz-2018
								</a>,

								Ausschnitt von <a href="https://atelierdisko.de" target="new">Atelier Disko</a> für WMDE,

								<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
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
						Blog:
						<a href="https://blog.wikimedia.de/2018/11/13/aktionstag-wikipedia-vor-ort-ein-ungeahnter-riesen-erfolg/" target="new">Aktionstag Wikipedia</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/explanation" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Wikimedia kurz erklärt</p>
		</a>
	</section>
</main>

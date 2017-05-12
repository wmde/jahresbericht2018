<main class="review bg--green">
	<section class="review__intro section section__body cp">
		<div class="bg--stripe review__head-stripe"></div>
		<div class="limit--s">
			<h1 class="h--beta">Zurückblicken: So war das Jahr für Wikimedia Deutschland</h1>
			<p class="t--gamma-serif">Für 2016 hatten wir uns vor allem vorgenommen, die Anzahl der Freiwilligen in Wikipedia sowie die Reichweite der freien Wissensdatenbank Wikidata zu erhöhen. Außerdem wollten wir unsere Möglichkeiten, uns gemeinsam mit Partnern für Freies Wissen auch politisch einzusetzen, ausbauen.</p>
			<p class="t--gamma-serif">Bei vielen unserer Vereinsziele konnten wir große Fortschritte erzielen. Für einige Schwerpunkte war 2016 aber auch ein Jahr des Lernens. So haben wir neue Wege ausprobiert, um neue Autorinnen und Autoren für die Wikipedia zu erreichen und zu halten. Die geplante große Online-­Kampagne mussten wir jedoch auf das kommende Jahr verschieben, da zuvor noch viel Grundlagenarbeit nötig war. Die Technik hinter der weltweiten Wikipedia-Plattform haben wir weiter verbessert und nutzerfreundlicher gemacht. Wikidata ist auf dem Sprung dazu, Freies Wissen tatsächlich deutlich zugänglicher zu machen: für eine Vielzahl von Anwendungsfällen auch außerhalb der Wikimedia-Projekte. Gemeinsam mit der UNESCO haben wir erstmals einen klaren Prozess entwickelt, wie Institutionen Daten für Wikidata spenden können. Unsere politisch-rechtliche Arbeit zieht sich mittlerweile stringent durch alle Bereiche des Vereins und wir haben uns gemeinsam mit anderen europäischen Wikimedia-Organisationen in Brüssel strukturell besser aufgestellt. Die Verwendung rechtskonformer Lizenzen ist durch den von uns entwickelten Lizenzhinweisgenerator deutlich einfacher geworden. Er muss nun aber noch besser verbreitet und für andere Bildquellen als Wikipedia und Wikimedia Commons nutzbar werden.</p>
			<p class="t--gamma-serif">Wikimedia Deutschland hat 2016 noch viele weitere Projekte umgesetzt, die in diesem Jahresbericht vorgestellt werden.</p>
			<p class="t--gamma-serif">Neben unserer inhaltlichen Arbeit haben wir 2016 wieder eine erfolgreiche Spendenkampagne durchgeführt und konnten einen starken Zuwachs unserer Mitgliederzahlen verzeichnen. Zudem gab es personelle Änderungen: Im Dezember wurde der Geschäftsführende Vorstand des Vereins, Christian Rickerts, zum Staatssekretär in der Berliner Landesregierung berufen. Ihm folgte Abraham Taherivand nach, der bis dahin unsere Software-Entwicklung leitete.</p>
		</div>
	</section>
	<section class="review__tail-stripe">
		<div class="bg--stripe"></div>
	<section>
	<section class="section cp--center-section review__swiper">
		<div class="limit--l">
			<div class="section__body slider swiper-container loading">
				<div class="swiper-wrapper">
					<?php foreach ($facts as $fact): ?>
					<div class="swiper-slide">
						<div class="jb-fact limit--s">
							<figure class="fig jb-fact__icon">
								<img src="<?= $fact['icon'] ?>"></img>
							</figure>
							<div class="jb-fact__content">
								<?php if ($fact['head'][$lang] !== ''): ?>
									<p class="t--deltai jb-fact__content-head"><?= $fact['head'][$lang] ?></p>
								<?php endif ?>
								<h1 class="h--alpha jb-fact__title"><?= $fact['number'][$lang] ?></h1>
								<p class="t--delta"><?= $fact['tail'][$lang] ?></p>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</section>
</main>

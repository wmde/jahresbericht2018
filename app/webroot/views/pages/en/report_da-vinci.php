<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Successful combination: The Kulturhackathon Coding da Vinci brings together cultural institutions and creative people from design and software development.
			<!-- (<a href="https://commons.wikimedia.org/wiki/File:GLAM-on-Tour_Museum_Schloss_Fuerstenberg_Wikipedianer_bei_der_Arbeit_(Brunswyk_2017).JPG" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a> -->
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Coding da Vinci – How Cultural Institutions become Platforms for Cultural Exchange</em>
			</h1>
			<div class="section__teaser t--gamma">
				Together with the German Digital Library, the Open Knowledge Foundation Germany and the Research and Competence Center Digitization (digis), in 2014 Wikimedia Deutschland for the first time brought together cultural institutions such as museums and archives with artists from software development and design for a creative competition based on open data – the first cultural hackathon Coding da Vinci. The recordings of bird voices provided by the Berlin Museum of Natural History were used to create the zzZwitscherwecker, for example, in just six weeks. The app wakes you with cheerful chirping, which only stops once the right bird species has been assigned to the sound.
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
					Six further Coding da Vinci Hackathons have since taken place in various regions of Germany – a total of 146 cultural institutions have made their hidden treasures available to more than 1,600 creative people via 218 digital data sets. More than a hundred great prototypes and web applications, apps and games have emerged as open source projects.
				</p>
				<p>
					Coding da Vinci makes the creative potential of digital cultural assets visible and helps to unfold it. This experience is particularly important for the participating cultural institutions – they learn about the opportunities offered by the digital opening of their collections. The innovative applications not only increase the attractiveness of cultural assets and the visibility of cultural institutions. Open cultural data also invite new target groups in to deal creatively with cultural heritage and to generate new knowledge. From places of preservation, conservation and storage, museums are now turning into platforms for cultural exchange – on-site and online.
				</p>
				<p>
					The German Federal Cultural Foundation also sees the positive effects of Coding da Vinci for the digital transformation of cultural and memory institutions: It has decided to support the further development of the hackathon in the next few years with 1.2 million euros.
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
								<iframe src="https://www.youtube-nocookie.com/embed/8_URZDvowZQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Coding da Vinci Berlin 2017
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/QqbUis0fluk?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Coding da Vinci Ost 2018
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next swiper-button-next--black"></div>
				<div class="swiper-button-prev swiper-button-prev--black"></div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/data-new-water" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Daten sind das neue Grundwasser</p>
		</a>
	</section>
</main>

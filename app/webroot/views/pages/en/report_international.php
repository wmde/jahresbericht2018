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
				<em>Addressing Wikimedia’s strategic direction</em>
			</h1>
			<div class="section__teaser t--gamma">
				What do we – the international Wikimedia Movement – want to achieve in the next 10-15 years? What should Wikipedia be known for in 2030? And who should have joined our movement? These big questions were tackled in 2017 by hundreds of people and organisations that would like to help shape the future of Wikimedia. As part of a large-scale global strategic process called “Wikimedia 2030”, both those active within Wikimedia and many external partner organisations along with readers and donors were asked about the future of Wikimedia. Based on the diverse range of responses received as well as accompanying research and analysis, we have developed a new strategic direction for the strategic process of the international movement.
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
					For the first time, Wikimedia sees itself as a social movement and wants to have an effect on society beyond just the encyclopaedia: We want to become the essential infrastructure for the Free Knowledge ecosystem. Anyone who shares our vision can join us. We place particular focus on the idea of “knowledge as a service” and “knowledge equity”.
				</p>
				<p>
					Knowledge as a service: We will become a platform providing the entire world with interfaces and communities for accessing Free Knowledge. The goal remains to collect different types of Free Knowledge and make it available to as many organisations, people and machines as possible.
				</p>
				<p>
					Knowledge equity means that we put more effort into addressing people and knowledge that were previously excluded due to power structures and privilege as well as political and social hurdles.
				</p>
				<p>
					This strategic direction was supported by an overwhelming majority of Wikimedia organisations, including the full support of Wikimedia Deutschland. The task of all those involved in the Wikimedia Movement is now to find a way, together with our partners, of integrating this new direction into our daily work. Change is afoot, and Wikimedia Deutschland wants to play an active role in the international debate during the next phase of the process.
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
								What kind of future do we want to build together? This video shows the global process 2017, to define Wikimedia’s future role in the world; Wikimedia 2030, Wikimedia Foundation,
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
					<li><a href="https://meta.wikimedia.org/wiki/Strategy/Wikimedia_movement/2017/Direction/de#Unsere_Strategische_Ausrichtung:_Dienst_und_Gerechtigkeit" target="new">Wikimedia’s strategic direction</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/2018" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Prospects for 2018</p>
		</a>
	</section>
</main>

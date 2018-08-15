<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">René Zieger (<a href="https://commons.wikimedia.org/wiki/File:171118_Wikimedia_MV_08.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Join us as a member!</em>
			</h1>
			<div class="section__teaser t--gamma">
				All our projects are only made possible thanks to the financial support of the many thousands of donors and our members. 2017 saw us achieve a new record number of members. More than 65,000 people now support us in our dedication for Free Knowledge. The number of members has more than doubled in the last two years alone.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Regardless of whether you are an active member or a sponsoring member – everybody has the opportunity to help guide the development of Wikimedia Deutschland. The top decision-making organ of the organisation is the General Assembly. This took place for the 21st and 22nd time in 2017. The resonance was greater than ever: 120 members took part in the spring assembly in Bamberg, and 132 participated in the autumn meeting in Berlin.
				</p>
				<p>
					Alongside directional decisions, such as agreeing on a new strategic direction for the international Wikimedia Movement, both assemblies were characterised by the theme “approaching one another”. One of our main aims was to present our work and projects in an interesting way and to get members actively involved in the association’s activities. The formal part of proceedings were therefore accompanied by a varied supporting program. In Bamberg we had the “Jahrmarkt des Freien Wissens” (Free Knowledge Fair), in Berlin we held an open day at the “Haus des Freien Wissens” (House of Free Knowledge).
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
					These gave attendees plenty to explore: In Bamberg, members discussed things such as the future of Wikipedia and took a photography tour through the town to get some images for the free media archive Wikimedia Commons. In Berlin, attendees marvelled at the ten winners of the photo competition “Wiki Love Monuments” and used interactive political position guessing to learn about the opinions held by individual players in politics and the effects of these on Free Knowledge.
				</p>
				<p>
					Our introductory courses were once again met with great interest. These courses allow members and speakers to gain a huge amount of knowledge about Wikipedia, the Free Knowledge database Wikidata and the free media archive Wikimedia Commons. In Berlin, the newly founded “Partizipation” working group held a workshop to inform participants about the numerous opportunities to get involved within the organisation.
				</p>
				<p>
					There will again be two general member assemblies in 2018. On 26th May we will be at the Center for Art and Media in Karlsruhe. Our “Zentrum des Freien Wissens” (Centre of Free Knowledge) supporting program will be further expanded and open to the general public for the first time. This should allow even more people to get excited about our work and projects. The second members’ assembly takes place on 1st December 2018 in Berlin. The focus of this meeting will be the election of a new Supervisory Board.
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
								<iframe src="https://www.youtube-nocookie.com/embed/ys1Xc_iCId0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Wikimedia Deutschland’s 20th General Assembly on 17. 06. 2017 in Bamberg; creative director: Elisabeth Mandl, camera and editing:  Stefan Brainbauer for Wikimedia Deutschland
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/international" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Addressing Wikimedia’s strategic direction</p>
		</a>
	</section>
</main>

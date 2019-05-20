<main class="report-detail">
	<section id="panorama" class="report-detail__panorama report-detail-hero cp cp--nav-zone"></section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Making cultural treasures accessible through Wikipedia: This 360-degree shot was taken at the GLAM on Tour event in the Grunewald Hunting Lodge.
			<!-- (<a href="https://commons.wikimedia.org/wiki/File:GLAM-on-Tour_Museum_Schloss_Fuerstenberg_Wikipedianer_bei_der_Arbeit_(Brunswyk_2017).JPG" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a> -->
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>How works of art find their way into the digital world</em>
			</h1>
			<div class="section__teaser t--gamma">
				Galleries, libraries, archives and museums (GLAMs for short) preserve and impart knowledge. Wikimedia Deutschland's goal is to make this knowledge freely and openly available to everyone online with the help of Wikimedia projects and the commitment of culture enthusiasts. The concept is striking a cord: 15 cultural institutions from Berlin to Zurich opened their doors for GLAM on Tour events in 2018. We were especially pleased about the invitation to another jewel of the Prussian Palaces and Gardens Foundation: the Grunewald Hunting Lodge.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					The Amsterdam Rijksmuseum, the Art Institute of Chicago, most recently the Cleveland Museum of Art: they have all published thousands of works from Hokusai to Edward Hopper online under open licenses. The German cultural scene is also looking for new ways of interacting with its audience and completely new target groups – not just on-site.
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
					As the most popular collection of knowledge on the Internet, Wikipedia is the first port of call for information for millions of people and therefore also an important medium for cultural institutions. This common interest of the cultural scene and Wikipedia volunteers has resulted in a very active GLAM community: With the expert support of the inviting institution, Wikipedia volunteers document, photograph and write articles on collections, institutions and individual works. Wikimedia Deutschland acts as an organiser and contact for museums and foundations and supports the volunteers locally. Ideally, individual events lead to long-term partnerships.
				</p>
				<p>
					One of these is the cooperation with the Prussian Palaces and Gardens Foundation, which invited Wikimedia volunteers to Caputh Palace for the first time in 2015. A weekend as guests at the Grunewald Hunting Lodge followed in 2018: The "Chatelaine" herself led the guests through the historic building and its history in honour of the occasion, while an art historian from the Foundation contributed to the revision and recreation of over 50 Wikipedia articles by the volunteers with his enormous knowledge of the lodge’s Cranach Collection. This successful partnership will be continued in 2019 with a trip to Sanssouci park.
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
								<iframe src="https://www.youtube-nocookie.com/embed/PwYEfx4ojx0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								GLAM on Tour
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/members" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Mitglieder</p>
		</a>
	</section>
</main>

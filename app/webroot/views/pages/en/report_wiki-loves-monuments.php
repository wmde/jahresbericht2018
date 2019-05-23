<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			1st place European Special Prize, Cathedral of Gloucester<br>
			<a href="https://commons.wikimedia.org/wiki/User:Cjtcherrington" target="new">
				Christopher JT Cherrington
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:The_Cloisters_at_Gloucester_Cathedral.jpg" target="new">
				The Cloisters at Gloucester Cathedral
			</a>,

			cutout by <a href="https://atelierdisko.de" target="new">Atelier Disko</a> for WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Wiki Loves Monuments in the European Year of Cultural Heritage</em>
			</h1>
			<div class="section__teaser t--gamma">
				Everybody knows Wikipedia. Every day, millions of people search the largest collectively created digital knowledge collection of our time. But the encyclopedia could be a lot more colorful. Photos allow people to experience the world’s knowledge in a vivid way. That's why every year in September, the international Wikipedia community invites everyone to join Wiki Loves Monuments and share images of cultural monuments with the world.
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
					According to the Guinness Book of Records, Wiki Loves Monuments has been the largest photo competition in the world since 2012 and is organised by Wikipedia volunteers. Every year in Germany alone about 20,000 images are uploaded under a free license to the media archive Wikimedia Commons and are thus freely available for use in Wikipedia and elsewhere. The competition makes a major contribution to the protection of historical monuments and the preservation of cultural diversity.
				</p>
				<p>
					In 2018, Wiki Loves Monuments was dedicated to the European Year of Cultural Heritage. Supported by the Federal Government Commissioner for Culture and the Media, Wikimedia Deutschland, together with Wikimedia volunteers, implemented various measures to make the photo competition even better known and more attractive to the public. For example, an international special prize was awarded to draw attention to European cultural heritage and its history: Where can traces of common European history be found? What monument near me testifies to our divided history? The special prize invited people of all ages to explore cultural heritage in pursuit of clues.
				</p>
				<p>
					A youth photo workshop held in Erfurt in June was aimed in particular at a younger audience. Here, young people were enabled to recognise monuments, to take good-quality photographs and to upload the pictures for the competition. After a theoretical introduction, the photography enthusiasts were able to put their newly acquired knowledge directly into practice during a photo walk through the historic city centre.
				</p>
					Together with the German Commission for UNESCO, we have trained Wikimedia volunteers to become Wikipedia cultural ambassadors, especially for cooperations with institutions. In seminars and workshops, the participants were qualified to initiate and continue successful cooperation projects with cultural and heritage institutions.
				<p>
					Another workshop focused on the use of the latest photographic technology, in which advanced photography enthusiasts learned to take 360° panoramas of protected cultural heritage sites. 360° photographs allow viewers to feel the atmosphere of the location in an impressive way and give monuments in Wikipedia a very special face. This new technology was also awarded special prizes for the first time in Wiki Loves Monuments 2018.
				</p>
				<p>
					The most impressive pictures of the competition in the year of cultural heritage are collected and published by Wikimedia Deutschland in a special illustrated book on Wiki Loves Monuments. More importantly, these thousands of images enable a worldwide audience to experience cultural heritage sites. In this way, history is preserved and knowledge is shared.
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
								<iframe src="https://www.youtube-nocookie.com/embed/UaceBXVYOKI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								<a href="https://www.youtube.com/watch?v=UaceBXVYOKI" target="new">
								Wiki Loves Monuments 2018
								</a>
								<br>
								Content: Elisabeth Mandl, camera and editing: Joachim Köhler for Wikimedia Deutschland,
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
						Blog:
						<a href="https://blog.wikimedia.de/2019/03/22/final-stretch-at-wiki-loves-monuments/" target="new">Final stretch at Wiki Loves Monuments</a>
					<li>
						<a href="https://blog.wikimedia.de/2018/07/30/wikipedia-in-the-european-year-of-cultural-heritage/" target="new">Wikipedia in the European Year of Cultural Heritage</a>
					<li>
						Photobook:
						<a href="https://commons.wikimedia.org/wiki/File:Bildband_Wiki_Loves_Monuments_im_Europäischen_Kulturerbejahr.pdf" target="new">Wiki Loves Monuments in the European Year of Cultural Heritage</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/wikibase" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>Wikibase</p>
		</a>
	</section>
</main>

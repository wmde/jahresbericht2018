<main class="review bg--green">
	<section class="review__intro section section__body cp">
		<div class="bg--stripe review__head-stripe"></div>
		<div class="limit--s">
			<h1 class="h--beta">Looking back at 2016</h1>
			<p class="t--gamma-serif">In 2016, one of our primary goals was to increase the number of Wikipedia volunteers and the reach of Wikidata, the open knowledge database. Together with our partners, we also wanted to expand our opportunities for advocating on behalf of open knowledge on a political level.</p>
			<p class="t--gamma-serif">We were able make great progress with many of our individual organizational goals. In some areas, however, the year 2016 was also an opportunity to learn. We, accordingly, tried out new ways to attract and retain new authors for Wikipedia. Unfortunately, we had to postpone a major online campaign we had planned, as a lot of preliminary work still needed to be done. We further improved and made the technology behind the global Wikipedia platform more user-friendly. In fact, Wikidata is on the verge of making open knowledge much more accessible for a variety of applications – even outside of the Wikimedia projects. Along with UNESCO, we have defined for the first time a clear process for institutions to donate their data to Wikidata. Our political and legal work is now stringently applied to all areas of the association. From a structural standpoint, we, alongside other European Wikimedia organizations, are also better positioned in Brussels. The application of legally compliant licenses has become much easier due to the attribution generator we developed. It now needs to be better disseminated and made to work for image sources other than Wikipedia and Wikimedia Commons.</p>
			<p class="t--gamma-serif">In 2016, Wikimedia Deutschland implemented many other projects that will be presented in this annual report.</p>
			<p class="t--gamma-serif">Besides working on our projects, in 2016, we once again carried out a successful fundraising campaign and recorded strong growth in our membership. There were also personnel changes: In December, the association’s Executive Director, Christian Rickerts, was appointed state secretary in the Berlin regional government. He was succeeded by Abraham Taherivand, who previously headed our software department.</p>
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
									<p class="t--delta jb-fact__content-head"><?= $fact['head'][$lang] ?></p>
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

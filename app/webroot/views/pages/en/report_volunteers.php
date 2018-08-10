<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Steffen Prößdorf (<a href="https://commons.wikimedia.org/wiki/File:Gruppenfoto_WikiCon2017_IMG_9159_LR10_by_Stepro.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Support digital volunteering</em>
			</h1>
			<div class="section__teaser t--gamma">
				Voluntary Wikipedia contributors share their knowledge for free through the free encyclopaedia by correcting errors, adding photographs, ensuring information is kept up-to-date as well as writing entire articles. There is a whole range of other Wikimedia projects that work on the same principle as Wikipedia. This includes the free travel guide Wikivoyage, the free dictionary Wiktionary and the free knowledge database Wikidata. We regard this contributions to the Wikimedia knowledge-sharing projects as digital volunteering and provide support to strengthen it wherever we can. Without the tireless efforts of many thousands of volunteers, projects such as Wikipedia simply could not exist.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					This is why providing support to volunteers is a core element of the work done by Wikimedia Deutschland. The aim of our volunteer support is to enable as many people as possible to make their contribution to Free Knowledge and remove any obstacles in their way. The support given to volunteers takes many different forms and is tailored to the organisational and financial needs of individual projects and plans.
				</p>
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
				<p>
					For example, it is hugely important that those who digitally contribute to Wikimedia projects are also able to meet “in real life”. This allows them to discuss new ideas, promote their projects, work on articles, talk with one another and resolve conflicts. Knowledge is best generated within a community, because together we know more. As in previous years, Wikimedia Deutschland has facilitated numerous meetings for Wikimedia contributors in 2017. The largest of these was WikiCon where 287 volunteers from the German-speaking Wikimedia community came together in Leipzig. Our organisation helped attendees with hotel and travel costs as well as organising and running the three-day event.
				</p>
				<p>
					Wikimedia Deutschland has also continued and expanded the support of local Wikipedia offices, thus facilitating the work on the Wikimedia projects. 2017 saw the creation of the new community space “Wiki-Bär” in Berlin, just as has been done previously in Cologne, Hamburg and Munich. Here, volunteers can offer services such as public Wikipedia introduction courses or editing workshops, work together on their projects and more easily show the general public their enthusiasm for projects like Wikipedia and explain how easy it is participate. Throughout 2017 we have also produced a wide range of materials, such as information flyers and brochures, that explain how to contribute to the various Wikimedia projects.
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
					We further supported digital contribution to Free Knowledge in the Wikimedia projects by providing project-specific help, e.g. in the form of accreditation for events, literature stipends and the provision of photographic and video recording equipment. A total of 5,844 volunteers were supported in their activities around the Wikimedia projects in 2017. In 2017 we also developed the “Förderbarometer” (“support barometer”). This tool allows us to better evaluate the support we are providing to volunteers. The results of the Förderbarometer for 2017 show us that 81 percent of supported persons have described our support as very useful and given it a rating of 9 or 10 on a scale from 1 to 10 – the average was 9.46. This stands as wonderful confirmation that the volunteers are very satisfied with our work – and also serves as motivation to further increase this result next year.
				</p>
				<p>
					With respect to our support work, 2017 was productive and successful. We want to continue improving our support for volunteers in 2018 so that even more people can use it to make a contribution to Free Knowledge. We will provide more intensive support for large projects, such as the world’s largest photo competition “Wiki Loves Monuments”, which coincides with the 2018 Year of Cultural Heritage and, as part of which, we are working with the German National Historic Preservation Committee and the German UNESCO commission. We will also initiate collaborative projects between various Wikimedia projects and other projects with the hope of bringing in new groups to help us in the pursuit of Free Knowledge.
				</p>
				<p>
					All information about the types of support available can be found at <a href="https://de.wikipedia.org/wiki/Wikipedia:F%C3%B6rderung" target="new">de.wikipedia.org/wiki/Wikipedia:Förderung</a>
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
								<iframe src="https://www.youtube-nocookie.com/embed/ZJ6ecOJaGiw?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Invitation to participate in the photo competition Wiki Loves Monuments; <a href="http://commons.wikimedia.org/wiki/File:Wiki_loves_Monuments_2017_Video.webm" target="new">Wiki Loves Monuments 2017</a>, Wiki Loves Monuments 2017 by Wikimedia UK, adapted by Elisabeth Mandl (Wikimedia Deutschland),
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new">CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/newvolunteers" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Getting more people excited about Wikipedia</p>
		</a>
	</section>
</main>

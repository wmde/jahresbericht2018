<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Denis Schroeder (WMDE) (<a href="https://commons.wikimedia.org/wiki/File:Screenshot_Digital-O-Mat.png" target="new">Wikimedia Commons</a>),  cropped by Atelier Disko for WMDE, <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Digital-O-Mat: an election aid for net politics</em>
			</h1>
			<div class="section__teaser t--gamma">
				The federal government elections formed a key part of our political work in 2017. Digital topics, such as the right to internet access and open educational resources, which form the primary foundations of Wikipedia and Free Knowledge, often remain underrepresented when reporting on elections. Where do the parties stand on digital issues that affect our daily life and our rights within the Internet?
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					To help close this information gap, Wikimedia Deutschland worked together with partner organisations who are active in the area of digital rights to freedom to develop the Digital-O-Mat. We posed questions on topics like education, internet access, software and open data to all parties who took part in the 2017 federal elections and had consistently achieved at least 5% in opinion polls since September 2016.
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
					Using these questions and the answers provided by the parties, we created the Digital-O-Mat. The website was intended to help voters get a clear idea of the position taken by each party on digital matters and the specific actions they would take. By reading 12 different points of view from across various topics and clicking on “agree”, “neutral” or “do not agree”, voters could assess which party most closely aligned with their views on digital issues. Using this method, the online tool was intended to help voters decide who they should vote for.
				</p>
				<p>
					In line with one of Wikipedia’s basic principles of verifying contributed knowledge with a source, the parties were also asked to provide more detailed explanations of their positions on various digital issues, rather than just simply agree or disagree. By clicking on the relevant area in the results generated by the Digital-O-Mat, voters were therefore able to see more detailed information about the view held by each of the parties on the various topics. In most cases, these explanations were far more detailed than the party manifesto, thus making additional information available. Since the Digital-O-Mat remained online after the election, it will be possible to later compare what the parties said before the election with what they have actually done.
				</p>
				<p>
					In 2017, the Digital-O-Mat represented the first time that a freely accessible online comparison tool especially for digital topics has been available for federal elections. The Digital-O-Mat was used almost 40,000 times before the 2017 federal elections. We are planning further versions for the 2018 state elections in Bavaria and Hessen.
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
								<iframe src="https://www.youtube-nocookie.com/embed/4YE42ksz4XA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Networks & Politics - between national digital policy and internet governance: internet regulation in germany after the elections;
								Networks & Politics - between national digital policy and internet governance, camera and editing: Verena Vargas Koch for Wikimedia Deutschland,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/AsGxYAFe-b8?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								On 10. October 2017 the debate on the so-called data ownership, fuelled by the federal government, was discussed at Wikimedia Deutschland; Networks & Politics – Luciano Floridi on Data Ownership, camera and editing: Verena Vargas Koch for Wikimedia Deutschland
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="video">
							<div class="video__embed-container">
								<iframe src="https://www.youtube-nocookie.com/embed/8_URZDvowZQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								Coding da Vinci is the first German open cultural data hackathon. The film documents Coding da Vinci 2017 in Berlin; Coding da Vinci 2017, Helmbrecht Film for Wikimedia Deutschland,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
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
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/glam" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Cultural heritage for Wikipedia</p>
		</a>
	</section>
</main>

<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Ralf Rebmann (<a href="https://commons.wikimedia.org/wiki/File:Auftaktveranstaltung_Fellow-Programm_Freies_Wissen_2017_189.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Driving forward open science</em>
			</h1>
			<div class="section__teaser t--gamma">
				As the society for the promotion of Free Knowledge, Wikimedia Deutschland tries to apply Wikipedia’s basic principles to all aspects of society. Our Open Science Fellows Program therefore provides support to young researchers for making their methods, data and results freely available for anyone to use. The idea is that fellows will not only themselves learn to practice open science, but also share their knowledge within the institutions. Thus, we are promoting a more open approach in scientific research and teaching.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					The Open Science Fellows Program, which was founded in 2016 by Wikimedia Deutschland and the Stifterverband, continued to a second round in 2017. It links young scientists with experts who pass on the theoretical and practical foundations of taking the open approach to science. The second year of the program saw the addition of the VolkswagenStiftung as an important partner, allowing us to double the number of supported fellows compared to the pilot round from 10 to 20.
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
					The supported projects cover a wide range of fields from Islamic science to neuroscience and climate research. The practice of research work focuses firstly on transparency: Processes and collections of data are documented and freely accessible. Secondly, it is about fostering an exchange with communities beyond academic fields. The “Ring a Scientist” project, for example, creates a link between researchers and schools. Teachers use an Internet-based platform to arrange video conferences with scientists and, for example, allow students to take part in a live experiment that can only be carried out in a specially equipped lab. Students can experience scientific work being done in an entirely new way.
				</p>
				<p>
					The second round of the program ends in June 2018 with a public event where the fellows will present their projects and results. 2018 will again see up to 20 young scientists supported by the Open Science Fellows Program.
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
								<iframe src="https://www.youtube-nocookie.com/embed/ZQ6iXhlwBAM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="video__caption limit--s">
								The Open Science Fellows Program is a joined project by Wikimedia Deutschland, the Stifterverband and the VolkswagenStiftung and is targeted towards young scientists that want to open their research process. Fellow-Programm Freies Wissen (Open Science Fellows Program), camera: Ian Delú, Joana Kauer, editing: Joana Kauer for Wikimedia Deutschland,
								<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="new"> CC BY-SA 4.0</a>
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
				<p>
					In the Open Science Radio, the two program managers at Wikimedia Deutschland, Sarah behrens and Christopher Schwarzkopf, talk about the idea and motivation for the Open Science Fellows Program, its successfully completed first round as well as the ongoing second round and the future of the program.
				</p>
				<ul class="bullet-list">
					<li><a href="http://www.openscienceradio.org/2017/12/12/osr094-freies-wissen-in-der-wissenschaft-wmde-de/" target="new">Part 1</a></li>
					<li><a href="http://www.openscienceradio.org/2018/02/07/osr096-fellow-programm-projekte-ring-a-scientist-organizing-openness-wmde-de/" target="new">Part 2</a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to focal points’ overview</a>
		<a href="/en/report/2017" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Looking back at 2017</p>
		</a>
	</section>
</main>

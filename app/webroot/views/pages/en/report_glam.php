<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">Brunswyk (<a href="https://commons.wikimedia.org/wiki/File:GLAM-on-Tour_Museum_Schloss_Fuerstenberg_Wikipedianer_bei_der_Arbeit_(Brunswyk_2017).JPG" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a></div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Cultural heritage for Wikipedia</em>
			</h1>
			<div class="section__teaser t--gamma">
				Working together with volunteers and collaborating with institutions to make cultural heritage accessible to everyone free of charge – this is the crazy idea behind Wikimedia’s GLAM work. GLAM is an abbreviation for the types of institutions that we would like to inspire with the idea of open access to cultural data: Galleries, Libraries, Archives and Museums. Numerous exciting partnerships have been created and continued to grow due to the dedication of the Wikimedia community in 2017.
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
					Using the GLAM on Tour format, we are promoting cooperation between volunteers from the various Wikimedia projects and cultural institutions. The tour went to eight different locations in 2017 and travelled from the musical instruments department of the Museum of Art and Industry in Hamburg to the Monte Verita in Ticino. Special guided tours, scientific talks and editing workshops allowed volunteers to work directly with the represented institutions to share more specialist knowledge with the entire world through the Wikimedia projects.
				</p>
				<p>
					For example, in 2017, 21 Wikipedia contributors visited the Fürstenberg Palace and were able to further their knowledge of Germany’s oldest porcelain factory. The volunteers spent an entire weekend gaining exclusive insights into the porcelain workshops at the museums, listening to presentations from experts and working together on making this cultural heritage available in Wikipedia. 39 new articles were created, 25 existing articles were expanded and many more had new images added. The appreciation of the volunteers and their work for Wikipedia was made clear by the presence of the mayor on the opening day.
				</p>
				<p>
					We will continue working to link volunteers with GLAM institutions in 2018. The European Cultural Heritage Year will also carry great significance in that it should help strengthen the awareness of common European cultural heritage across borders.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/fellow" class="button button--report">
			<p class="button--small">next topic</p>
			<p>Driving forward open science</p>
		</a>
	</section>
</main>

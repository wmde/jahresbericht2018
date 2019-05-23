<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Looking ahead: these are our plans for the years to come.<br>
			Matteo Paganelli,
			<a href="https://commons.wikimedia.org/wiki/File:Matteo-paganelli-157464-unsplash.jpg" target="new">
				Matteo-paganelli-157464-unsplash
			</a>,

			cutout by <a href="https://atelierdisko.de" target="new">Atelier Disko</a> for WMDE,

			<a href="https://creativecommons.org/publicdomain/zero/1.0/legalcode" target="new">
				CC0 1.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Outlook: These are our plans and ideas for 2019 and the years to come</em>
			</h1>
			<div class="section__teaser t--gamma">
				Our vision is a world in which all people can freely share, use and increase the sum of all knowledge. This great idea also requires great changes within our society.
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
					Projects like Wikipedia are great examples of Free Knowledge put into practice. We must continue to develop them over the next few years and ensure that they remain relevant.
				</p>
				<p>
					But we also know that the world does not only consist of Wikimedia projects. We want to inspire more people and institutions for free access to knowledge. We must connect with other organizations, carry our vision out into the world and ensure that Free Knowledge becomes a part of our everyday lives.
				</p>
				<p>
					For the work in our three fields of action, this means the following for the coming years:
				</p>
			</div>
			<p class="h--gamma">
				Volunteers
			</p>
			<div class="section__body t--gamma-serif">
				<p>
					We support the Wikimedia communities – the volunteers who share their knowledge with the whole world in projects like Wikipedia or Wikidata – where they need help. We actively support them in welcoming and integrating new volunteers and in incorporating new technologies and formats.
				</p>
			</div>
			<p class="h--gamma">Technology</p>
			<div class="section__body t--gamma-serif">
				<p>
					We want to see our free knowledge database Wikidata become a central hub and the software Wikibase an essential element in a network of open structured data. We are working on this together with Wikimedia volunteers, the Wikimedia movement and partner organizations. The more people use this network, the more benefit the whole world will gain from it.
				</p>
			</div>
			<p class="h--gamma">Conditions</p>
			<div class="section__body t--gamma-serif">
				<p>
					We want to ensure that more content can be used as Free Knowledge. This includes, for example, digital reproductions of works of art that are no longer protected by copyright as well as tax-financed knowledge such as studies commissioned by the state. In a network with partner organizations, we also strengthen our political impact at the international level and expand our cooperation with cultural institutions. We want people to develop a critical awareness for information on the Internet and to be able to participate in the digital space. Only then can they actively contribute to Free Knowledge and join our vision.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/glam" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>Glam on Tour</p>
		</a>
	</section>
</main>

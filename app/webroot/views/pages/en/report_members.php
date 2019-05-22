<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Participate in decisions: At the general assembly of Wikimedia Deutschland, important decisions on the future of the organization are made.<br>
			<a href="https://commons.wikimedia.org/wiki/User:Annika_Möller_%28WMDE%29" target="new">
				Anne Braun for Wikimedia Deutschland
			</a>,

			<a href="https://commons.wikimedia.org/wiki/File:23._Mitgliederversammlung_Wikimedia_Deutschland_22.jpg" target="new">
				23. Mitgliederversammlung Wikimedia Deutschland 22
			</a>,

			cutout by <a href="https://atelierdisko.de" target="new">Atelier Disko</a> for WMDE,

			<a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">
				CC BY-SA 4.0
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>More than 70,000 Members – a strong Foundation</em>
			</h1>
			<div class="section__teaser t--gamma">
				As the association for the promotion of Free Knowledge, we are engaged in numerous ways to realize our vision of a world in which the sum of all knowledge is freely available to all people. Above all, this is made possible thanks to the support of our members. Besides the thousands of donors, they are a fundamental pillar for Wikimedia Deutschland and our commitment to Free Knowledge.
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
					The number of people who continually support us in our work is growing from year to year – as of March 2019, we count more than 70,000 members. They not only give an important foundation to our objectives, but also actively shape the organization and its future, as could be seen at the general assemblies held in Karlsruhe and Berlin in 2018:
				</p>
				<p>
					More than 250 visitors and members came together in May at the Zentrum für Kunst und Medien in Karlsruhe. Through an interactive exhibition space, short lectures and open discussions, they were able to get to know the world around Wikipedia and Wikimedia more closely.
				</p>
				<p>
					In December, the 23rd general assembly was held in Berlin. In addition to the election of a new volunteer supervisory board, major decisions on the future of the organization were also made. In future, members will have a direct say in the strategic direction of the organization within the framework of the general assembly. In this context, the general assembly decided on the strategic directions for the three fields of action (volunteers, technology, conditions), which will significantly shape Wikimedia's work in the coming years.
				</p>
				<p>
					A further innovation is the decision of the members to meet only once a year for the general assembly from 2019 onwards. It will then become part of an entire Wikimedia weekend – for the first time on 15 and 16 June 2019 in Berlin. On Saturday we invite members, partners, friends, volunteers and the public to the big day of Free Knowledge to get to know the organization and the Wikimedia projects a little better. The formal general assembly takes place on Sunday and will thus conclude the first Wikimedia weekend.
				</p>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/prospects" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>International: Wikimedia 2030</p>
		</a>
	</section>
</main>

<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Together for a free Internet: In 2018, we joined forces with partners from the Internet industry and civil society to campaign against upload filters.
			<!-- (<a href="https://commons.wikimedia.org/wiki/File:Auftaktveranstaltung_Fellow-Programm_Freies_Wissen_2017_189.jpg" target="new">Wikimedia Commons</a>), <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="new">CC BY-SA 4.0</a> -->
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>From Niche Topic to Social Debate: 15 Organizations against Upload Filters</em>
			</h1>
			<div class="section__teaser t--gamma">
				Wikipedia thrives on the free exchange of information. The online knowledge collection reflects what is presented in books, media and scientific articles and is the result of the worldwide exchange of new ideas. That is why we are passionately committed to a free Internet that promotes exchange and cooperation.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					As part of the European reform of copyright law, which will also bring some important improvements for the free access to knowledge, the introduction of upload filters to prevent copyright infringements was propagated for the first time in 2016. No matter whether text, picture or video contribution – all contents of individual users on larger Internet platforms are to be examined  for alleged copyright infringements before the actual upload even takes place. Those that are automatically detected as potentially infringing should be blocked. Sophisticated judgements about what is legally permitted or not – be it criticism, satire or art – cannot, however, be achieved by these filters. That is why they are a threat to freedom of expression and diversity on the Internet.
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
			</div>
			<div class="section__body t--gamma-serif">
					In 2018, we joined forces with numerous partners in an open letter to fight against the introduction of upload filters. In addition to Wikimedia Deutschland, 14 other organizations from civil society and the Internet industry (including Bitkom, Verbraucherzentrale Bundesverband and the Open Knowledge Foundation) have addressed their concerns to the German government and EU parliamentarians, thereby sending a public signal. Wikipedia was ultimately exempted from the filter requirement, but we continued to work with the Wikipedia volunteers to lobby for a reform that provides better conditions for Free Knowledge.
				</p>
				<p>
					Together with numerous Internet organizations, we have repeatedly provided information about the problematic aspects of the reform and alternative proposals. By 2019 at the latest, a complex "niche issue" has turned into a broad social debate about freedom and regulation of the Internet. Before the vote in the EU Parliament, thousands of mainly young people took to the streets all over Germany to protest against upload filters. The filters have nevertheless received the support of the Parliament, but the implementation of the directive is now taking place under the critical eye of an interested and informed public.
				</p>
			</div>
		</div>
	</section>
	<section class="section report__links">
		<div class="limit--s">
			<div class="border-box border-box--report">
				<div class="t--delta">LINKS</div>
				<ul class="bullet-list">
					<li>
						More information:
							<a href="https://blog.wikimedia.de/2019/04/24/free-knowledge-hard-won-impact-at-the-european-level/" target="new">Blog</a>
						(April 2019)
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Zur Themenübersicht</a>
		<a href="/report/wiki-loves-monuments" class="button button--report">
			<p class="button--small">Zum nächsten Thema</p>
			<p>Wiki Loves Monuments</p>
		</a>
	</section>
</main>

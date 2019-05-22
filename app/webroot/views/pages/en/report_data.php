<main class="report-detail">
	<section
		class="report-detail-hero cp cp--nav-zone"
		style="background-image: url(<?= $report['hero'] ?>)"
	>
	</section>
	<section class="section cp report-detail__text">
		<div class="report-detail hero__caption t--zeta">
			Understanding more: through language data in our Free Knowledge database Wikidata new knowledge is generated.<br>
			Photo:
			<a href="https://pixabay.com/vectors/hello-languages-word-cloud-foreign-3791381/" target="new">
				https://pixabay.com/vectors/hello-languages-word-cloud-foreign-3791381/
			</a>
		</div>
		<div class="limit--s">
			<h1 class="section__title h--beta">
				<em>Lexicographical Data on Wikidata: Words, Words, Words</em>
			</h1>
			<div class="section__teaser t--gamma">
				Language is what makes our world beautiful, diverse, and complicated. Our free knowledge database Wikidata is a multilingual project, serving the more than 300 languages of the Wikimedia projects. This multilinguality at the core of Wikidata means that right from the start, every entered Item about a piece of knowledge in the world and every property to describe that Item can have a label in one of the languages we support, making Wikidata a polyglot knowledge base that speaks your language.
			</div>
			<div class="section__body t--gamma-serif">
				<p>
					Expanding Wikidata to deal with languages is an exciting new application. While structured data about the sum of all human knowledge may help machines and artificial intelligence to understand the world, teaching Wikidata to also represent languages can help them understand how humans express their knowledge in words. And just think about all the things that are possible with all the language combinations we have in Wikimedia projects: translations from Estonian to Maltese or Tamil to Zulu — while a printed dictionary for these combinations probably doesn’t exist, direct translations between these languages may become possible  with structured data about languages.
				</p>
				<p>
					Items in Wikidata describe a thing, a person, or concept in this world. What Wikidata didn’t offer until 2018 was the linguistic side of things: the words to describe these entities as they appear in a language, their grammatical forms and meanings. Starting in 2017, we developed features in Wikidata and the software that powers it, Wikibase, to describe data about words. We call it <strong>lexicographical data</strong>. Lexicographical data within Wikidata were introduced in May 2018. Time to take a closer look.
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
					Lexicographical data means just that: data that can appear in a lexicon. What we’re dealing with here is the linguistic side of words. As the word “word” is already very loaded, we use the linguistic term <a href="https://en.wikipedia.org/wiki/Lexeme" target="new">Lexeme</a> – a Lexeme is an entry in a dictionary.
				</p>
				<p>
					The first Lexeme to be entered into Wikidata was the Sumerian word for “mother”. As Sumerian is one of the oldest languages we know, and the word for mother is one of the most basic words in any language, this may very well be one of the earliest utterances in human history.
				</p>
				<p>
					Every Lexeme has <strong>Senses</strong>, which tell you what a word means in various languages. It also has <strong>Forms</strong>, which describe how the Lexeme can change grammatically — just think of the 15 cases a noun can be used in in the Finnish language.
				</p>
				<p>
					As any other data, of course, you can also query lexicographical data. With queries you can also build amazing applications. One of the greatest pains for learners of German are the articles accompanying nouns: der, die, das. There is very little logic involved meaning articles mainly have to be memorized. Fortunately, there is a game that uses lexicographical data from Wikidata to help you with the memorizing: <a href="http://auregann.fr/derdiedas/" target="new">DerDieDas</a>. Can you make it through 10 randomly selected German nouns guessing the correct article? For those who already speak German, there is also a <a href="http://auregann.fr/unune" target="new">French</a> and a <a href="https://tools.wmflabs.org/enet/" target="new">Danish</a> version.
				</p>
				<p>
					As of March 2019, Wikidata has 43.440 Lexemes in 315 different languages, dialects or scripts. While this is already a good start, it is clearly just the beginning. Start exploring lexicographical data on Wikidata and help build a new repository of Free Knowledge for language data!
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
						<a href="https://blog.wikimedia.de/2019/03/25/lexicographical-data-on-wikidata-words-words-words/" target="new">Blog article</a>
					<li>
						Article Game: <a href="http://auregann.fr/derdiedas/" target="new">german</a>, <a href="http://auregann.fr/unune" target="new">french</a>, <a href="https://tools.wmflabs.org/enet/" target="new">danish</a>
				</ul>
			</div>
		</div>
	</section>
	<section class="report__boxes">
		<a href="<?= $url('/report', $lang) ?>" class="button button--report">Go to topic overview</a>
		<a href="/en/report/day-of-action" class="button button--report">
			<p class="button--small">Next topic</p>
			<p>Visiting Wikipedia</p>
		</a>
	</section>
</main>

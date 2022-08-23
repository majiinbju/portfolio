<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="main-grid">
	<p class="about-text"><?= $page->text() ?></p>
</main>

<?php snippet('footer') ?>


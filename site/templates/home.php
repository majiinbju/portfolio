<?php snippet('html') ?>
<k-loader />

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="main-grid">
	<p class="about text">
		<?= $page->about() ?>
	</p>
	<p class="about-links text">
		<?= $page->links() ?>
	</p>
</main>



<?php snippet('footer') ?>



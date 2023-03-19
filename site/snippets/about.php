<?php snippet("html"); ?>

<head>
	<?php snippet("header"); ?>
</head>

<main class="main-grid">
	<p class="about text">
		<?= $page->about() ?>
	</p>
	<p class="about-links text">
		<?= $page->links() ?>
	</p>
</main>

<?php snippet("footer");
?>

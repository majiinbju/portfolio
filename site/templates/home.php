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


<!-- Old code -->

<!-- <ul class="work-grid">
	<?php foreach ($page->children()->listed() as $work): ?>
	<li class="work-item">
		<a href="<?= $work->url() ?>" class="work">
			<img src="<?= $work->image()->url() ?>" alt="" class="work-img">
			<div class="work-info">
				<h2 class="work-title"><?= $work->title() ?> &#1014</h2>
				<p class="work-caption"><?= $work->text() ?></p>
			</div>
		</a>
	</li>
	<?php endforeach ?>
</ul> -->



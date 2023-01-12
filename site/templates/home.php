<?php snippet('html') ?>
<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<canvas class="orb-canvas"></canvas>

<main>
	<div class="container">
		<div class="project__grid">
			<?php foreach ($page->children()->listed() as $work): ?>
				<div class="card stacked">
					<a href="<?= $work->url() ?>" class="">
						<img src="<?= $work->image()->url() ?>" alt="" class="card__img" />
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</main>



<?php snippet('footer') ?>



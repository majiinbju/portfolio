<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="">
	<div class="container">
		<div class="project__grid">

			<?php foreach ($page->children()->listed()->offset(1) as $work): ?>
				<div class="card stacked">
					<a href="<?= $work->url() ?>" class="">
						<img src="<?= $work->image()->url() ?>" alt="" class="card__img" />
						<div class="card__content">
							<h2 class="card__title">
							<?= $work->title() ?>
							</h2>
	
                	  		<!-- <p class="card__description">
                	  			<?= $work->text() ?>
                	  		</p> -->
						</div>
					</a>
				</div>

			<?php endforeach ?>
		</div>
	</div>
</main>

<?php snippet('footer') ?>


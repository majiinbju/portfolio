<?php snippet('html') ?>
<k-loader />

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="main-grid">
	<div class="container">
		<div class="project__grid">
			<!-- <div class="card stacked"> -->
			<div class="card stacked">
				<a href="<?= $page->children()->first()->url() ?>">
					<img src="<?= $page->children()->first()->image()->url() ?>" alt="" class="card__img"/>
					<div class="card__content">
						<h2 class="card__title">
							<?= $page->children()->first()->title() ?>
						</h2>
					</div>
				</a>
			</div>

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



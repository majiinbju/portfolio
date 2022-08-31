<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="">
	<div class="container">
		<div class="project__grid">

			<div class="card stacked featured">
				<a href="<?= $page->children()->first()->url() ?>">
					<img src="<?= $page->children()->first()->image()->url() ?>" alt="" class="card__img"/>
					<div class="card__content">
						<h2 class="card__title un">
							<?= $page->children()->first()->title() ?>
						</h2>
					</div>
				</a>
			</div>

			<?php foreach ($page->children()->listed()->offset(1) as $work): ?>
				<div class="card stacked">
					<a href="<?= $work->url() ?>" class="">
						<img src="<?= $work->image()->url() ?>" alt="" class="	card__img">
						<div class="card__content">
							<h2 class="card__title un">
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



<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="main-grid">

	<ul class="project-grid">
		<?php foreach ($page->children()->listed() as $project): ?>
			<li class="project-item">
				<a href="<?= $project->url() ?>">
					<figure>
						<img src="<?= $project->image()->url() ?>" alt="" class="project-img">
						<!-- <?= $project->image() ?> -->
						<figcaption class="project-caption"><?= $project->title() ?></figcaption>
					</figure>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</main>



<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="main-grid">

	<ul class="project-grid">
		<?php foreach ($page->children()->listed() as $project): ?>
			<li class="project-item">
						<img src="<?= $project->image()->url() ?>" alt="" class="project-img">
						<div class="project-info">
							<a href="<?= $project->url() ?>" class="project">
								<h2 class="project-title"><?= $project->title() ?></h2>
								<p class="project-caption"><?= $project->text() ?></p>
							</a>
						</div>
						<!-- <?= $project->image() ?> -->
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</main>



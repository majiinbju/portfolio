<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

<main class="main-grid">

	<ul class="project-grid">
		<?php foreach ($page->children()->listed() as $project): ?>
			<li class="project-item">
						<a href="<?= $project->url() ?>" class="project">
							<img src="<?= $project->image()->url() ?>" alt="" class="	project-img">
							<div class="project-info">
									<h2 class="project-title"><?= $project->title() ?> &#10141;</h2>
									<p class="project-caption"><?= $project->text() ?></p>
							</div>
					</a>
						<!-- <?= $project->image() ?> -->
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</main>



<?php
$projects = $page->children()->listed(); ?>

<div class="container">
  <div class="project-grid">
    <?php foreach ($projects as $project): ?>
      <div class="card">
        <a href="<?= $project->url() ?>">
          <div class="card-img-container ">
            <img src="<?= $project->image()->url() ?>" alt="<?= $project
  ->image()
  ->alt() ?>" class="card-img lozad"/>
          </div>
          <div class="card-body">
            <h3 class="h3 card-title">
              	<?= $project->title() ?>
            </h3>
            <span>
				<?= $project->category() ?>
			</span>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

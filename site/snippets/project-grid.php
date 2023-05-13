<div class="container">
  <div class="project-grid">
    <?php foreach ($page->children()->listed() as $project): ?>
      <div class="card">
        <a href="<?= $project->url() ?>">
          <div class="card-img-container">
            <img src="<?= $project->image()->url() ?>" alt="" class="card-img lozad"/>
          </div>
          <div class="card-body">
            <h3 class="h3 card-title mt-lg-4">
              	<?= $project->title() ?>
            </h3>
            <span>
				<?= $project->category() ?>
			</span>
          </div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</div>
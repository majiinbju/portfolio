<div class="container d-flex flex-column align-self-start">
  <!-- title -->
  <h2 class="h2 heading p-4 text-md-center">
    <?= $page->title()->smartypants(); ?>
  </h2>
  <!-- image -->
  <div class="container d-flex flex-column justify-content-start">
    <?php snippet("project-image"); ?>
    <p class="summary p-4 mt-2 pb-0">
      <?= $page->summary()->smartypants(); ?>
    </p>
    <!-- tags -->
    <?php snippet("tags"); ?>
  </div>
  <!-- summary -->

  
    
</div>
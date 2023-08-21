<div class="container d-flex flex-column align-self-start">
  <!-- title -->
  <h2 class="h2 heading p-md-4 text-md-center">
    <?= $page->title()->smartypants(); ?>
  </h2>
  <!-- image -->
    <?php snippet("project-image"); ?>
  <div class="container d-flex flex-column justify-content-center col-md-8">
    <p class="summary p-md-4 mt-2 pb-0">
      <?= $page->summary()->smartypants(); ?>
    </p>
    <!-- tags -->
    <?php snippet("tags"); ?>
  </div>
  <!-- summary -->

  
    
</div>
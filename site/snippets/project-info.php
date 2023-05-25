<div class="container align-self-start">
  <!-- title -->
  <h2 class="h2 heading p-4">
    <?= $page->title()->smartypants(); ?>
  </h2>
  <!-- summary -->
  <p class="summary w-100 p-4 pb-0 pt-0">
    <?= $page->summary()->smartypants(); ?>
  </p>
  <!-- tags -->
  <?php snippet("tags"); ?>
</div>
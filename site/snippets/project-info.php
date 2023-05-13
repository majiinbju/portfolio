<div class="container align-self-start">
  <!-- title -->
  <h2 class="h2 heading p-4">
    <?= $page->title(); ?>
  </h2>
  <!-- summary -->
  <p class="summary w-100 p-4 pt-0">
    <?= $page->summary(); ?>
  </p>
  <!-- tags -->
  <?php snippet("tags"); ?>
</div>
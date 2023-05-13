<?php snippet("html"); ?>

<?php snippet("header"); ?>

  <main class="mb-5">
    <div class="container">
      <p class="summary w-100 p-4 pt-0">
        <?= $page->about(); ?>
      </p>
    </div>
  </main>

<?php snippet("footer");
?>
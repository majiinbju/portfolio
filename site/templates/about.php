<?php snippet("html"); ?>

<?php snippet("header"); ?>

  <main class="mb-5">
    <div class="container summary-container">
      <p class="summary p-4 pt-0" style="text-indent: 7.5%;">
        <?= $page->about(); ?>
      </p>
    </div>
  </main>

<?php snippet("footer");
?>
<ul class="d-flex w-100 justify-content-between tags mt-2 p-3">
   <?php if ($page->category()->isNotEmpty()) : ?>
      <li class="sub-heading">
         <?= $page->category() ?>
      </li>
   <?php endif ?>
   <?php if ($page->role()->isNotEmpty()) : ?>
      <li class="sub-heading">
         <?= $page->role() ?>
      </li>
   <?php endif ?>
   <?php if ($page->credits()->isNotEmpty()) : ?>
      <li class="sub-heading">
         <?= $page->credits() ?>
      </li>
   <?php endif ?>
   <?php if ($page->year()->isNotEmpty()) : ?>
      <li class="sub-heading">
         <?= $page->year() ?>
      </li>
   <?php endif ?>
</ul>
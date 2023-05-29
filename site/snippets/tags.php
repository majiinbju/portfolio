<ul class="d-flex flex-column w-100 justify-content-between tags mt-2 p-4">
   <?php if ($page->category()->isNotEmpty()) : ?>
      <i>Category</i>
      <li class="sub-heading">
         <?= $page->category() ?>
      </li>
   <?php endif ?>
   <?php if ($page->role()->isNotEmpty()) : ?>
      <i>Role</i>
      <li class="sub-heading">
         <?= $page->role() ?>
      </li>
   <?php endif ?>
   <?php if ($page->credits()->isNotEmpty()) : ?>
      <i>Credits</i>
      <li class="sub-heading">
         <?= $page->credits() ?>
      </li>
   <?php endif ?>
   <?php if ($page->year()->isNotEmpty()) : ?>
      <i>Year</i>
      <li class="sub-heading">
         <?= $page->year() ?>
      </li>
   <?php endif ?>

   <?php if ($page->link()->isNotEmpty()) : ?>
      <li class="sub-heading">
         <a href="<?= $page->link() ?>" class="link">
            View Project↗︎
         </a>
      </li>
   <?php endif ?>
</ul>
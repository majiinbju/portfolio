<ul class="d-md-flex w-100 justify-content-between tags mt-2 p-4 text-md-start">
   <?php if ($page->category()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column">
         <i>Category</i>
         <?= $page->category() ?>
      </li>
   <?php endif ?>
   <?php if ($page->role()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column">
         <i>Role</i>
         <?= $page->role() ?>
      </li>
   <?php endif ?>
   <?php if ($page->credits()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column">
         <i>Credits</i>
         <?= $page->credits() ?>
      </li>
   <?php endif ?>
   <?php if ($page->year()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column">
         <i>Year</i>
         <?= $page->year() ?>
      </li>
   <?php endif ?>

   <?php if ($page->link()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column">
         <i>Link</i>
         <a href="<?= $page->link() ?>" class="link">
            View Project↗︎
         </a>
      </li>
   <?php endif ?>
</ul>
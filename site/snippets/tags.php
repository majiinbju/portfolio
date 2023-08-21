<ul class="d-md-flex flex-md-wrap justify-content-start tags mt-2 p-md-4">
   <?php if ($page->category()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column col-md-4 mb-md-3   ">
         <i>Category</i>
         <?= $page->category() ?>
      </li>
   <?php endif ?>
   <?php if ($page->role()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column col-md-4 mb-md-3  ">
         <i>Role</i>
         <?= $page->role() ?>
      </li>
   <?php endif ?>
   <?php if ($page->credits()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column col-md-4 mb-md-3  ">
         <i>Credits</i>
         <?= $page->credits() ?>
      </li>
   <?php endif ?>
   <?php if ($page->year()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column col-md-4 mb-md-3  ">
         <i>Year</i>
         <?= $page->year() ?>
      </li>
   <?php endif ?>

   <?php if ($page->link()->isNotEmpty()) : ?>
      <li class="tag d-flex flex-column col-md-4 mb-md-3">
         <i>Link</i>
         <a href="<?= $page->link() ?>" class="link">
            View Project↗︎
         </a>
      </li>
   <?php endif ?>
</ul>
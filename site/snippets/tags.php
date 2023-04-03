<ul class="d-flex w-50 justify-content-between tags p-2">
	<?php if ($page->category()->isNotEmpty()): ?>
      <li class="sub-heading"> 
		<?= $page->category() ?>
      </li>
    <?php endif ?>
    <?php if ($page->role()->isNotEmpty()): ?>
      <li class="sub-heading"> 
		<?= $page->role() ?>
      </li>
    <?php endif ?>
    <?php if ($page->credits()->isNotEmpty()): ?>
      <li class="sub-heading"> 
		<?= $page->credits() ?>
      </li>
    <?php endif ?>
    <?php if ($page->year()->isNotEmpty()): ?>
      <li class="sub-heading"> 
		<?= $page->year() ?>
      </li>
    <?php endif ?>
</ul>
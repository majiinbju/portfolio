<div class="container">
	<nav class="pagination d-flex flex-sm-row justify-content-evenly col-12 text-end">
		<?php if ($page->hasPrevListed()): ?>
		<a href="<?= $page->prevListed()->url() ?>">
			&larr; Previous
		</a>
		<?php endif ?>

		<?php if ($page->hasNextListed()): ?>
		<a href="<?= $page->nextListed()->url() ?>" class="align-self-end">
			Next &rarr;
		</a>
		<?php endif ?>
	</nav>
</div>
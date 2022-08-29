<nav class="pagination">
    <?php if ($page->hasPrevListed()): ?>
        <a href="<?= $page->prevListed()->url() ?>" class="previous-page">
            &larr; Previous Project
        </a>
    <?php endif ?>

    <?php if ($page->hasNextListed()): ?>
        <a href="<?= $page->nextListed()->url() ?>" class="next-page">
            Next Project &rarr;
        </a>
    <?php endif ?>
</nav>
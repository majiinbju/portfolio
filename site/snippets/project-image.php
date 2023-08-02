<div class="container">
    <a href="<?= $page->image()->url() ?>" data-toggle="lightbox" class="a">
        <img src="<?= $page->image()->url() ?>" alt="<?= $page->image()->alt() ?>" class="project-img lozad" />
        <?php if ($page->image()->alt()->isNotEmpty()) : ?>
        <p class="align-self-start p-4 pb-0 text-center">
            <?= $page->image()->alt()->smartypants() ?>
        </p>
        <?php endif ?>
    </a>
</div>
<?php snippet("html"); ?>
<?php snippet("header"); ?>
<main class="mb-5">
    <div class="container">
        <!-- image -->
        <a href="<?= $page->image()->url() ?>">
            <img 
            src="<?= $page->image()->url() ?>" 
            alt="<?= $page->image()->alt() ?>"
            class="project-img"
        />
        </a>
        <!-- title -->
        <h2 class="h2 mt-5 heading">
        <?= $page->title() ?>
        </h2>
        <!-- summary -->
        <p class="summary p-2">
            <?= $page->summary() ?>
        </p>
        <!-- tags -->
        <?php snippet("tags") ?>
    </div>
</main>
<?php snippet("footer"); ?>
<?php snippet("html"); ?>
<?php snippet("header"); ?>
<main class="mb-5">
    <div class="container w-100 d-flex align-items-center">
        <?php snippet("project-info"); ?>
        <!-- image -->
        <div class="container d-flex flex-column justify-content-start">
            <?php snippet("project-image"); ?>
            <!-- tags -->
            <?php snippet("tags"); ?>
        </div>
    </div>
    <div class="container w-100 d-flex align-items-center">
        <ul class="gallery mt-5">
        <?php foreach($page->images()->offset(1) as $image): ?>
            <li class="w-100 d-flex align-items-center mb-2">
                 <p class="w-50 align-self-start">
                    <?= $image->caption() ?>
                 </p>
                 <img src="<?= $image->url() ?>" class="w-50">
            </li>
        <?php endforeach ?>
        </ul>
    </div>
</main>
<?php snippet("footer"); ?>
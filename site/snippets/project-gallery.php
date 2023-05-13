<div class="container w-100 d-flex align-items-center">
  <ul class="gallery mt-5">
    <?php foreach ($page->images()->offset(1) as $image) : ?>
      <li class="w-100 d-flex align-items-center mb-2 justify-content-end p-3">
        <?php if ($image->caption()->isNotEmpty()) : ?>
          <p class="w-50 align-self-start p-4">
            <?= $image->caption() ?>
          </p>
        <?php endif ?>
        <a href="<?= $image->url() ?>" data-toggle="lightbox" class="w-50">
        <img src="<?= $image->url() ?>" class="gallery-img align-self-center lozad" alt="<?= $image->alt() ?>">
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
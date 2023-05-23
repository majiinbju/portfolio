<div class="container w-100 d-flex align-items-center">
  <ul class="gallery mt-5">
    <?php foreach ($page->images()->offset(1) as $image) : ?>
      <li class="w-100 d-md-flex align-items-center mb-2 justify-content-md-end p-3">
        <?php if ($image->caption()->isNotEmpty()) : ?>
          <p class="align-self-start p-4">
            <?= $image->caption() ?>
          </p>
        <?php endif ?>
        <a href="<?= $image->url() ?>" data-toggle="lightbox" class="">
        <img src="<?= $image->url() ?>" class="gallery-img align-self-center lozad" alt="<?= $image->alt() ?>">
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
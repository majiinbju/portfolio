
  <ul class="gallery mt-5">
    <?php foreach ($page->images()->offset(1) as $image) : ?>
      <li class="w-100 d-md-flex flex-column align-items-center mb-2 p-3 justify-content-md-end">
        <?php if ($image->caption()->isNotEmpty()) : ?>
          <a href="<?= $image->url() ?>" data-toggle="lightbox" class="a">
            <img src="<?= $image->url() ?>" class="gallery-img align-self-center lozad" alt="<?= $image->alt() ?>">
            <?php if ($image->alt()->isNotEmpty()) : ?>
              <p class="align-self-start p-4 pb-0 text-center">
                <?= $image->alt()->smartypants() ?>
              </p>
            <?php endif ?>
            <p class="align-self-start p-4 me-md-5 caption" style="text-indent: 7.5%;">
              <?= $image->caption()->smartypants() ?>
            </p>
          </a>
        
        <?php endif ?>
        <?php if ($image->caption()->isEmpty()) : ?>
          <a href="<?= $image->url() ?>" data-toggle="lightbox" class="a">
            <img src="<?= $image->url() ?>" class="gallery-img align-self-center lozad" alt="<?= $image->alt() ?>">
            <?php if ($image->alt()->isNotEmpty()) : ?>
              <p class="align-self-start p-4 text-md-center">
                <?= $image->alt()->smartypants() ?>
              </p>
            <?php endif ?>
          </a>
        <?php endif ?>

      </li>
    <?php endforeach ?>
  </ul>

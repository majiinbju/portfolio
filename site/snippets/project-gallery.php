<ul class="gallery mt-5">
  <?php foreach ($page->images()->offset(1) as $image) : ?>
  <li class="w-100 d-md-flex flex-column align-items-center mb-2 p-3 justify-content-md-end">

    <a href="<?= $image->url() ?>" data-toggle="lightbox" class="a">

      <img src="<?= $image->url() ?>" class="gallery-img align-self-center lozad" alt="<?= $image->alt() ?>">
      <?php if ($image->alt()->isNotEmpty()) : ?>
      <p class="align-self-start p-4 pb-0 text-center">
        <?= $image->alt()->smartypants() ?>
      </p>
      <?php endif ?>

    </a>

    <div class="d-flex flex-column align-items-center justify-content-md-end p-md-5 col-md-8">
      <?php if ($image->heading()->isNotEmpty()) : ?>
      <strong class="align-self-start pt-5 pb-0 me-md-1 subheading ">
        <?= $image->heading()->smartypants() ?>
      </strong>
      <?php endif ?>

      <?php if ($image->caption()->isNotEmpty()) : ?>
      <p class="pt-2 me-md-1 caption">
        <?= $image->caption()->smartypants() ?>
      </p>
      <?php endif ?>
    </div>


  </li>
  <?php endforeach ?>
</ul>
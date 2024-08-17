<ul class="gallery mt-5">
  <?php foreach ($page->files()->offset(1) as $file) : ?>
  <li class="w-100 d-md-flex flex-column align-items-center mb-2 p-3 justify-content-md-end">

    <?php if ($file->type() == 'image') : ?>
      <a href="<?= $file->url() ?>" data-toggle="lightbox" class="a">
        <img src="<?= $file->url() ?>" class="gallery-img align-self-center lozad" alt="<?= $file->alt() ?>">
        <?php if ($file->alt()->isNotEmpty()) : ?>
        <p class="align-self-start p-4 pb-0 text-center">
          <?= $file->alt()->smartypants() ?>
        </p>
        <?php endif ?>
      </a>
    <?php elseif ($file->type() == 'video') : ?>
      <video controls class="gallery-img align-self-center lozad">
        <source src="<?= $file->url() ?>" type="<?= $file->mime() ?>">
        Your browser does not support the video tag.
      </video>
      <?php if ($file->alt()->isNotEmpty()) : ?>
      <p class="align-self-start p-4 pb-0 text-center">
        <?= $file->alt()->smartypants() ?>
      </p>
      <?php endif ?>
    <?php endif ?>

    <div class="d-flex flex-column align-items-center justify-content-md-end p-md-5 col-md-8">
      <?php if ($file->heading()->isNotEmpty()) : ?>
      <strong class="align-self-start pt-5 pb-0 me-md-1 subheading ">
        <?= $file->heading()->smartypants() ?>
      </strong>
      <?php endif ?>

      <?php if ($file->caption()->isNotEmpty()) : ?>
      <p class="pt-2 me-md-1 caption">
        <?= $file->caption()->smartypants() ?>
      </p>
      <?php endif ?>
    </div>

  </li>
  <?php endforeach ?>
</ul>

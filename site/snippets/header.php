<header class="header sticky">

      <!-- $site used as a selector for site.txt -->
      <a href="<?= $site->url() ?>" class="logo">
      <!-- <a href="<?= $site->url() ?>" class="logo"> -->
        <h1><?= $site->title() ?></h1>
      </a>

      <!-- <nav> -->
        <ul class="menu">
          <!-- $x->children function will select the items in the content folder (projects, etc.) -->
          <?php foreach ($site->children()->listed() as $item): ?>
            <li>
              <a href="<?= $item->url() ?>"> <?= $item->title() ?> </a>
            </li>
            <li>
              <a href="../#work-section">
                Work
              </a>
            </li>
            <li>
                &copy; 2022
            </li>
          <?php endforeach ?>
        </ul>
      <!-- </nav> -->

    </header>
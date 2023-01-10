    <header class="header sticky">

      <!-- $site used as a selector for site.txt -->
      <a href="<?= $site->url() ?>">
        <h1 class="logo"><?= $site->title() ?></h1>
      </a>

      <nav class="nav">

        <ul class="menu">
          <?php foreach ($site->children()->listed() as $item): ?>

            <li>
              <a href="<?= $item->url() ?>" class="nav-item">
                <?= $item->title() ?>
              </a>
            </li>
          <?php endforeach ?>
          <li class="gray">
              &copy; 2023
          </li>
        </ul>

      </nav>

    </header> 
<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

 
    <main class="main-grid">
        <h2 class="project-title">
            <?= $page->title() ?>
        </h2>

        <dl class="project-tag">
                <dd><?= $page->category() ?></dd>
                <?php if ($page->link()->isNotEmpty()): ?>
                    <dd>
                        <a href="<?= $page->link() ?>" class="project-link">View Project</a>
                    </dd>
                <?php endif ?>
                <dd><?= $page->year() ?></dd>
        </dl>

        <a href="<?= $page->image()->url() ?>" class="project-img">
            <img src="<?= $page->image()->resize(2400, 1600)->url() ?>" alt="" class="project-img cover">
        </a>


        <section class="section what">
            <?php if($image = $page->image('02_what.png')): ?>
            <a href="<?= $image->url() ?>" class="project-img">
                <img src="<?= $image->resize(2400, 1600)->url() ?>" alt="" class="project-img">
            </a>
            <?php endif ?>
            <h2 class="project-header">01 - What</h2>
            <p class="project-description"><?= $page->what() ?></p>
        </section>

        <section class="section why">
            <?php if($image = $page->image('03_why.png')): ?>
            <a href="<?= $image->url() ?>" class="project-img">
                <img src="<?= $image->resize(2400, 1600)->url() ?>" alt="" class="project-img">
            </a>
            <?php endif ?>
            <h2 class="project-header">02 - Why</h2>
            <p class="project-description"><?= $page->why() ?></p>
        </section>

        <section class="section process">
            <?php if($image = $page->image('04_how.png')): ?>
                <a href="<?= $image->url() ?>" class="project-img">
                    <img src="<?= $image->resize(2400, 1600)->url() ?>" alt="">
                </a>
            <?php endif ?>
            <h2 class="project-header">03 - Process</h2>
            <p class="project-description"><?= $page->how() ?></p>
        </section>
        


        <div class="project-gallery">
            <?php foreach($page->images()->offset(5) as $image): ?>
                <li>
                    <a href="<?= $image->url() ?>" class="">
                        <img src="<?= $image->resize(2400, 1600)->url() ?>" alt="" class="project-img">
                    </a>
                </li>
            <?php endforeach ?>
        </div>

    <?php snippet('pagination') ?>

    </main>

<?php snippet('footer') ?>

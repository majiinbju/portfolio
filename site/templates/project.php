<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

 
    <main class="main-grid" id="main">
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

        <a class="project-img">
            <img src="<?= $page->image('01_cover.png')->url() ?>" class="project-img cover">
        </a>


        <?php if ($page->what()->isNotEmpty()): ?>
            <section class="section what">
                <?php if($image = $page->image('02_what.png')): ?>
                <a class="project-img">
                    <img src="<?= $image->url() ?>" class="project-img">
                </a>
                <?php endif ?>
                <h2 class="project-header">01 - What</h2>
                <p class="project-description"><?= $page->what() ?></p>
            </section>
        <?php endif ?>


        <?php if ($page->why()->isNotEmpty()): ?>
        <section class="section why">
            <?php if($image = $page->image('03_why.png')): ?>
            <a class="project-img">
                <img src="<?= $image->url() ?>" class="project-img">
            </a>
            <?php endif ?>
            <h2 class="project-header">02 - Why</h2>
            <p class="project-description"><?= $page->why() ?></p>
        </section>
        <?php endif ?>

        <?php if ($page->how()->isNotEmpty()): ?>
        <section class="section process">
            <?php if($image = $page->image('04_how.png')): ?>
                <a class="project-img">
                    <img src="<?= $image->url() ?>">
                </a>
            <?php endif ?>
            <h2 class="project-header">03 - Process</h2>
            <p class="project-description"><?= $page->how() ?></p>
        </section>
        <?php endif ?>
        


        <div class="project-gallery">
            <?php foreach($page->images()->offset(6) as $image): ?>
                <li>
                    <a class="">
                        <img src="<?= $image->url() ?>" class="project-img">
                    </a>
                </li>
            <?php endforeach ?>
        </div>

    <?php snippet('pagination') ?>

    <?= js('/assets/js/index.js') ?>

    </main>

<?php snippet('footer') ?>

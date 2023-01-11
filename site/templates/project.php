<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

 
    <main class="main-grid" id="main">
        <h2 class="project-title">
            <?= $page->title() ?>
        </h2>

        <dl class="project-tags">
                <dd class="project-tag"><?= $page->category() ?></dd>
                <?php if ($page->link()->isNotEmpty()): ?>
                    <dd>
                        <a href="<?= $page->link() ?>" class="project-tag project-link">View Project</a>
                    </dd>
                <?php endif ?>
                <dd class="project-tag"><?= $page->year() ?></dd>
        </dl>

        <a class="project-img">
            <img src="<?= $page->image('01_cover.jpg')->resize(1920)->url() ?>" class="cover lozad">
        </a>


        <?php if ($page->what()->isNotEmpty()): ?>
            <section class="section what">
                <p class="project-description"><?= $page->what() ?></p>
                <?php if($image = $page->image('02_what.jpg')): ?>
                <a class="project-img">
                    <img src="<?= $image->resize(1920)->url() ?>" class="lozad">
                </a>
                <?php endif ?>
            </section>
        <?php endif ?>


        <?php if ($page->why()->isNotEmpty()): ?>
        <section class="section why">
            <?php if($image = $page->image('03_why.jpg')): ?>
            <a class="project-img">
                <img src="<?= $image->resize(1920)->url() ?>" class="lozad">
            </a>
            <?php endif ?>
            <!-- <h2 class="project-header">Why</h2> -->
            <p class="project-description"><?= $page->why() ?></p>
        </section>
        <?php endif ?>

        <?php if ($page->how()->isNotEmpty()): ?>
        <section class="section process">
            <?php if($image = $page->image('04_how.jpg')): ?>
            <a class="project-img">
                <img src="<?= $image->resize(1920)->url() ?>" class="lozad">
            </a>
            <?php endif ?>
            <!-- <h2 class="project-header">Process</h2> -->
            <p class="project-description"><?= $page->how() ?></p>
        </section>
        <?php endif ?>
        

            <ul class="project-gallery">
            <?php foreach($page->images()->offset(6) as $image): ?>
                <li>
                    <a class="project-img">
                        <img src="<?= $image->resize(1920)->url() ?>" class="lozad project-img"
                        >
                    </a>
                </li>
            <?php endforeach ?>
            </ul>

    <?php snippet('pagination') ?>

    <?= js('/assets/js/index.js') ?>

    </main>

<?php snippet('footer') ?>

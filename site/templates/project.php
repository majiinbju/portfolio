<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- "$site" object contains the information of site.txt -->
     <title><?= $site->tab() ?></title>
     <link rel="shortcut icon" href="/assets/icon/.ico" type="image/x-icon">
     <!-- Linking a css file with "css()" function -->
     <!-- <?= css('/assets/css/debug.css') ?> -->
     <?= css('/assets/css/reset.css') ?>
     <?= css('/assets/css/header.css') ?>
     <?= css('/assets/css/footer.css') ?>
     <?= css('/assets/css/index.css') ?>
     <?= css('/assets/css/project.css') ?>
     <?= js('/assets/js/index.js') ?>
 </head>
<body>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

 
    <main class="main-grid">

        <img src="<?= $page->image()->url() ?>" alt="" class="project-img">
        
        <h2 class="project-title">
            <?= $page->title() ?>
        </h2>

        <dl class="project-tag">
                <dd><?= $page->tag() ?></dd>
                <?php if ($page->link()->isNotEmpty()): ?>
                    <dd>
                        <a href="<?= $page->link() ?>" class="project-link">View Project</a>
                    </dd>
                <?php endif ?>
                <dd><?= $page->year() ?></dd>
        </dl>
        
        <div class="project-gallery">
            <?php foreach($page->images()->offset(1) as $image): ?>
                <li>
                    <a href="<?= $image->url() ?>">
                        <?= $image ?>
                    </a>
                </li>
                <li>
                    <p>
                        <?= $page->text() ?>
                    </p>
                </li>
            <?php endforeach ?>
        </div>

    </main>

<?php snippet('footer') ?>

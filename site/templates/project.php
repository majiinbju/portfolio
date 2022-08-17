<?php

use Kirby\Text\SmartyPants;

 snippet('header') ?>
 
    <main class="main">

        <h1><?= $page->title() ?></h1>
            
        <div class="project-layout">

            <div class="project-info">
                <?= $page->text() ?>

                <dl>
                    <?php if ($page->tag1()->isNotEmpty()): ?>
                    <dt>Tag 1</dt>
                    <dd><?= $page->tag1() ?></dd>
                    <?php endif ?>
                </dl>
            </div>

            <div class="project-gallery">
                <?php foreach($page->images()->offset(1) as $image): ?>
                    <li>
                        <a href="<?= $image->url() ?>">
                            <?= $image ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </div>

        </div>
    </main>
<?php snippet('footer') ?>
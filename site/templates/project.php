<?php snippet('html') ?>

<?php use Kirby\Text\SmartyPants; snippet('header') ?>

 
    <main class="main-grid">
    

        <div class="project-img">
            <?= $page->image() ?>
        </div>
        
        <h2 class="project-title">
            <?= $page->number() ?> – <?= $page->title() ?>
        </h2>

        <dl>
            <?php if ($page->tag1()->isNotEmpty()): ?>

                <dd><?= $page->tag1() ?></dd>
                
            <?php endif ?>
        </dl>
        
    </main>

<?php snippet('footer') ?>


<!-- 
    <div class="project-gallery">
        <?php foreach($page->images()->offset(1) as $image): ?>
            <li>
                <a href="<?= $image->url() ?>">
                    <?= $image ?>
                </a>
            </li>
        <?php endforeach ?>
    </div> /// old images code--> 
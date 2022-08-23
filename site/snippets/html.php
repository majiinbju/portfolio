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
     <?= js('/assets/js/index.js') ?>
     <!-- auto selector will look for project template -->
     <?= css('@auto') ?>

 </head>


 
  <body>
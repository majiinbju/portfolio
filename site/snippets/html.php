<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Security-Policy" content="default-src https:">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- "$site" object contains the information of site.txt -->
  <title>
    <?= $site->tab() ?>
  </title>
  <meta name="description" content="<?= $site->description() ?>">
  <meta name=”robots” content="index, follow">
  <link rel="shortcut icon" href="/assets/favicon/favicon.ico" type="image/x-icon">
  <!-- Linking a css file with "css()" function -->
  <?= css('/assets/css/reset.css') ?>
  <?= css('/assets/css/templates/header.css') ?>
  <?= css('/assets/css/templates/footer.css') ?>
  <?= css('/assets/css/index.css') ?>
  <!-- auto selector will look for project template -->
  <?= css('@auto') ?>
</head>



<body id="body" style="opacity:0;">
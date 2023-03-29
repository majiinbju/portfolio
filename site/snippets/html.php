<!DOCTYPE html>
<html lang="en">

<head>
  <?php snippet("meta"); ?>
  <link rel="shortcut icon" href="/assets/favicon/favicon.ico" type="image/x-icon">
  <?php snippet("bootstrap"); ?>
  <?= css([
    "/assets/css/index.css",
    "/assets/css/templates/header.css"
  ]) ?>
  <?= js("/assets/js/cursor.js", ['async' => true, 'defer' => true]) ?>
  <?= js("/assets/js/index.js", ['async' => true, 'defer' => true]) ?>
  <?= css("@auto") ?>
</head>


<body class="vstack">

<?php snippet("cursor"); ?>
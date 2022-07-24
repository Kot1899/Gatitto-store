<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Cat store</title>
</head>
<body>
<?php require 'templates/header.html' ?>
<main class="container px-3">
    <?php foreach ($mainList as $value):?>
        <h1><?php echo $value[ 'title' ];?> </h1>
        <img id="object-position-1" src="images/<?php echo $value[ 'img' ];?>.jpg" class="img-space" >
        <p class="lead"><?php echo $value[ 'description' ];?> </p>
    <?php endforeach;?>
</main>
<?php require 'templates/footer.html' ?>
<body>
</html>

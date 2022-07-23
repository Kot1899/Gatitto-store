<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/var/www/mysite/NIX/favicon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href='/store/public/css/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>About</title>
</head>
<body>
<?php require '/var/www/mysite/NIX/xbasket/block/header.html' ?>
<main class="container px-3">
    <h1>Data about our place</h1>
<!--    <img src="/app/views/images/1.jpg">-->
<?php foreach ($newsList as $value):?>
    <div class="d-flex flex-wrap">
        <?php
        for($i=0; $i<3; $i++):
            ?>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <img src="//var/www/mysite/NIX/store/app/views/images/<?php echo ($i+1) ?>_Milan_650x404.jpg" class="img-thumbnail" alt="some text">
                </div>
            </div>
        <?php endfor; ?>
        <p class="stb">Оur space was created in 1899. This is not a simple store where you can find and buy a cat,
            this is a space where you can find much more than just a cat. A place where you can become something more than
            just a person.</p>
        <p class="stb"> <?php echo $value[ 'short_content' ];?> Welcome to our place.</p>
    </div>
<?php endforeach;?>

</main>
<?php require '/var/www/mysite/NIX/xbasket/block/footer.html' ?>
<body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Goods</title>
</head>
<body>
<?php require 'block/header.html' ?>
<main class="container mt-5">
    <h3 class="mb-5">Your happiness </h3>
    <div class="d-flex flex-wrap">
        <?php
        for($i=0; $i<3; $i++):
            ?>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 ">Cat name</h4>
                </div>
                <div class="card-body">
                    <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>2 eyes</li>
                        <li>1 tamil </li>
                        <li>Beautiful nose </li>
                        <li>Fascinating color</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Detail</button>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</main>
<?php require 'block/footer.html' ?>
<body>
</html>
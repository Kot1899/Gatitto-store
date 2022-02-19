<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Magaz</title>
</head>
<body>
<?php //require 'block/header.php' ?>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="gg-2">KOT</span>
    </a>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Main</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Goods</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Product details</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Basket</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Login</a>
</div>
<div class="container mt-5">
    <h3 class="mb-5">Our article</h3>
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
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Detail</button>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<footer class=" container pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">© Magaz.KOT</small>
        </div>
        <div class="col-6 col-md">
            <h5>Data 1</h5>
        </div>
        <div class="col-6 col-md">
            <h5>Data 2</h5>
        </div>
        <div class="col-6 col-md">
            <h5>Data 3</h5>
        </div>
    </div>
</footer>
<body>
</html>
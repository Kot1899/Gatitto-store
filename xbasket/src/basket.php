<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Basket</title>
</head>
<body>
<?php //require '../block/header.html' ?>
<main class="container col-md-5 col-lg-4 order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your order</span>
        <span class="badge bg-primary rounded-pill">#1899</span>
    </h4>
    <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between align-items-center lh-sm">
            <img class="img-basket" src="img/1.jpg" width="100" height="71" >
            <div>
                <h6 class="my-4545">Cat name</h6>
                <small class="text-descr">Some description</small>
            </div>
            <span class="text-muted">4 smile</span>
        </li>
               <li class="list-group-item d-flex justify-content-between">
            <span>Total (smile)</span>
            <strong>4 smile</strong>
        </li>
    </ul>
    <button class="w-100 btn btn-primary btn-lg" type="submit">To checkout</button>
</main>
<?php //require '../block/footer.html' ?>

<body>
</html>


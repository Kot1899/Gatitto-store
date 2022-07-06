<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Product details</title>
</head>
<body>
<?php require '../block/header.html' ?>
<main class="container col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Cat name</strong>
            <h3 class="mb-0">My history</h3>
            <div class="mb-1 text-muted">Birth date: Nov 12</div>
            <p class="card-text mb-auto">I like peace and quiet, so it's best not to create an additional source of stress for me. I don't like being stroked the wrong way or touching my belly.</p>
            <a class="btn2 btn2-outline-primary" href="#">Take me</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img id="object-position-1" src="img/1.jpg" class="img-det" >
        </div>
    </div>
</main>
<?php require '../block/footer.html' ?>
<body>
</html>
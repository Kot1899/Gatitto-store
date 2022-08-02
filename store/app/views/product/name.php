<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Products</title>
</head>
<body>
<?php require 'templates/header.html' ?>

<main class="container col-md-6">
     <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p9-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary fontBig"><?php echo $productName[ 'name' ];?></strong>
                <h3 class="mb-0">About me </h3>
                <p class="card-text marginb-2" > <?php echo $productName[ 'story' ];?> </p>
                <div class="marginb-1">Age - <?php echo $productName[ 'age' ];?> month</div>
                <p class="card-text marginb-1"> Character - <?php echo $productName[ 'character_cat'];?> </p>
                <p class="card-text marginb-1"> Soldi - <?php echo $productName[ 'soldi' ];?> </p>
                <a class="btn2 btn2-outline-primary" href="/contact/<?php echo $productName['name']; ?>">Take me</a>
                <div class="col-auto d-none d-lg-block">
                    <img id="object-position-1" src="/images/<?php echo $productName['name']; ?>.jpg" class="img-product" width="300" height="214">
                </div>
        </div>
    </div>
</main>

<?php require 'templates/footer.html' ?>
<body>
</html>


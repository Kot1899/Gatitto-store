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
    <?php foreach ($productId as $productId):?>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
<!--            --><?php //foreach ($productId as $productId):?>

                <strong class="d-inline-block mb-2 text-primary"><?php echo $productId[ 'name' ];?></strong>
                <h3 class="mb-0">About me </h3>
                <div class="mb-1 text-muted">Age - <?php echo $productId[ 'age' ];?> month</div>
                <p class="card-text mb-auto"> <?php echo $productId[ 'story' ];?> </p>
                <a class="btn2 btn2-outline-primary" href="/contact/<?php echo $productId['name'] ?>">Take me</a>

                <div class="col-auto d-none d-lg-block">
                    <img id="object-position-1" src="img/<?php echo $productId['id'] ?>.jpg" class="img-det" >
                </div>
<!--            --><?php //endforeach;?>
        </div>
    </div>

    <?php endforeach;?>

</main>

<?php require 'templates/footer.html' ?>
<body>
</html>




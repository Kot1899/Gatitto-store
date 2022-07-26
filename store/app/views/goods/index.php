<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Goods</title>
</head>
<body>
<?php require 'templates/header.html' ?>

<main class="container mt-5">
    <h3 class="mb-5">Gattino</h3>
    <div class="d-flex flex-wrap">

        <?php foreach ($goodsList as $value):?>
        <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 "><?php echo $value[ 'name' ];?></h4>
                </div>
                <div class="card-body">
                    <img src="images/<?php echo $value[ 'name' ];?>.jpg" class="img-thumbnail">
                    <ul class="fontMedium list-unstyled mt-3 mb-4">
                        <li>Breed     -  <?php echo $value[ 'breed' ];?></li>
                        <li>Age       - <?php echo $value[ 'age' ];?> month</li>
                        <li>Character - <?php echo $value[ 'character_cat'];?></li>
<!--                        <li>Story     - --><?php //echo $value[ 'story' ];?><!--</li>-->
                        <li>Soldi     - <?php echo $value[ 'soldi' ];?></li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Detail</button>
                </div>
            </div>
        <?php endforeach;?>

    </div>
</main>

<?php require 'templates/footer.html' ?>
<body>
</html>
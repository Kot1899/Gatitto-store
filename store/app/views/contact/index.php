<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Contact</title>
</head>
<body>
<?php require 'templates/header.html' ?>
<main class="container px-3">
    <h1>Contacts</h1>
    <div class="d-flex flex-nowrap">
        <?php for($i=0; $i<4; $i++):?>
            <div class="card1 mb-3 rounded-3 ">
                <div class="card-body-contact">
                    <img src="images/<?php echo ($i+1) ?>_contact.jpg" class="img-thumbnail">
                    <?php foreach ($contactList as $value) :?>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php echo $value['email']?> </li>
                    </ul>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endfor; ?>

</main>
<?php require 'templates/footer.html' ?>
<body>
</html>

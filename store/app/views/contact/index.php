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
    <h1 class="mb-5">Contacts</h1>
    <div class="d-flex flex-wrap">

        <?php foreach ($contactList as $value) :?>
            <div class="card1 mb-3 rounded-3 ">
                <div class="card-body-contact">
                    <img src="images/<?php echo $value['id'] ?>_contact.jpg" class="img-thumbnail">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php echo $value['email']?> </li>
                    </ul>

                </div>
            </div>
        <?php endforeach;?>
    </div>
</main>
<?php require 'templates/footer.html' ?>
<body>
</html>

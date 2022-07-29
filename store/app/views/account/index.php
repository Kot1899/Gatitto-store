<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href='/css/style.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>My account</title>
</head>
<body>
<?php require 'templates/header.html' ?>
<main class="container px-3">

<h1> Hello <?php echo $user['name'];?> </h1>

</main>
<?php require 'templates/footer.html' ?>
<body>
</html>

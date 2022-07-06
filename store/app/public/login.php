<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Sign in</title>
</head>
<body>
<?php require '../block/header.html' ?>
<main class="modal-body p-5 pt-0">
    <form class="login-css" action="index.php" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
            </form>
</main>
<?php require '../block/footer.html' ?>
<body>
</html>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Registration</title>
</head>
<body>

<?php require '../block/header.html' ?>
<main class="modal-body p-5 pt-0">
    <form class="login-css" action="registration.php" method="post">
        <div class="form-floating mb-3">
             <span>Login <br/>
            <input type="text" class="form-control rounded-4" name="Login" id="Login" placeholder="name@example.com"/>
             </span>
        </div>
        <div class="form-floating mb-3">
             <span>Password <br/>
            <input type="text" class="form-control rounded-4" name="Password" id="Password" />
             </span>
        </div>
        <div class="form-floating mb-3">
             <span>First name<br/>
            <input type="text" class="form-control rounded-4" name="Name" id="Name" >
             </span>
        </div>
        <div class="form-floating mb-3">
            <span>Last name<br/>
            <input type="text" class="form-control rounded-4" name="Last_name" id="Last_name" >
<!--            <label for="Last_name">Last name</label>-->
            </span>
        </div>
        <div class="form-floating mb-3">
            <span>Sex<br/>
            <input type="text" class="form-control rounded-4" name="Sex" id="Sex" placeholder="male/female">
            </span>
        </div>
        <div class="form-floating mb-3">
            <span>Age<br/>
                <input type="number" class="form-control rounded-4" name="Age" id="Age" placeholder="18">
            </span>
        </div>
<!--        <a class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" href="login.php">Submit</a>-->
        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Submit</button>
    </form>
</main>
<?php require '../block/footer.html' ?>
<body>
</html>

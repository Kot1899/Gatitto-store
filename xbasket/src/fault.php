<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>FAULT</title>
</head>
<body>
<style>
    .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 20px;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>

<?php require '../block/header.html' ?>
<main class="modal-body p-5 pt-0">
    <div class="login-css">
        <div >
            <input type="text" class="form-control rounded-4" style="text-align: center"
                   name='fault' id='fault' placeholder="Sorry, you are not registered">
        </div>
    </div>
</main>
<?php require '../block/footer.html' ?>

<body>
</html>
<?php
include_once "header.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?=path?>front/css/login.css">
    <!-- Reference Bootstrap CSS from local files -->
    <link href="path_to_bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Additional custom CSS can be included here -->
    <style>
        /* Custom styles can be added here */
    </style>
</head>
<body>
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="login_con m-auto pb-3 pt-3">
        <h3 class="text-center mb-3">Login</h3>
        <div class="icon text-center">
            <i class="fa-solid fa-user login_icon mb-1"></i>
        </div>
        <p class="text-center">Use your email</p>
        <form method="post" class="login_from d-flex justify-content-center flex-column">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <input type="password" class="rounded-3 form-control mb-2 col-10 col-sm-8" placeholder="Enter your password">
            <a href="#" class="text-center">Forgot password</a>
            <a href="#" class="text-center">Don't have an account</a>
            <input type="submit" class="btn btn-primary rounded-pill">
        </form>
    </div>
</div>

</body>
</html>

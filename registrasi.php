<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "
        <script> 
            alert('user baru telah ditambahkan!');
        </script>
    ";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register | Perpustakaan</title>
</head>
<h1 class="text-center my-3">Register Account</h1>
<div class="container col-lg-5">
    <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <!-- <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email">
        </div> -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-1">
            <label for="password2" class="form-label">Repeat Password</label>
            <input type="password" class="form-control" name="password2" id="password2">
        </div>
        <small>
            <p class="text-center">You have already account?<a href="login.php" class="fw-bold text-decoration-none"> Login now!</a></p>
        </small>
        <button type="submit" class="btn btn-primary mb-3" name="register">Sign Up</button>
    </form>
</div>

<body>
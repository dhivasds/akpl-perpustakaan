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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PERPUSTAKAAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="daftar_buku.php">Daftar Buku</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="d-flex justify-content-end">
        <a href="registrasi.php" class="btn btn-secondary">Register</a>
    </div> -->
    <div class="d-flex justify-content-end">
        <a href="login.php" class="btn btn-success mx-3">Login</a>
    </div>
</nav>

<!-- End Navbar -->

<h1 class="text-center my-3">Register Account</h1>
<div class="container col-lg-5">
    <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" autofocus required>
        </div>
        <!-- <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email">
        </div> -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password2" id="password2" required>
        </div>
        <small>
            <p class="text-center">You have already account?<a href="login.php" class="fw-bold text-decoration-none"> Login now!</a></p>
        </small>
        <button type="submit" class="btn btn-primary mb-3" name="register">Sign Up</button>

    </form>
</div>

<body>
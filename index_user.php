<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <title>Home | E-Libraries</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">E-Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="halaman_user.php">Book List</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="d-flex justify-content-end">
            <a href="registrasi.php" class="btn btn-secondary">Register</a>
        </div>
        <div class="d-flex justify-content-end">
            <a href="login.php" class="btn btn-success mx-3">Login</a>
        </div> -->
        <div class="d-flex justify-content-end">
            <a href="logout.php" class="btn btn-danger mx-3">Logout</a>
        </div>
    </nav>

    <!-- End Navbar -->


    <div class="container py-4">


        <div class="jumbotron" style="background-image: url(img/library.jpg); background-size: 100%; height:400px;  filter: blur(0.4px);">
            <div class="container for-about text-white">
                <br><br>
                <h1 class="text-center fs-1">Welcome back</h1>
                <p class="text-center fs-3">You can do anything, never stop learning</p>
            </div>
        </div>

        <!-- <img src="img/library.jpg" class="img-fluid"> -->


        <div class="row align-items-md-stretch mt-4">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-primary rounded-3">
                    <h2>List Book</h2>
                    <p>Find your favorite book here .</p>
                    <a href="halaman_user.php" class="btn btn-outline-light">Find Books</a>
                    <!-- <button class="btn btn-outline-light" type="button">Find Books</button> -->
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
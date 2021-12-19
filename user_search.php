<?php


require 'functions.php';
$buku_detail = query("SELECT * FROM buku_detail");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $buku_detail = cari($_POST["keyword"]);
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

    <title>Book List | E-Library</title>
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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="user_search.php">Book List</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="registrasi.php" class="btn btn-secondary">Register</a>
        </div>
        <div class="d-flex justify-content-end">
            <a href="login.php" class="btn btn-success mx-3">Login</a>
        </div>
        <!-- <div class="d-flex justify-content-end">
            <a href="logout.php" class="btn btn-danger mx-3">Logout</a>
        </div> -->
    </nav>

    <!-- End Navbar -->

    <h1 class="text-center my-3">Book List</h1>

    <!-- Table -->
    <div class="container">

        <!-- Search -->
        <form class="d-flex" action="" method="post">
            <input type="text" name="keyword" class="form-control me-2" autofocus placeholder="Cari buku...." autocomplete="off" autofocus>
            <button type="submit" class="btn btn-outline-primary" name="cari">Search</button>

        </form>
        <!-- End Search -->

        <table class="table mt-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Gambar</th>
                    <th scope="col" class="text-center">Judul Buku</th>
                    <th scope="col" class="text-center">Penulis</th>
                    <th scope="col" class="text-center">Tahun Terbit</th>
                    <th scope="col" class="text-center">Jenis Buku</th>
                    <th scope="col" class="text-center">Bahasa</th>
                    <th scope="col" class="text-center">Penerbit</th>
                </tr>
            </thead>


            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($buku_detail as $row) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td class="text-center"><img src="img/<?= $row['gambar']; ?>" width="55"></td>
                        <td class="text-center"><?= $row['judul_buku']; ?></td>
                        <td class="text-center"><?= $row['penulis']; ?></td>
                        <td class="text-center"><?= $row['tahun_terbit']; ?></td>
                        <td class="text-center"><?= $row['jenis_buku']; ?></td>
                        <td class="text-center"><?= $row['bahasa']; ?></td>
                        <td class="text-center"><?= $row['penerbit']; ?></td>
                    </tr>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>

                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
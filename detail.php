<?php


require 'functions.php';

// ambil data dari url
$id = $_GET["id"];

$bk_dtl = query("SELECT * FROM buku_detail WHERE id=$id")[0];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">

        <h3 class="text-center"><?= $bk_dtl["judul_buku"]; ?></h3>
        <img src="img/<?= $bk_dtl['gambar']; ?>" class="rounded mx-auto d-block" style="width: 300px;">
        <p class="text-center my-3"><b>Penulis: <?= $bk_dtl['penulis']; ?> | Tahun Terbit: <?= $bk_dtl['tahun_terbit']; ?> | Jenis Buku: <?= $bk_dtl['jenis_buku']; ?> | Bahasa: <?= $bk_dtl['bahasa']; ?> | Penerbit: <?= $bk_dtl['penerbit']; ?></b></p>
        <p class="mt-3"><?= $bk_dtl["isi_buku"]; ?></p>


        <a href="halaman_user.php" class="btn btn-primary">Back to Book List </a>
    </div>
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
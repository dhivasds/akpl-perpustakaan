<?php

require 'functions.php';

// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        // note menampilkan gagal menggunakan javascirpt
        echo "
            <script> 
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script> 
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
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

    <title>Tambah Data Buku | Perpustakaan</title>
</head>

<body>

    <!-- NAVBAR -->

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UBEJ</a>
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="#">Features</a>
                    </div>
                </div>
            </div>
        </div>
    </nav> -->

    <!-- END NAVBAR -->


    <h1 class="text-center my-3">Tambah Data Buku</h1>
    <div class="container">
        <div class="col">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-2">
                    <!-- tambahkan "required" agar jika form kosong lalu di submit, ada keterangan error -->
                    <label class="form-label" for="nama">Judul Buku : </label>
                    <input class="form-control" type="text" name="judul_buku" id="judul_buku" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="nrp">Penulis : </label>
                    <input class="form-control" type="text" name="penulis" id="penulis" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="email">Tahun Terbit : </label>
                    <input class="form-control" type="text" name="tahun_terbit" id="tahun_terbit" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="jurusan">Jenis Buku : </label>
                    <input class="form-control" type="text" name="jenis_buku" id="jenis_buku" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="jurusan">Bahasa : </label>
                    <input class="form-control" type="text" name="bahasa" id="bahasa" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="jurusan">Penerbit : </label>
                    <input class="form-control" type="text" name="penerbit" id="penerbit" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="gambar">Gambar : </label>
                    <input class="form-control" type="file" name="gambar" id="gambar" require>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="submit">Tambah Data!</button>
                </div>

            </form>
            <small>
                <a href="index.php">Kembali ke Daftar Buku</a>
            </small>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
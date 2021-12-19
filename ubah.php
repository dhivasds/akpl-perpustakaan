<?php

require 'functions.php';

// ambil data dari url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id //? karna query sudah ada di functions, maka tinggal kita panggil saja tidak usah buat lagi
$bk_dtl = query("SELECT * FROM buku_detail WHERE id=$id")[0];

// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {


    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        // note menampilkan gagal menggunakan javascirpt
        echo "
            <script> 
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script> 
                alert('data gagal diubah!');
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

    <title>Ubah Data Buku | Perpustakaan</title>
</head>

<body>

    <h1 class="text-center my-3">Ubah Data Buku</h1>
    <div class="container">
        <div class="col">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $bk_dtl["id"]; ?>">
                <div class="mb-2">
                    <!-- tambahkan "required" agar jika form kosong lalu di submit, ada keterangan error -->
                    <label class="form-label" for="nama">Judul Buku : </label>
                    <input class="form-control" type="text" name="judul_buku" id="judul_buku" value="<?= $bk_dtl["judul_buku"]; ?>" required>
                </div>
                <div class="mb-2">
                    <!-- tambahkan "required" agar jika form kosong lalu di submit, ada keterangan error -->
                    <label class="form-label" for="nama">Isi Buku : </label>
                    <!-- <input class="form-control" type="text" name="isi_buku" id="isi_buku" value="<?= $bk_dtl["isi_buku"]; ?>" required> -->
                    <textarea class="form-control" style="height: 150px;" name="isi_buku" id="isi_buku"><?= $bk_dtl["isi_buku"]; ?></textarea>
                </div>
                <div class=" mb-2">
                    <label class="form-label" for="nrp">Penulis : </label>
                    <input class="form-control" type="text" name="penulis" id="penulis" value="<?= $bk_dtl["penulis"]; ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="email">Tahun Terbit : </label>
                    <input class="form-control" type="text" name="tahun_terbit" id="tahun_terbit" value="<?= $bk_dtl["tahun_terbit"]; ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="jurusan">Jenis Buku : </label>
                    <input class="form-control" type="text" name="jenis_buku" id="jenis_buku" value="<?= $bk_dtl["jenis_buku"]; ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="jurusan">Bahasa : </label>
                    <input class="form-control" type="text" name="bahasa" id="bahasa" value="<?= $bk_dtl["bahasa"]; ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="jurusan">Penerbit : </label>
                    <input class="form-control" type="text" name="penerbit" id="penerbit" value="<?= $bk_dtl["penerbit"]; ?>" required>
                </div>
                <div class="mb-2">
                    <label class="form-label" for="gambar">Gambar : </label>
                    <input class="form-control" type="file" name="gambar" id="gambar" value="<?= $bk_dtl["gambar"]; ?>" require>
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
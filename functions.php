<?php

$conn = mysqli_connect("localhost", "root", "", "db_perpustakaan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $jenis_buku = htmlspecialchars($data['jenis_buku']);
    $bahasa = htmlspecialchars($data['bahasa']);
    $penerbit = htmlspecialchars($data['penerbit']);
    // $gambar = htmlspecialchars($data['gambar']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO buku_detail VALUES ('', '$judul_buku', '$penulis', '$tahun_terbit', '$jenis_buku', '$bahasa', '$penerbit', '$gambar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script> 
                alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek apakah yang di upload adalah gambar
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    // fungsi explode untuk memecah menjadi seperti ini dhivas.jpg = ['dhivas', 'jpg']
    $ektensiGambar = explode('.', $namaFile);
    // fungsi "end" agar mengambil format yang paling akhir, fungsi "strtolower" agar semua format jdi kecil ex "JPG" nanti g kebaca
    $ektensiGambar = strtolower(end($ektensiGambar));
    if (!in_array($ektensiGambar, $ektensiGambarValid)) {
        echo "<script> 
                alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukuranny terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script> 
        alert('ukuran gambar terlalu besar!');
      </script>";
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru, agar ketika ada user yang meliki nama file yang sama tidak menimpa nama file images sblmny
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ektensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM buku_detail WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data['id'];
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $jenis_buku = htmlspecialchars($data['jenis_buku']);
    $bahasa = htmlspecialchars($data['bahasa']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE detail_buku SET
            judul_buku = '$judul_buku',
            penulis = '$penulis',
            tahun_terbit = '$tahun_terbit',
            jenis_buku = '$jenis_buku',
            bahasa = '$bahasa',
            penerbit = '$penerbit',
            gambar = '$gambar'
            WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM buku_detail WHERE
    judul_buku LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' OR
    tahun_terbit LIKE '%$keyword%' OR
    bahasa LIKE '%$keyword%' OR
    penerbit LIKE '%$keyword%' ";

    return query($query);
}

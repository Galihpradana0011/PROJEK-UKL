<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id_kategori'];
    $judul=$_POST['nama_kategori'];
    // buat query update
    $result = mysqli_query($host, "UPDATE kategori SET nama_kategori='$judul' WHERE id_kategori=$id");
    header('Location: view-kategori.php');

    $result = mysqli_query($db, $sql);

    if( $result ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view-kategori.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
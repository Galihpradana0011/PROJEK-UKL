<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id_pengajuan'];
    $judul=$_POST['id_user'];
    $pengarang=$_POST['upload_kk'];
    $penerbit=$_POST['upload_ktp'];
    $stok=$_POST['jenis_surat'];

    // buat query update
    $result = mysqli_query($host, "UPDATE pengajuan SET id_user='$judul',upload_kk='$pengarang',upload_ktp='$penerbit', jenis_surat='$stok' WHERE id_pengajuan=$id");
    header('Location: view-user.php');

    $result = mysqli_query($db, $sql);

    if( $result ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view-pengajuan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
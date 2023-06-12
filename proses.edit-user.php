<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id_user'];
    $judul=$_POST['alamat'];
    $pengarang=$_POST['nama'];
    $penerbit=$_POST['no_ktp'];
    $stok=$_POST['email'];
    $no_telp=$_POST['no_telp'];

    // buat query update
    $result = mysqli_query($host, "UPDATE user SET alamat='$judul',nama='$pengarang',no_ktp='$penerbit', email='$stok',no_telp='$no_telp' WHERE id_user=$id");
    header('Location: view-user.php');

    $result = mysqli_query($db, $sql);

    if( $result ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view-user.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
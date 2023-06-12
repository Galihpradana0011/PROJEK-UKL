<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_pengajuan']) ){
    header('Location: view-pengajuan.php');
}

// //ambil id dari query string
// $id = $_GET['id'];

// // buat query untuk ambil data dari database
// // $result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
// $sql = "SELECT * FROM buku WHERE id=$id";
// $query = mysqli_query($mysqli, $sql);
// $siswa = mysqli_fetch_assoc($query);

// // jika data yang di-edit tidak ditemukan
// if( mysqli_num_rows($query) < 1 ){
//     die("data tidak ditemukan...");
// }
$id = $_GET['id_pengajuan'];
 
// Fetech user data based on id
$result = mysqli_query($host, "SELECT * FROM pengajuan WHERE id_pengajuan=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['id_pengajuan'];
    $pengarang = $user_data['id_user'];
    $penerbit = $user_data['upload_kk'];
    $stok=$user_data['upload_ktp'];
    $email = $user_data['jenis_surat'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>tabel pengajuan</title>
</head>

<body>
    <header>
        <h3>pengajuan</h3>
    </header>
    <form method="POST" action="proses.edit-pengajuan.php">
        <table border="0">
            <tr> 
                <td>id pengajuan</td>
                <td><input type="text" name="id_pengajuan" value="<?php echo $judul;?>"></td>
            </tr>
            <tr> 
                <td>id user</td>
                <td><input type="text" name="id_user" value="<?php echo $pengarang;?>"></td>
            </tr>
            <tr> 
                <td>upload ktp</td>
                <td><input type="text" name="upload-Ktp" value="<?php echo $stok;?>"></td>
            </tr>
            <tr> 
                <td>upload kk</td>
                <td><input type="text" name="upload_kk" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr> 
                <td>jenis surat</td>
                <td><input type="text" name="jenis_surat" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_pengajuan'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>


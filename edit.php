<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_user']) ){
    header('Location: view-user.php');
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
$id = $_GET['id_user'];
 
// Fetech user data based on id
$result = mysqli_query($host, "SELECT * FROM user WHERE id_user=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['id_user'];
    $pengarang = $user_data['alamat'];
    $penerbit = $user_data['nama'];
    $stok=$user_data['no_ktp'];
    $email = $user_data['email'];
    $no_telp = $user_data['no_telp'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>tabel user</title>
</head>

<body>
    <header>
        <h3>user</h3>
    </header>
    <form method="POST" action="proses.edit-user.php">
        <table border="0">
            <tr> 
                <td>id_user</td>
                <td><input type="text" name="id_user" value="<?php echo $judul;?>"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $pengarang;?>"></td>
            </tr>
            <tr> 
                <td>no ktp</td>
                <td><input type="text" name="no_ktp" value="<?php echo $stok;?>"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr> 
                <td>email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>no telp</td>
                <td><input type="text" name="no_telp" value=<?php echo $no_telp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_user'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>


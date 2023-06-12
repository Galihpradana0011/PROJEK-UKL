<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_kategori']) ){
    header('Location: view-kategori.php');
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
$id = $_GET['id_kategori'];
 
// Fetech user data based on id
$result = mysqli_query($host, "SELECT * FROM kategori WHERE id_kategori=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['id_kategori'];
    $pengarang = $user_data['nama_kategori'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>tabel kategori</title>
</head>

<body>
    <header>
        <h3>kategori</h3>
    </header>
    <form method="POST" action="proses.edit-kategori.php">
        <table border="0">
            <tr> 
                <td>id kategori</td>
                <td><input type="text" name="id_kategori" value="<?php echo $judul;?>"></td>
            </tr>
            <tr> 
                <td>nama kategori</td>
                <td><input type="text" name="nama_kategori" value="<?php echo $pengarang;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id_kategori'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>
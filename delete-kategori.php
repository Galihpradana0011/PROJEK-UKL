<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id_kategori'];
 
// Delete user row from table based on given id
$result = mysqli_query($host, "DELETE FROM kategori WHERE id_kategori=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.

header("location: view-kategori.php");
?>

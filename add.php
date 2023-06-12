<html>
    
    <head>
    <h1>Create Data Baru</h1>
    </head>

    <body>
        <h3>user</h3>
	    <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>id user</td>
                    <td><input type="text" name="id_user"></td>
                </tr>
                <tr> 
                    <td>alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr> 
                    <td>nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr> 
                    <td>no_ktp</td>
                    <td><input type="text" name="no_ktp"></td>
                </tr>
               
                <tr> 
                    <td>email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr> 
                    <td>no telp</td>
                    <td><input type="text" name="no_telp"></td>
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $judul= $_POST['id_user'];
        $pengarang = $_POST['alamat'];
        $penerbit = $_POST['nama'];
        $stok= $_POST['no_ktp'];
        $email= $_POST['email'];
        $notelp= $_POST['no_telp'];
        echo($judul);
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, 
        "INSERT INTO user(id_user,alamat,nama,no_ktp,email,no_telp) 
        VALUES('$judul','$pengarang','$penerbit','$stok','$email','$notelp')");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:view-user.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>


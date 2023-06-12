<html>
    
    <head>
    <h1>Create Data Baru</h1>
    </head>

    <body>
        
        <h3>kategori pengajuan</h3>
	    <form action="add-pengajuan.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>id pengajuan</td>
                    <td><input type="text" name="id_pengajuan"></td>
                </tr> 
                <tr> 
                    <td>id user</td>
                    <td><input type="text" name="id_user"></td>
                </tr>
                <tr> 
                    <td>upload ktp</td>
                    <td><input type="text" name="upload_ktp"></td>
                </tr>
                <tr> 
                    <td>upload kk</td>
                    <td><input type="text" name="upload_kk"></td>
                </tr>
                <tr> 
                    <td>jenis surat</td>
                    <td><input type="text" name="jenis_surat"></td>
                </tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add-pengajuan"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $judul= $_POST['id_pengajuan'];
        $pengarang = $_POST['id_user'];
        $uploadktp = $_POST['upload_ktp'];
        $uploadkk = $_POST['upload_kk'];
        $jenissurat = $_POST['jenis_surat'];
        echo ($judul);
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, 
        "INSERT INTO pengajuan(id_pengajuan,id_user) 
        VALUES('$judul','$pengarang','$uploadktp','$uploadkk'$jenissurat)");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:view-pengajuan.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>


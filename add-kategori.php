<html>
    
    <head>
    <h1>Create Data Baru</h1>
    </head>

    <body>
        <h3>kategori surat</h3>
	    <form action="add-kategori.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>id kategori</td>
                    <td><input type="text" name="id_kategori"></td>
                </tr> 
                <tr> 
                    <td>nama kaegori</td>
                    <td><input type="text" name="nama_kategori"></td>
                </tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add-kategori"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $judul= $_POST['id_kategori'];
        $pengarang = $_POST['nama_kategori'];
        echo($judul);
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, 
        "INSERT INTO kategori(id_kategori,nama_kategori) 
        VALUES('$judul','$pengarang')");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:view-kategori.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>


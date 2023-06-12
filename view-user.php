<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="navbar-style.css">
    <head>
	<ul>
	  
    </ul>
    </head>
    
    <body>
	<nav class="navbar">
        <a href="#" class="navbar-logo">Village Admin.</a>
        <div class="navbar-nav">
            <a href="view-kategori.php">kategori</a>
            <a href="view-pengajuan.php">pengajuan</a>
            <a href="home.php">home</a>
        </div>

        <div class="navbar-extra">
           
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <section class="hero" id="home">
        <main class="content">
        </main>
    </section>
	
        <h3>user</h3>
		<button><a href="add.php">Add New User</a><br/><br/></button>
		
	    <table border="1" class="table_user">
		    <tr>
    			<th>nomor</th>
    			<th>alamat</th>
    			<th>nama</th>
    			<th>no_ktp</th>
    			<th>email</th>
				<th>no_telp</th>		
		    </tr>           
        <?php 
        //Select Tabel Buku dari database
            include "koneksi.php";
		    $query_mysql = mysqli_query($host,"SELECT * FROM user")or die(mysqli_error());
		    $nomor = 1;
		    while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
    			<td><?php echo $nomor++; ?></td>
    			<td><?php echo $data['alamat']; ?></td>
    			<td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['no_ktp']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['no_telp']; ?></td>
				<td><a href='edit.php?id_user=<?php echo $data['id_user'];?>'>Edit</a>
					<a href='delete.php?id_user=<?php echo $data['id_user'];?>'>Delete</a>
				</td>
            </tr>
            <?php } ?>
            
        </table>
                
    </body>
</html>
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
            <a href="home.php">home</a>
            <a href="view-pengajuan.php">pengajuan</a>
            <a href="view-user.php">user</a>
        </div>

        <div class="navbar-extra">
           
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
	
    <section class="hero" id="home">
        <main class="content">
        </main>
    </section>
	
        <h3>kategori</h3>
		<button class="btn"><a href="add-kategori.php" >Add New kategori</a><br/><br/></button>
		
	    <table border="1" class="table">
		    <tr>
			<th>id_kategori</th>
    			<th>nama_kategori</th>	
		    </tr>           
        <?php 
        //Select Tabel Buku dari database
            include "koneksi.php";
		    $query_mysql = mysqli_query($host,"SELECT * FROM kategori")or die(mysqli_error());
		    $nomor = 1;
		    while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
    			<td><?php echo $nomor++; ?></td>
    			<td><?php echo $data['nama_kategori']; ?></td>
				<td><a href='edit-kategori.php?id_kategori=<?php echo $data['id_kategori'];?>'>Edit</a>
					<a href='delete-kategori.php?id_kategori=<?php echo $data['id_kategori'];?>'>Delete</a>
				</td>
            </tr>
            <?php } ?>
            
        </table>

    </body>
</html>
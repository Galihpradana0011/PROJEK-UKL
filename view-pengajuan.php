<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="navbar-style.css">
    <head>
<title>hhhhh</title>
    </head>
    
    <body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Village Admin.</a>
        <div class="navbar-nav">
            <a href="view-kategori.php">kategori</a>
            <a href="home.php">home</a>
            <a href="view-user.php">user</a>
        </div>

        <div class="navbar-extra">
           
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <section class="hero" id="home">
        <main class="content"></main>
    </section>


        <h3>pengajuan</h3>
		<button><a href="add-pengajuan.php">Add New pengajuan</a><br/><br/></button>
		
	    <table border="1" class="table_pengajuan">
		    <tr>
    			<th>id pengajuan</th>
                <th>id user</th>
                <th>upload ktp</th>
                <th>upload kk</th>
    			<th>jenis surat</th>		
		    </tr>           
        <?php 
        //Select Tabel Buku dari database
            include "koneksi.php";
		    $query_mysql = mysqli_query($host,"SELECT p.nama, b.jenis_surat
            FROM pengajuan AS b, user AS p
            WHERE p.id_user =  b.id_user ")or die(mysqli_error());
		    $nomor = 1;
		    while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
    			<td><?php echo $nomor++; ?></td>
    			<td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['upload_ktp']; ?></td>
                <td><?php echo $data['upload_kk']; ?></td>
    			<td><?php echo $data['jenis_surat']; ?></td>
				<td><a href='edit-pengajuan.php?<?php echo $data?>'>Edit</a>
					<a href='delete-pengajuan.php?<?php echo $data?>'>Delete</a>
				</td>
            </tr>
            <?php } ?>
            
        </table>

    </body>
</html>
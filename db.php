<h3>

<table border="1">
    <tr>
        <th>id_user</th>
        <th>alamat</th>
        <th>nama</th>
        <th>no_ktp</th>
        <th>email</th>
        <th>no_telp</th>
    </tr>

    <?php 
    include "index.php";
    $no=1;
    $ambildata = mysqli_query($host, "Select * From user");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            
            <td>$tampil[id_user]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_ktp]</td>
            <td>$tampil[email]</td>
            <td>$tampil[no_telp]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
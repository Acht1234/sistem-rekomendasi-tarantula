<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Daftar Tarantula Sireta</h2>
        <button onclick= "location.href='tambah_tartul.php'">Tambah Data</button><br><br>
        <table class="table2" >
            <tr height="50px" > 
                <th class="col-md-1">id</th>
                <th class="col-md-2">nama spesies</th>
                <th class="col-md-2" >foto</th>
                <th class="col-md-1">warna</th>
                <th class="col-md-2">generasi</th>
                <th class="col-md-1">kecepatan gerak</th>
                <th class="col-md-1">tingkat racun</th>
                <th class="col-md-1">umur maksimal (th)</th>
                <th class="col-md-1">panjang maksimal (cm)</th>
                <th class="col-md-1">pemeli<br>hara</th>
                <th class="col-md-1" >sifat</th>
                <th class="col-md-1" style="text-align:center;">Opsi</th>
            </tr>
            <?php 
                $tartul=mysqli_query($koneksi,"select * from tarantula ");
            while($t=mysqli_fetch_array($tartul)){

            ?>
                <tr class="baris1" height="100px">
                    <td><?php echo $t['id_tartul'] ?></td>
                    <td><?php echo $t['nama_spesies'] ?></td>
                    <td><img class="tartul1" src="../image/tartul/<?php echo $t['foto']?>"></td>
                    <td><?php echo $t['warna']?></td>
                    <td><?php echo $t['generasi'] ?></td>
                    <td><?php echo $t['kecepatan'] ?></td>
                    <td><?php echo $t['racun'] ?></td>
                    <td><?php echo $t['umur'] ?></td>
                    <td><?php echo $t['panjang'] ?></td>
                    <td><?php echo $t['pemelihara'] ?></td>
                    <td align="center"><?php echo $t['sifat'] ?></td>
                    <td>
                        <a href="edit_tartul.php?id_tartul=<?php echo $t['id_tartul']; ?>" class="btn1">Edit</a>
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='../function/hapus_tartul.php?id_tartul=<?php echo $t['id_tartul']; ?>' }" class="btn2">Hapus</a>
                    </td>
                </tr> 
                <?php } ?>
                <tr>
               
                </tr>
        </table>	
        <br><br><br><br><br><br>	
    </div>
                
<?php include 'footer.php';?>
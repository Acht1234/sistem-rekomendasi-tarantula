<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Daftar Pengguna Sireta</h2>
        <button onclick= "location.href='tambah_user.php'">Tambah Data</button><br><br>
        <table class="table1" >
            <tr height="50px">
                <th class="col-md-1">id</th>
                <th class="col-md-2">nama</th>
                <th class="col-md-2">Username</th>
                <th class="col-md-2">password</th>
                <th class="col-md-2">level</th>
                <th class="col-md-2">kota asal</th>
                <th class="col-md-2">pemelihara</th>
                <th class="col-md-3">Opsi</th>
            </tr>
            <?php 
                $user=mysqli_query($koneksi,"select * from user where level ='User' ");
            while($u=mysqli_fetch_array($user)){

            ?>
                <tr class="baris1" height="100px">
                    <td><?php echo $u['id_user'] ?></td>
                    <td><?php echo $u['nama'] ?></td>
                    <td><?php echo $u['username']?></td>
                    <td><?php echo $u['password']?></td>
                    <td><?php echo $u['level'] ?></td>
                    <td><?php echo $u['kota']?></td>
                    <td><?php echo $u['jenis_pemelihara']?></td>
                    
                    
                    <td>
                        <a href="edit_pengguna.php?id_user=<?php echo $u['id_user']; ?>" class="btn1">Edit</a>
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='../function/hapus_user.php?id_user=<?php echo $u['id_user']; ?>' }" class="btn2">Hapus</a>
                    </td>
                </tr> 
                <?php } ?>
                <tr>
               
                </tr>
        </table>
        <br><br><br><br><br><br>		
    </div>
                
<?php include 'footer.php';?>
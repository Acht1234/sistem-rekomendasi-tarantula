<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Daftar komentar Forum</h2>
        <br><br>
        <table class="table1" >
            <tr height="50px">
                <th class="col-md-3">id komentar</th>
                <th class="col-md-3">id user</th>
                <th class="col-md-3">nama</th>
                <th class="col-md-3">komentar</th>
                <th class="col-md-3">id tarantula</th>
                <th class="col-md-3">tanggal komentar</th>
               
                <th class="col-md-3">Opsi</th>
            </tr>
            <?php 
                $komen=mysqli_query($koneksi,"select * from komentar");
                
            while($k=mysqli_fetch_array($komen)){
                $commant = $k['komentar'];
                $wrap_komen = wordwrap($commant, 70, "\n", TRUE);
            ?>
                <tr class="baris1" height="100px">
                    <td class="col-md-3"><?php echo $k['id_komen'] ?></td>
                    <td class="col-md-3"><?php echo $k['id_user'] ?></td>
                    <td><?php echo $k['nama']?></td>
                    <td class="col-md-3"><?php echo $wrap_komen?></td>
                    <td class="col-md-3"><?php echo $k['id_tartul'] ?></td>
                    <td><?php echo $k['tanggal']?></td>
                    
                    
                    <td>
                        
                        <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='../function/hapus_komen.php?id_komen=<?php echo $k['id_komen']; ?>' }" class="btn2">Hapus</a>
                    </td>
                </tr> 
                <?php } ?>
                <tr>
               
                </tr>
        </table>
        <br><br><br><br><br><br>		
    </div>
                
<?php include 'footer.php';?>
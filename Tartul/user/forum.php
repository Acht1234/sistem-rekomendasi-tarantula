<?php include 'header.php'; ?>
	<div class="kanan2">
		<h2 >Forum Review Sireta</h2><br><br>
        <table class="table1" >
            <tr height="50px"> 
                <th class="col-md-1">No</th>
                <th class="col-md-5">Nama Tarantula</th>
                
                <th class="col-md-1">Opsi</th>
            </tr>
            <?php 
            $i=0;
                $user=mysqli_query($koneksi,"select * from tarantula order by nama_spesies asc");
            while($u=mysqli_fetch_array($user)){
                
                $i++;
            ?>
                <tr class="baris1" height="100px">
                    <td><?php echo $i ?></td>
                    <td><?php echo $u['nama_spesies'] ?></td>
                   
                    <td>
                        <a href="Detail.php?id_tartul=<?php echo $u['id_tartul']; ?>" class="btn2">Detail</a>
                        
                    </td>
                </tr> 
                <?php } ?>
                <tr>
               
                </tr>
        </table>
        
       
        <br><br><br><br><br><br>
        	
    </div>
                
<?php include 'footer.php';?>
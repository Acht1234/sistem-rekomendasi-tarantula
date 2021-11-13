<?php include 'header.php'; 

?>
	<div class="kanan2">
		<h2 >Hasil Rekomendasi</h2><br><br>
        <table class="table1" >
            <tr height="50px"> 
                <th class="col-md-1">No</th>
                <th class="col-md-2" >foto</th>
                <th class="col-md-5">Nama Tarantula</th>
                
                <th class="col-md-1">Opsi</th>
            </tr>
            <?php 
                include '../function/koneksi.php';
                $panjang=$_SESSION['panjang'];
                $umur=$_SESSION['umur'];
                if (empty($panjang) && empty($umur) ) { 
                    $tartul = " SELECT tarantula.id_tartul, tarantula.foto, tarantula.panjang, tarantula.umur, tarantula.nama_spesies, hitung.hasil
                    FROM tarantula INNER JOIN hitung on tarantula.id_tartul = hitung.id_tartul WHERE hitung.hasil = '1' ";
                } elseif (!empty($panjang) && empty($umur) ) { 
                    $tartul = " SELECT tarantula.id_tartul, tarantula.foto, tarantula.panjang, tarantula.umur, tarantula.nama_spesies, hitung.hasil
                    FROM tarantula INNER JOIN hitung on tarantula.id_tartul = hitung.id_tartul WHERE hitung.hasil = '1' ORDER BY tarantula.panjang DESC, tarantula.umur DESC ";
                } elseif (empty($panjang) && !empty($umur) ) { 
                    $tartul = " SELECT tarantula.id_tartul, tarantula.foto, tarantula.panjang, tarantula.umur, tarantula.nama_spesies, hitung.hasil
                    FROM tarantula INNER JOIN hitung on tarantula.id_tartul = hitung.id_tartul WHERE hitung.hasil = '1' ORDER BY tarantula.umur DESC,tarantula.panjang DESC ";
                } else {
                    $tartul = " SELECT tarantula.id_tartul, tarantula.foto, tarantula.panjang, tarantula.umur, tarantula.nama_spesies, hitung.hasil
                    FROM tarantula INNER JOIN hitung on tarantula.id_tartul = hitung.id_tartul WHERE hitung.hasil = '1' ORDER BY tarantula.panjang DESC, tarantula.umur DESC ";
                }
                
                
            ?>
            <?php 
            $i=0;
                $Tarantula=mysqli_query($koneksi,$tartul);
            while($T=mysqli_fetch_array($Tarantula)){
                
                $i++;
            ?>
                <tr class="baris1" height="100px">
                    <td><?php echo $i ?></td>
                    <td><img class="tartul1" src="../image/tartul/<?php echo $T['foto']?>"></td>
                    <td><?php echo $T['nama_spesies'] ?></td>
                   
                    <td>
                        <a href="Detail.php?id_tartul=<?php echo $T['id_tartul']; ?>" class="btn2">Detail</a>
                        
                    </td>
                </tr> 
                <?php } ?>
                <tr>
               
                </tr>
        </table>
        
       
        <br><br><br><br><br><br>
        	
    </div>
                
<?php include 'footer.php';?>
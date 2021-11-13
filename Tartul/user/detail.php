<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Forum Review Sireta</h2>
        <?php
            $id_tartul=mysqli_real_escape_string($koneksi,$_GET['id_tartul']);
            $aaa=mysqli_query($koneksi,"select * from tarantula where id_tartul='$id_tartul'")or die(mysqli_error());
            
            while($a=mysqli_fetch_array($aaa)){
              
        ?>
        <form  enctype="multipart/form-data" style="padding : 5px;">
            <table class="tableforum">
                <tr>
                    <th colspan="2" class="tartulimg"><img  class="tartul2" src="../image/tartul/<?php echo $a['foto']?>">
                    <br> <a>(sumber foto : <?php echo $a['src_foto'] ?> )<a>
                    <th>
                    
                </tr>
                
                <tr height="50px"> 
                    <td class="tartulleft">nama spesies</td>
                    <td class="tartulleft1"><?php echo $a['nama_spesies'] ?></td>
                </tr>
                
                <tr height="50px"> 
                    <td class="tartulleft">warna</td>
                    <td  class="tartulleft1"><?php echo $a['warna'] ?></td>
                </tr>
                <tr height="50px"> 
                    <td class="tartulleft">generasi</td>
                    <td  class="tartulleft1"><?php echo $a['generasi'] ?></td>
                </tr>
                <tr height="50px"> 
                    <td class="tartulleft">kecepatan gerak</td>
                    <td  class="tartulleft1"><?php echo $a['kecepatan'] ?></td>
                </tr>
                <tr height="50px"> 
                    <td class="tartulleft">tingkat racun</td>
                    <td  class="tartulleft1"><?php echo $a['racun'] ?></td>
                </tr>
                <tr height="50px"> 
                    <td class="tartulleft">panjang max</td>
                    <td  class="tartulleft1"><?php echo $a['panjang'] ?> cm</td>
                </tr>
                <tr height="50px"> 
                    <td class="tartulleft">umur max</td>
                    <td class="tartulleft1"><?php echo $a['umur'] ?> tahun</td>
                </tr>
               
                <tr height="50px"> 
                    <td class="tartulleft">pemelihara</td>
                    <td class="tartulleft1"><?php echo $a['pemelihara'] ?></td>
                </tr>
                <tr height="50px"> 
                    <td class="tartulleft">sifat</td>
                    <td class="tartulleft1"><?php echo $a['sifat'] ?></td>
                </tr>
            </table>
        </form>	
        <form method="POST" action="../function/tbh_komentar_user.php" style="padding : 5px;">
            <table class="komentar">
            <tr > 
   
                    <td><input type="hidden"  name="id_tartul" value="<?php echo $a['id_tartul'] ?>" readonly>
                    
                        <?php 
                        }
                        
                        $user=mysqli_query($koneksi,"select * from user where username ='$username' ");
                        while($u=mysqli_fetch_array($user)){
                        ?>
                        <input type="hidden"  name="id_user" value="<?php echo $u['id_user'] ?>" readonly>
                        <input type="hidden"  name="nama" value="<?php echo $u['nama'] ?>" readonly>
                    </td>
                    <?php 
                    }
                    ?>  
                </tr>   
            <tr > 
                    <td class="komen1"><input type="textarea" placeholder="komentar...." name="komentar" required></td>
                    <td class="komen"><input type="submit" value="Komentar" ></td>
                </tr>
                
            </table>
        </form>	

        

        <table class="tablekomen" >
        <a>Daftar Komentar</a> <br><br><br>
            <?php 
                $komentar=mysqli_query($koneksi,"select * from komentar where id_tartul ='$id_tartul' ");
            while($k=mysqli_fetch_array($komentar)){
                $komen = $k['komentar'];
                $wrap_komen = wordwrap($komen, 90, "\n", TRUE);
            ?>
                <tr  class="komen1"> 
                    <th width="30%"><?php echo $k['nama'] ?></th>
                    <th width="70%"><?php echo $k['tanggal'] ?></th>  
                    
                </tr>
            
                <tr class="komen2" width="100%" >
                    <td colspan="2"><?php echo $wrap_komen ?></td>
                </tr> 
               
            <?php } ?>
                <tr>
               
                </tr>
        </table>	
    <br><br><br><br><br><br>	
    </div>
    
                    
<?php include 'footer.php';?>
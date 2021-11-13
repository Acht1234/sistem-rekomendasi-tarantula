<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Update Tarantula</h2>
        <?php
            $id_tartul=mysqli_real_escape_string($koneksi,$_GET['id_tartul']);
            $aaa=mysqli_query($koneksi,"select * from tarantula where id_tartul='$id_tartul'")or die(mysqli_error());
            
            while($a=mysqli_fetch_array($aaa)){
                $pemelihara=$a['pemelihara'];
                $racun=$a['racun'];
                $generasi=$a['generasi'];
                $kecepatan=$a['kecepatan'];
                $sifat=$a['sifat'];
        ?>
        <form method="POST" action="../function/update_tartul.php" enctype="multipart/form-data" style="padding : 5px;">
            <table class="table1">
                <tr height="75px"> 
                    <td class="col-md-1">Id tarantula</td>
                    <td><input type="text" placeholder="id user" name="id_tartul" value="<?php echo $a['id_tartul'] ?>" readonly></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">nama spesies</td>
                    <td><input type="text" placeholder="nama spesies" name="nama_spesies" value="<?php echo $a['nama_spesies'] ?>" require></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">foto</td>
                    <td><input type="file" name="foto"  require></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">sumber foto</td>
                    <td><input type="text" placeholder="sumber foto" name="src_foto" value="<?php echo $a['src_foto'] ?>" require></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">warna</td>
                    <td><input type="text" placeholder="warna" name="warna" value="<?php echo $a['warna'] ?>" require></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">generasi</td>
                    <td><select name="generasi" required>
                            <option value="new world"
                            <?php if ($generasi =='new world') {echo"selected";}?>
                            >new world</option>
                            <option value="old world" 
                            <?php if ($racun =='old world') {echo"selected";}?>
                            >old world</option>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">kecepatan gerak</td>
                    <td><select name="kecepatan" required>
                            <option value="lambat"
                            <?php if ($kecepatan =='lambat') {echo"selected";}?>
                            >lambat</option>
                            <option value="cepat" 
                            <?php if ($kecepatan =='cepat') {echo"selected";}?>
                            >cepat</option>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">tingkat racun</td>
                    <td><select name="racun" required>
                            <option value="rendah"
                            <?php if ($racun =='rendah') {echo"selected";}?>
                            >rendah</option>
                            <option value="tinggi" 
                            <?php if ($racun =='tinggi') {echo"selected";}?>
                            >tinggi</option>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">panjang</td>
                    <td><input type="text" placeholder="panjang" name="panjang" value="<?php echo $a['panjang'] ?>" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">umur</td>
                    <td><input type="text" placeholder="umur" name="umur" value="<?php echo $a['umur'] ?>" required></td>
                </tr>
               
                <tr height="75px"> 
                    <td class="col-md-1">Level</td>
                    <td ><select name="pemelihara" required>
                            <option value="pemula"
                            <?php if ($pemelihara =='pemula') {echo"selected";}?>
                            >pemula/beginner</option>
                            <option value="ahli" 
                            <?php if ($pemelihara =='ahli') {echo"selected";}?>
                            >ahli/expert</option>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">sifat</td>
                    <td><select name="sifat" required>
                            <option value="kalem"
                            <?php if ($sifat =='kalem') {echo"selected";}?>
                            >kalem</option>
                            <option value="defensif" 
                            <?php if ($sifat =='defensif') {echo"selected";}?>
                            >defensif</option>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td><input type="submit" value="Update Data" ></td>
                </tr>
            </table>
        </form>	
        
    <br><br><br><br><br><br>	
    </div>
    
        <?php 
        }
        ?>               
<?php include 'footer.php';?>
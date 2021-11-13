<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Tambah Tarantula</h2>
        <form method="POST" action="../function/tbh_tartul.php" enctype="multipart/form-data" style="padding : 5px;">
            <table class="table1">
                <tr height="75px"> 
                    <td class="col-md-1">Nama tarantula</td>
                    <td><input type="text" placeholder="Nama spesies" name="nama_spesies" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">foto</td>
                    <td><input type="file" placeholder="foto" name="foto" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">sumber foto</td>
                    <td><input type="text" placeholder="sumber foto" name="src_foto" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">warna</td>
                    <td><input type="text" placeholder="warna" name="warna" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">generasi</td>
                    <td><select name="generasi" required>
                            <option value=""></option>
                            <option value="new world">new world</option>
                            <option value="old world">old world</option>
                        </select></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">kecepatan gerak</td>
                    <td><select name="kecepatan" required>
                            <option value=""></option>
                            <option value="lambat">lambat</option>
                            <option value="cepat">cepat</option>
                        </select></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">tingkat racun</td>
                    <td><select name="racun" required>
                            <option value=""></option>
                            <option value="rendah">rendah</option>
                            <option value="tinggi">tinggi</option>
                        </select></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">umur maksimal (th)</td>
                    <td><input type="text" placeholder="umur maksimal" name="umur" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">panjang maksimal (cm)</td>
                    <td><input type="text" placeholder="panjang maksimal" name="panjang" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">tingkat pemelihara</td>
                    <td><select name="pemelihara" required>
                            <option value=""></option>
                            <option value="pemula">pemula/beginner</option>
                            <option value="ahli">ahli/expert</option>
                        </select></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">sifat</td>
                    <td><select name="sifat" required>
                            <option value=""></option>
                            <option value="kalem">kalem</option>
                            <option value="defensif">defensif</option>
                        </select></td>
                </tr>
                <tr height="75px"> 
                    <td><input type="submit" value="Tambah Data" ></td>
                </tr>
            </table>
        </form>		
        <br><br><br>
    </div>
                
<?php include 'footer.php';?>
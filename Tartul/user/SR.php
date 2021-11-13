<?php include 'header.php'; ?>
<?php


if (isset($_POST['cek_submit'])) { // jika ada post submit maka user telah mengadakan pencarian
	// cek jika user belum melakukan pengisian
	if (empty($_POST['pemelihara']) && empty($_POST['warna']) && empty($_POST['panjang'])
		&& empty($_POST['umur'])  && empty($_POST['sifat']) ) { // jika ada post submit maka user telah mengadakan pencarian
	// jika user belum melakukan pengisian
	 	echo "<script>alert('Data pencarian belum diisi');document.location='SR.php'</script>"; 
	// user telah melakukan pengisian
	} else {
		$error = array();
			
		if (empty($error)){
			session_start();
			if (!empty($_POST['pemelihara'])) {$_SESSION["pemelihara"] = $_POST['pemelihara'];} else {$_SESSION["pemelihara"] ="";};
			if (!empty($_POST['warna'])) {$_SESSION["warna"] = $_POST['warna'];} else {$_SESSION["warna"] ="";};			
			if (!empty($_POST['panjang'])) {$_SESSION['panjang'] = $_POST['panjang'];} else {$_SESSION['panjang'] ="";};
            if (!empty($_POST['umur'])) {$_SESSION['umur'] = $_POST['umur'];} else {$_SESSION['umur'] ="";};
            if (!empty($_POST['sifat'])) {$_SESSION['sifat'] = $_POST['sifat'];} else {$_SESSION['sifat'] ="";};
			header('location:../function/rekomendasi.php');
		} 
	};	
}

?>

	<div class="kanan2">
				
		<h2 >Sistem Rekomendasi</h2>
        <?php
          
            $aaa=mysqli_query($koneksi,"select * from user where username ='$username'")or die(mysqli_error());
            
            while($a=mysqli_fetch_array($aaa)){
                $level=$a['level'];
                $pemelihara=$a['jenis_pemelihara'];
        ?>
        <form method="post"  style="padding : 5px;">
            <table class="table1">
                <tr>
                    <td bgcolor="#FBFBFB">&nbsp;</td>
                    <td bgcolor="#FBFBFB">&nbsp;
                        <input type="hidden" name="cek_submit" value="submit">  
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Jenis pemelihara</td>
                    <td><input type="text" placeholder="gol pemelihara" name="pemelihara" value="<?php echo $a['jenis_pemelihara'] ?>" readonly><br>
                    <a style="color:red;">otomatis terisi berdasarkan profil pengguna</a></td>
                </tr>
            <?php 
            }
            ?> 
                <tr height="75px"> 
                    <td class="col-md-1">sifat pemelihara</td>
                    <td ><select name="sifat" >
                            <option value="">---</option>
                            <option value="kalem">santai</option>
                            <option value="defensif">suka tantangan</option>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">warna</td>
                    
                    <td ><select name="warna" >
                            <option value="">---</option>
                    <?php
                    
                        $warna=mysqli_query($koneksi,"select * from tarantula")or die(mysqli_error());
                        while($data=mysqli_fetch_array($warna)){
                          echo "<option value=$data[warna]>$data[warna]</option>";
                         }
                     ?>
                        </select>
                    </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">panjang maksimal<br>lebih dari</td>
                    <td><input type="text" placeholder="panjang maksimal(cm)" name="panjang"></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Umur maksimal<br>lebih dari</td>
                    <td><input type="text" placeholder="umur maksimal(th)" name="umur"></td>
                </tr>
              
                
                <tr height="75px"> 
                    <td><input type="submit" value="Cari" ></td>
                </tr>
            </table>
        </form>		
    </div>
                      
<?php include 'footer.php';?>
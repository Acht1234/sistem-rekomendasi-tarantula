<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Update Admin Sireta</h2>
        <?php
            $id_user=mysqli_real_escape_string($koneksi,$_GET['id_user']);
            $aaa=mysqli_query($koneksi,"select * from user where id_user='$id_user'")or die(mysqli_error());
            
            while($a=mysqli_fetch_array($aaa)){
                $level=$a['level'];
                $pemelihara=$a['jenis_pemelihara'];
        ?>
        <form method="POST" action="../function/update_admin.php" style="padding : 5px;">
            <table class="table1">
            <tr height="75px"> 
                    <td class="col-md-1">Id</td>
                    <td><input type="text" placeholder="id user" name="id_user" value="<?php echo $a['id_user'] ?>" readonly></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Nama</td>
                    <td><input type="text" placeholder="Nama" name="nama" value="<?php echo $a['nama'] ?>" readonly></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Username</td>
                    <td><input type="text" placeholder="username" name="username" value="<?php echo $a['username'] ?>" readonly></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Password</td>
                    <td><input type="password" placeholder="password" name="password" value="<?php echo $a['password'] ?>" readonly></td>
                </tr>
               
                <tr height="75px"> 
                    <td class="col-md-1">Level</td>
                    <td ><select name="level" required>
                            <option value="Admin"
                            <?php if ($level =='Admin') {echo"selected";}?>
                            >Admin</option>
                            <option value="User" 
                            <?php if ($level =='User') {echo"selected";}?>
                            >User</option>
                        </select>
                        </td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Kota Asal</td>
                    <td><input type="text" placeholder="kota asal" name="kota" value="<?php echo $a['kota'] ?>"></td>
                </tr>
                
                <tr height="75px"> 
                    <td class="col-md-1">Jenis Pemelihara</td>
                    <td ><select name="pemelihara" >
                            <option value=""
                            <?php if ($pemelihara =='') {echo"selected";}?>
                            >---</option>
                            <option value="ahli"
                            <?php if ($pemelihara =='ahli') {echo"selected";}?>
                            >ahli</option>
                            <option value="pemula" 
                            <?php if ($pemelihara =='pemula') {echo"selected";}?>
                            >pemula</option>
                        </select>
                        </td>
                </tr>

                <tr height="75px"> 
                    <td><input type="submit" value="Update Data" ></td>
                </tr>
            </table>
        </form>		
    </div>
        <?php 
        }
        ?>               
<?php include 'footer.php';?>
<?php include 'header.php'; ?>
	<div class="kanan2">
				
		<h2 >Tambah Pengguna Sireta</h2>
        <form method="POST" action="../function/tbh_user.php" style="padding : 5px;">
            <table class="table1">
                <tr height="75px"> 
                    <td class="col-md-1">Nama</td>
                    <td><input type="text" placeholder="Nama" name="nama" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Username</td>
                    <td><input type="text" placeholder="username" name="username" required></td>
                </tr>
                <tr height="75px"> 
                    <td class="col-md-1">Password</td>
                    <td><input type="text" placeholder="password" name="password" required></td>
                </tr>
                <tr height="75px"> 
                    <td><input type="submit" value="Tambah Data" ></td>
                </tr>
            </table>
        </form>		
    </div>
                
<?php include 'footer.php';?>
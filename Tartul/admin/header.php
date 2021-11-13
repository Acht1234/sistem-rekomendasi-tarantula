<html>
<head>
	<title>Sistem Rekomendasi Tarantula</title>

	<link rel="stylesheet" type="text/css" href="../css/tartul.css">

</head>
<body>
	<?php 
		session_start();
		include '../function/koneksi.php';
	
		$username = $_SESSION['username'];
	?>
	<?php 
        $user=mysqli_query($koneksi,"select * from user where username ='$username' ");
    	while($u=mysqli_fetch_array($user)){

    ?>
        <div class="topnav">
		  <a><img class="tulisan" src="../image/based/sireta.png"></a>
		  <div class="login-container">
	
                <a>Halo <b><?php echo $u['nama']; ?></b>.</a>
			
		  </div>
		</div>
	<?php } ?>
	
		<div class="container" style="margin:8% auto;">

				<div class="kiri2">
				
                   <div >
				   <table border="5" width="300px" height="200px" style="text-align :center; border: none;border-collapse: collapse;">
				   
				   <tr><td class="logokiri">
					   <img class="logo" src="../image/based/logo.png" onclick= "location.href='admin.php'">
				   </td></tr>  
				 
					</table>	
                   <table border="5" width="300px" height="200px" style="text-align :center; border: 5px solid #e67300;"> 
				   <tr><td>
				   		<button onclick= "location.href='Profil_Admin.php'">Profil</button>
						<button onclick= "location.href='DAdmin.php'">Daftar Admin</button>
						<button onclick= "location.href='DUser.php'">Daftar User</button>
						<button onclick= "location.href='tarantula.php'">Daftar Tarantula</button>
						<button onclick= "location.href='komentar.php'">Daftar komentar</button>
						<button onclick= "location.href='forum.php'">Forum</button>
						<button onclick= "location.href='../function/logout.php'">Logout</button>
					</td></tr>
					</table>
					</div>
				</div>
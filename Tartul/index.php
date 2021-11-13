<html>
<head>
	<title>Sistem Rekomendasi Tarantula</title>

	<link rel="stylesheet" type="text/css" href="css/tartul.css">

</head>
<body>
	
        <div class="topnav">
		  <a><img class="tulisan" src="image/based/sireta.png"></a>
		  <div class="login-container">
			<form action="function/login.php" method="post">
			  <input type="text" placeholder="Username" name="username">
			  <input type="password" placeholder="Password" name="password">
			  <button type="submit">Login</button>
			</form>
		  </div>
		</div>
	
	
			<div class="container" style="margin:8% auto;">
				<div class="kiri">
				
					<h2 >Sistem Rekomendasi Tarantula</h2>
					<p>anda kebingungan dalam menentukan spesies tarantula apa 
					yang akan dipelihara? maka SIRETA adalah solusinya.<br>
					Sistem Rekomendasi Tarantula (SIRETA) adalah sebuah web yang dapat digunakan untuk menemukan 
					spesies tarantula berdasarkan kriteria-kriteria yang diinginkan pengguna. 
					selain itu pengguna juga dapat melihat maupun berkomunikasi di forum yang tersedia untuk sharing pengalaman 
					selama memelihara tarantula.
					</p>
			
				</div>
				 <div class="kanan">
                   <div >
                   <table border="5" width="300px" height="200px" style="text-align :center; border: 5px solid #e67300;">
				   <tr><td>
						<form method="POST" action="function/register.php" style="padding : 5px;">
								<h3 style="font-size : 30px;">Daftar</h3>
							<input type="text" placeholder="Nama" name="nama" required><br>
							<input type="text" placeholder="Username" name="username"class="form-control" required><br>
							<input type="password" placeholder="Password" name="password" class="form-control" required><br>
							<input type="submit" value="Signup" class="btn btn-success">
						</form>
					</td></tr>
					</table>
				</div>
			</div>
		</div>
	
    <div class="footer">
		<nav align="center">
			<ul >
				<li><a>SiReTa@2021</a></li>
			</ul>
		</nav>
	</div>

</body>
</html>
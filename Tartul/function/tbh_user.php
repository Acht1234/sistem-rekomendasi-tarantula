<?php
include 'koneksi.php';
 
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$User = "User";
$kota = "";
$jenis_pemelihara= "";
 
$validasi = mysqli_query($koneksi,"select * from user where username='$username'");
$cek = mysqli_num_rows($validasi);
 
if($cek > 0){
 
	echo "<script>alert('Username sudah dipakai !!!');history.go(-1);</script>";
	}	
else{
	mysqli_query($koneksi,"insert into user values('','$nama','$username','$password','$User','$kota','$jenis_pemelihara')");
    header("location:../admin/DUser.php");
}

 
?>
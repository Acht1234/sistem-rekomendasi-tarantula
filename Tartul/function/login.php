<?php 
session_start();
 
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_array($login);
 
	if($data['level']=="Admin"){

		$_SESSION['username'] = $username;
		header("location:../admin/admin.php");
 
	}else if($data['level']=="User"){
		$_SESSION['username'] = $username;
		header("location:../user/user.php");
 
	}else{
 
		header("location:../index.php");
	}	
}else{
	echo "<script>alert('Username atau password anda salah!');history.go(-1);</script>";
}
 
?>
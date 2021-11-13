<?php
include 'koneksi.php';
 
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$User = "User";
mysqli_query($koneksi,"insert into user values('','$nama','$username','$password','$User','','')");
echo "<script>alert('berhasil registrasi');history.go(-1);</script>";
 
?>
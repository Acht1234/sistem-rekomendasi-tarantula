<?php 
include 'koneksi.php';
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$kota=$_POST['kota'];
$pemelihara=$_POST['pemelihara'];



	mysqli_query($koneksi,"update user set nama='$nama', username='$username', password='$password', level='$level', kota='$kota', jenis_pemelihara='$pemelihara' where id_user='$id_user'");
    echo "<script>alert('data berhasil diupdate');history.go(-1);</script>";

?>
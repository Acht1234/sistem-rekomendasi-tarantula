<?php 
include 'koneksi.php';
$id_user=$_GET['id_user'];
mysqli_query($koneksi,"delete from user where id_user='$id_user'");
echo "<script>alert('data berhasil dihapus');history.go(-1);</script>";

?>
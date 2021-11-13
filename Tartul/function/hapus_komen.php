<?php 
include 'koneksi.php';
$id_komen=$_GET['id_komen'];
mysqli_query($koneksi,"delete from komentar where id_komen='$id_komen'");
echo "<script>alert('data berhasil dihapus');history.go(-1);</script>";

?>
<?php 
include 'koneksi.php';
$id_tartul=$_GET['id_tartul'];
$tartul=mysqli_query($koneksi,"select * from tarantula where id_tartul ='$id_tartul' ");
$t=mysqli_fetch_array($tartul);

if(is_file("../image/tartul/".$t['foto'])) // Jika foto ada
unlink("../image/tartul/".$t['foto']);	 // Hapus file foto sebelumnya yang ada di folder images
mysqli_query($koneksi,"delete from hitung where id_tartul='$id_tartul'");
mysqli_query($koneksi,"delete from tarantula where id_tartul='$id_tartul'");

echo "<script>alert('data berhasil dihapus');history.go(-1);</script>";

?>
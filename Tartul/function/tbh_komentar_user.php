<?php
include 'koneksi.php';
 
$nama = $_POST['nama'];
$id_tartul = $_POST['id_tartul'];
$id_user = $_POST['id_user'];
$komentar = $_POST['komentar'];
date_default_timezone_set('Asia/Jakarta');
$date = date('Y-m-d H:i:s');


	mysqli_query($koneksi,"insert into komentar values('','$id_user','$nama','$komentar','$id_tartul','$date')");
    header("location:../user/detail.php?id_tartul=$id_tartul");

 
?>
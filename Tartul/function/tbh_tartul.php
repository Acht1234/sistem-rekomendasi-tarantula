<?php
include 'koneksi.php';
 
$nama_spesies = $_POST['nama_spesies'];
$warna = $_POST['warna'];
$generasi = $_POST['generasi'];
$src_foto = $_POST['src_foto'];
$kecepatan = $_POST['kecepatan'];
$racun = $_POST['racun'];
$umur = $_POST['umur'];
$panjang = $_POST['panjang']; 
$pemelihara = $_POST['pemelihara'];
$sifat = $_POST['sifat'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	echo "<script>alert('ekstensi file yang diperbolehkan hanya png, jpg dan jpeg !!!');history.go(-1);</script>";
}else{		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../image/tartul/'.$rand.'_'.$filename);
		mysqli_query($koneksi,"insert into tarantula values('','$nama_spesies','$xx','$src_foto','$warna','$generasi'
        ,'$kecepatan','$racun','$umur','$panjang','$pemelihara','$sifat')");

		$query =mysqli_query($koneksi, "SELECT * FROM tarantula WHERE nama_spesies='$nama_spesies'");
		while($result = mysqli_fetch_array($query)) {
			$id_tartul=$result['id_tartul'];
		}
		mysqli_query($koneksi,"insert into hitung values('','$id_tartul','','','',''
        ,'','')");
    header("location:../admin/tarantula.php");
	
}

?>
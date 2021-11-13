<?php 
include 'koneksi.php';
$id_tartul=$_POST['id_tartul'];
$nama_spesies = $_POST['nama_spesies'];
$src_foto = $_POST['src_foto'];
$warna = $_POST['warna'];
$generasi = $_POST['generasi'];
$kecepatan = $_POST['kecepatan'];
$racun = $_POST['racun'];
$umur = $_POST['umur'];
$panjang = $_POST['panjang']; 
$pemelihara = $_POST['pemelihara'];
$sifat = $_POST['sifat'];
$foto = $_FILES['foto']['name'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


 



if(empty($foto)){ // Jika user tidak memilih file foto pada form

   		
        mysqli_query($koneksi,"update tarantula set nama_spesies='$nama_spesies', src_foto='$src_foto', warna='$warna', generasi='$generasi'
            , kecepatan='$kecepatan', racun='$racun', umur='$umur', panjang='$panjang',pemelihara='$pemelihara',sifat='$sifat' where id_tartul='$id_tartul'");
        header("location:../admin/tarantula.php");
     
}else{ 
    $tartul=mysqli_query($koneksi,"select * from tarantula where id_tartul ='$id_tartul' ");
    $t=mysqli_fetch_array($tartul);

    if(!in_array($ext,$ekstensi) ) {
        echo "<script>alert('ekstensi file yang diperbolehkan hanya png, jpg dan jpeg !!!');history.go(-1);</script>";
    }else{	
            if(is_file("../image/tartul/".$t['foto'])) // Jika foto ada
            unlink("../image/tartul/".$t['foto']);	 // Hapus file foto sebelumnya yang ada di folder images
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../image/tartul/'.$rand.'_'.$filename);
            mysqli_query($koneksi,"update tarantula set nama_spesies='$nama_spesies', foto='$xx', src_foto='$src_foto', warna='$warna', generasi='$generasi'
            , kecepatan='$kecepatan', racun='$racun', umur='$umur', panjang='$panjang',pemelihara='$pemelihara', sifat='$sifat' where id_tartul='$id_tartul'");
        header("location:../admin/tarantula.php");
    }
}
?>
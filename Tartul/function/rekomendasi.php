<?php 
session_start();
 
include 'koneksi.php';


$pemelihara=$_SESSION['pemelihara'];
$warna=$_SESSION['warna'];
$panjang=$_SESSION['panjang'];
$umur=$_SESSION['umur'];
$sifat=$_SESSION['sifat'];

$data = mysqli_query($koneksi,"select * from hitung");
while($d = mysqli_fetch_array($data)){
	$id_tartul=$d['id_tartul'];	
	$clear=mysqli_query($koneksi,"update hitung set 
	pemelihara='', 
	warna='',
	panjang='',
	umur='', 
	sifat=''
	where id_tartul='$id_tartul'");
};

if (!empty($pemelihara)) {
	$query =mysqli_query($koneksi, "SELECT * FROM tarantula ");
	while($result = mysqli_fetch_array($query)) {
	// jika ada yang sama update data ke tabel hitung
		$id_tartul=$result['id_tartul'];
		//$update=mysqli_query($koneksi,"update hitung set pemelihara='1' where id_tartul = '$id_tartul'");
		//echo $result['pemelihara'];
		//echo $pemelihara;
		if ($result['pemelihara']==$pemelihara){
			$update=mysqli_query($koneksi,"update hitung set pemelihara='1' where id_tartul = '$id_tartul'");
		}
	}
}
if (!empty($warna)) {
	$query =mysqli_query($koneksi, "SELECT * FROM tarantula ");
	while($result = mysqli_fetch_array($query)) {
	// jika ada yang sama update data ke tabel hitung
		$id_tartul=$result['id_tartul'];
		if ($result['warna']==$warna){
			$update=mysqli_query($koneksi,"update hitung set warna='1' where id_tartul = '$id_tartul'");
		}
	}
}
if (!empty($umur)) {
	$query =mysqli_query($koneksi, "SELECT * FROM tarantula ");
	while($result = mysqli_fetch_array($query)) {
	// jika ada yang sama update data ke tabel hitung
		$id_tartul=$result['id_tartul'];
		if ($result['umur']>=$umur){
			$update=mysqli_query($koneksi,"update hitung set umur='1' where id_tartul = '$id_tartul'");
		}
	}
}
if (!empty($panjang)) {
	$query =mysqli_query($koneksi, "SELECT * FROM tarantula ");
	while($result = mysqli_fetch_array($query)) {
	// jika ada yang sama update data ke tabel hitung
		$id_tartul=$result['id_tartul'];
		if ($result['panjang']>=$panjang){
			$update=mysqli_query($koneksi,"update hitung set panjang='1' where id_tartul = '$id_tartul'");
		}
	}
}

if (!empty($sifat)) {
	$query =mysqli_query($koneksi, "SELECT * FROM tarantula ");
	while($result = mysqli_fetch_array($query)) {
	// jika ada yang sama update data ke tabel hitung
		$id_tartul=$result['id_tartul'];
		if ($result['sifat']==$sifat){
			$update=mysqli_query($koneksi,"update hitung set sifat='1' where id_tartul = '$id_tartul'");
		}
	}
}
$filtered_sess = array_filter($_SESSION);
$sess = count($filtered_sess);
$bagi = $sess - 1; //penggunaan nama di pojok kanan atas menggunakan session.jadi harus dikurangi
$query =mysqli_query($koneksi, "SELECT * FROM hitung");
	while($result = mysqli_fetch_array($query)) {
		$id_tartul=$result['id_tartul'];
            $hasil=($result['pemelihara']+$result['warna']+$result['umur']+$result['panjang']+$result['sifat'])/$bagi;
			$update=mysqli_query($koneksi,"update hitung set hasil='$hasil' where id_tartul = '$id_tartul'");
		
	}
$tartul = " SELECT * FROM  hitung where hasil='1' ";
$data = mysqli_query($koneksi,$tartul);
$cek = mysqli_num_rows($data);
if($cek > 0){
	
		$_SESSION['panjang']=$panjang;
		$_SESSION['umur']=$umur;
		header("location:../user/hasil.php");
 	
}else{
	header("location:../user/kosong.php");
}
 
?>
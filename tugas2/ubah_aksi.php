<?php 
// koneksi database
include_once("config.php");
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$kehadiran = $_POST['kehadiran'];
$penghasilan_ortu = $_POST['penghasilan_ortu'];
$tanggungan_ortu = $_POST['tanggungan_ortu'];
 
// menginput data ke database

$query = "UPDATE tbl_alternatif_wp set nama = '".$nama."', nilai = '".$nilai."', kehadiran = '".$kehadiran."', penghasilan_ortu = '".$penghasilan_ortu."', tanggungan_ortu = '".$tanggungan_ortu."' WHERE id = ".$id;


if (mysqli_query($mysqli,$query)) {
	header("location:index.php");
}
else{
	echo $query;
	echo "terjadi kesalahan<br/<";
	echo $query;
}

 
// mengalihkan halaman kembali ke index.php
 
?>
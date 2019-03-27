<?php 
// koneksi database
include_once("config.php");
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$kehadiran = $_POST['kehadiran'];
$penghasilan_ortu = $_POST['penghasilan_ortu'];
$tanggungan_ortu = $_POST['tanggungan_ortu'];
 
// menginput data ke database
$query = "INSERT INTO tbl_alternatif_wp(nama, nilai, kehadiran, penghasilan_ortu, tanggungan_ortu) VALUES ('$nama','$nilai','$kehadiran','$penghasilan_ortu','$tanggungan_ortu')";

if (mysqli_query($mysqli,$query)) {
	header("location:index.php");
}
else{
	echo "terjadi kesalahan<br/<";
	echo $query;
}

 
// mengalihkan halaman kembali ke index.php
 
?>
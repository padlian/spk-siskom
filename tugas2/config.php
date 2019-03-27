<?php
$databaseHost = 'localhost';
$databaseName = 'spk2';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("Koneksi gagal");
mysqli_select_db($mysqli, $databaseName) or die("Database tidak ditemukan");

?>
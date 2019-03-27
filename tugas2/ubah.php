<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include_once("config.php");

$id = $_GET['id'];
$persamaan1 = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp WHERE id = ".$id);
	while ($user_data = mysqli_fetch_array($persamaan1)) {
		$nama = $user_data['nama'];
		$nilai = $user_data['nilai'];
		$kehadiran = $user_data['kehadiran'];
		$penghasilan_ortu = $user_data['penghasilan_ortu'];
		$tanggungan_ortu = $user_data['tanggungan_ortu'];
	}
?>
<form method="post" action="ubah_aksi.php">
	<input type="hidden" name="id" value="<?= $id ?>">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="input" name="nama" value="<?= $nama ?>"></td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td>:</td>
			<td><input type="input" name="nilai" value="<?= $nilai ?>"></td>
		</tr>
		<tr>
			<td>Kehadiran</td>
			<td>:</td>
			<td><input type="input" name="kehadiran" value="<?= $kehadiran ?>"></td>
		</tr>
		<tr>
			<td>Penghasilan Orang Tua</td>
			<td>:</td>
			<td><input type="input" name="penghasilan_ortu" value="<?= $penghasilan_ortu ?>"></td>
		</tr>
		<tr>
			<td>Tanggungan Orang Tua</td>
			<td>:</td>
			<td><input type="input" name="tanggungan_ortu" value="<?= $tanggungan_ortu ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>		
	</table>
</form>
</body>
</html>
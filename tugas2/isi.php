<?php
include_once("config.php");
$b_nilai = 0.4;
$b_kehadiran = 0.3;
$b_penghasilan_ortu = 0.1;
$b_tanggungan_ortu = 0.2;

$result = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp ORDER BY id ASC");

?>

<html>
<head>
	<title>SPK Metode WP</title>
</head>
<body>
<a href="tambah.php">Tambah</a><br/>

Bobot Nilai = <?= $b_nilai ?> <br/>
Bobot Kehadiran = <?= $b_kehadiran ?> <br/>
Bobot Penghasilan Orang Tua = <?= $b_penghasilan_ortu ?> <br/>
Bobot Jumlah Tanggungan Orang Tua = <?= $b_tanggungan_ortu ?> <br/>

<h1>Data setiap alternatif</h1>
<table border=1>
	<tr>
		<th>nama</th>
		<th>nilai</th>
		<th>kehadiran</th>
		<th>penghasilan_ortu</th>
		<th>tanggungan_ortu</th>
		<th>Aksi</th>
	</tr>
	<?php
	$persamaan1 = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp ORDER BY id ASC");
	while ($user_data = mysqli_fetch_array($persamaan1)) {
		?>
			<tr>
				<td><?= $user_data['nama'] ?></td>
				<td><?= $user_data['nilai'] ?></td>
				<td><?= $user_data['kehadiran'] ?></td>
				<td><?= $user_data['penghasilan_ortu'] ?></td>
				<td><?= $user_data['tanggungan_ortu'] ?></td>
				<td>
					<a href="ubah.php?id=<?= $user_data['id'] ?>">Ubah</a>
				</td>
			</tr>
		<?php
	}
	?>
</table>
	
<h1>Persamaan 2</h1>
<table border=1>
	<?php
	$persamaan2 = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp ORDER BY id ASC");
	$total = 0;
	while ($user_data = mysqli_fetch_array($persamaan2)) {
		$hasil = pow($user_data['nilai'], $b_nilai) * 
				pow($user_data['kehadiran'], $b_kehadiran) * 
				pow($user_data['penghasilan_ortu'], -$b_penghasilan_ortu) *
				pow($user_data['tanggungan_ortu'], -$b_tanggungan_ortu);
		$total+=$hasil;
		?>
			<tr>
				<td><?= $user_data['nama'] ?></td>
				<td><?= $user_data['nilai'] ?></td>
				<td>
					(<?= $user_data['nilai']?>^<?= $b_nilai ?>)*
					(<?= $user_data['kehadiran'] ?>^<?= $b_kehadiran ?>)*
					(<?= $user_data['penghasilan_ortu'] ?>^-<?= $b_penghasilan_ortu ?>))*
					(<?= $user_data['tanggungan_ortu'] ?>^-<?= $b_tanggungan_ortu ?>) = 
					<?= $hasil ?></td>
			</tr>
		<?php
	}
	?>
</table>


<h1>Persamaan 3</h1>
<table border=1>
	<?php
	$persamaan3 = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp ORDER BY id ASC");
	$i=0;
	while ($user_data = mysqli_fetch_array($persamaan3)) {
		$hasil = pow($user_data['nilai'], $b_nilai) * 
				pow($user_data['kehadiran'], $b_kehadiran) * 
				pow($user_data['penghasilan_ortu'], -$b_penghasilan_ortu) *
				pow($user_data['tanggungan_ortu'], -$b_tanggungan_ortu);
		$total2=$hasil/$total;

		$query = "UPDATE tbl_alternatif_wp set hasil = ".$total2." WHERE id = ".$user_data['id'];
		mysqli_query($mysqli,$query);

		?>
			<tr>
				<td><?= $user_data['nama'] ?></td>
				<td><?= $user_data['nilai'] ?></td>
				<td><?= $hasil ?> / <?= $total ?>  = <?= $total2 ?></td>
			</tr>
		<?php
	}
	?>
</table>


<h1>Data Hasil Urut</h1>
<table border=1>
	<tr>
		<th>nama</th>
		<th>nilai</th>
		<th>kehadiran</th>
		<th>penghasilan_ortu</th>
		<th>tanggungan_ortu</th>
		<th>Nilai</th>
	</tr>
	<?php
	$persamaan1 = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp ORDER BY hasil DESC");
	while ($user_data = mysqli_fetch_array($persamaan1)) {
		?>
			<tr>
				<td><?= $user_data['nama'] ?></td>
				<td><?= $user_data['nilai'] ?></td>
				<td><?= $user_data['kehadiran'] ?></td>
				<td><?= $user_data['penghasilan_ortu'] ?></td>
				<td><?= $user_data['tanggungan_ortu'] ?></td>
				<td><?= $user_data['hasil'] ?></td>
			</tr>
		<?php
	}
	?>
</table>


</body>
</html>
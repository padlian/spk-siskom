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
	<tr>
		<td></td>
	</tr>
</table>


<h1>Persamaan 3</h1>
<table border=1>
	<?php
	$persamaan3 = mysqli_query($mysqli, "SELECT * FROM tbl_alternatif_wp ORDER BY id ASC");
	while ($user_data = mysqli_fetch_array($persamaan3)) {
		$hasil = pow($user_data['nilai'], $b_nilai) * 
				pow($user_data['kehadiran'], $b_kehadiran) * 
				pow($user_data['penghasilan_ortu'], -$b_penghasilan_ortu) *
				pow($user_data['tanggungan_ortu'], -$b_tanggungan_ortu);
		$total2=$hasil/$total;
		?>
			<tr>
				<td><?= $user_data['nama'] ?></td>
				<td><?= $user_data['nilai'] ?></td>
				<td><?= $hasil ?> / <?= $total ?>  = <?= $total2 ?></td>
			</tr>
		<?php
	}
	?>
	<tr>
		<td></td>
	</tr>
</table>

</body>
</html>
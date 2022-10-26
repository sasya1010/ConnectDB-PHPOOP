<?php 

require 'db_config2.php';

$db = query("SELECT * FROM nilai");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampilan Table 2</title>
</head>
<body>

	<h3>NILAI SISWA</h3>

	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nilai Harian</th>
			<th>Nilai Kehadiran</th>
			<th>Nilai PTS</th>
			<th>Nilai PAS</th>
		</tr>
		<?php $u = 1; $u++ ?>
		<?php foreach ($db as $row) :?>
		<tr>
			<td><?php echo $u;?></td>
			<td><?php echo $row['nama_siswa'];?></td>
			<td><?php echo $row['nilai_harian'];?></td>
			<td><?php echo $row['nilai_kehadiran'];?></td>
			<td><?php echo $row['nilai_PTS'];?></td>
			<td><?php echo $row['nilai_PAS'];?></td>
		</tr>
		<?php endforeach; ?>
	</table> 

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow kirru" style="background-color: #3175bf ">
		<div class="navbar-nav">

			<a href="<?= site_url('DController/tambah') ?>" class="nav-link"> Tambah Data </a>
			
		</div>
	</nav>

	<div class="alert alert-success text-center mt-2">

		Data Mahasiswa

	</div>

	<table class="table table-bordered table-sm">
		<tr class="text-center">
			<th>id_07</th>
			<th>kolom_jurusan</th>
			<th>kolom_kelas</th>
			<th>kolom_isi</th>
		</tr>
		<?php foreach ($data_table as $key): ?>
		<tr>
			<td><?= $key->id_07 ?></td>
			<td><?= $key->kolom_jurusan ?></td>
			<td><?= $key->kolom_kelas ?></td>
			<td><?= $key->kolom_isi ?></td>

		</tr>
		<?php endforeach ?>
	</table>	
</body>
</html>
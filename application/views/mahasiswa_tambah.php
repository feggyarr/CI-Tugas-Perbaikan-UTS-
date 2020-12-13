<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow kirru" style="background-color: #3175bf ">
		<div class="navbar-nav">

			<a href="<?= site_url('DController') ?>" class="nav-link active"> Home </a>
			
		</div>
	</nav>
	<h1>Tambah Data</h1>
	<hr>
	<form method="post" action="<?= site_url('DController/simpan_data'); ?>">
		<h5>id_07</h5>
		<input type="number" name="id_07"> <br>

		<h5>kolom_jurusan</h5>
		<input type="text" name="kolom_jurusan"> <br>

		<h5>kolom_kelas</h5>
		<input type="text" name="kolom_kelas"> <br>

		<h5>kolom_isi</h5>
		<input type="text" name="kolom_isi"><br><br>

		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>
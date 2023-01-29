<?php
	include "header.php";
	//include "navigasi.php";
?>

<div class="container">
	<h4>Formulir Tambah Siswa</h4>

	<form action = "input_siswa.php" method="POST">
		<div class="form-group">
			<label>Nama Siswa</label>
			<input type="input" name="nama_siswa" class="form-control">
		</div>

		<div class="form-group">
			<label>Kelas</label>
			<input type="input" name="kelas" class="form-control">
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="input" name="alamat" class="form-control">
		</div>

		<input type="submit" name="" class="btn btn-primary">
	</form>
</div>


<?php
	include "footer.php";
?>
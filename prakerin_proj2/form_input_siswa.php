<?php
	include "header.php";
	
?>
<div class="container">
	<h2>Form input Siswa</h2>
	<form action="input_siswa2.php" method="GET">
		<div class="form-group">
			<label>Nama Siswa</label>
			<input type="input" name="nama_siswa" class="form-control">
		</div>

		<div class="form-group">
			<label>Kelas</label>
			<select name="kelas" class="form-control">
				<option value="XII RPL 1">XII RPL 1</option>
				<option value="XII RPL 2">XII RPL 2</option>
			</select>
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>

		<input type="submit" name="" class="btn btn-primary" >
	</form>
</div>
<?php
	include "footer.php";
?>
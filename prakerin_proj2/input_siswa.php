<?php
	include "koneksi.php";
	$nama_siswa = $_POST['nama_siswa'];
	$kelas      = $_POST['kelas'];
	$alamat     = $_POST['alamat'];

	// echo $nama_siswa;
	// echo $kelas;
	// echo $alamat;

	$sql = "INSERT INTO siswa_syahri (nama_siswa, kelas, alamat) values ('$nama_siswa','$kelas','$alamat')";
	$eksekusi = mysqli_query($conn,$sql);

	header("location:show_siswa.php");

?>

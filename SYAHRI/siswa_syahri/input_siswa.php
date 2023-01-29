<?php
	include "koneksi.php";

	$nama_siswa = $_POST['nama_siswa'];
	$kelas      = $_POST['kelas'];
	$alamat     = $_POST['alamat'];

	$sql = "INSERT INTO `siswa_syahri` (`id_siswa`, `nama_siswa`, `kelas`, `alamat`) VALUES (NULL, '$nama_siswa', '$kelas', '$alamat')";
	$eksekusi = mysqli_query($conn, $sql);

	header("location:show_siswa.php");
?>


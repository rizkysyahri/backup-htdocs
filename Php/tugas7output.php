<html>
<head>
	<title>Tugas7</title>
</head>
<body>
	<?php 
		$nama=$_POST['pesanan'];
		$kode=$_POST['studio'];
		$jenis=$_POST['kelas'];
		$jumlah=$_POST['tiket'];
		if ($kode='studio1') {
			$tamu="Opick";
		}
		elseif ($kode='studio2') {
			$tamu="Raihan";
		}
		else{
			echo "INVALID";
		}
		if ($jenis='VIP') {
			$harga="500000";
		}
		elseif ($jenis='Festival') {
			$harga="250000";
		}
		else{
			echo "INVALID";
		}
		$total=$jumlah*$harga;
	 ?>
<pre>
	 <b>KONSER AMAL INDAHNYA BERBAGI</b> 
	 <br>
	 <b>============================</b> 
	 <br>

	 Nama Pemesanan			: <?php echo $nama; ?> 
	 <br>
	 Kode Studio 			: <?php echo $kode; ?> 
	 <br>
	 Bintang Tamu     		: <?php echo $tamu; ?> 
	 <br>
	 Jenis Kelas           		: <?php echo $jenis; ?> 
	 <br>
	 Harga                  	: <?php echo $harga; ?> 
	 <br>
	 Jumlah Beli            	: <?php echo $jumlah; ?> 
	 <br>
	 <b>============================</b> 
	 <br>
	 Total Harga            	: <?php echo $total; ?>
</pre>
<a href="tugas7input.php"><center> Kembali Ke Awal </center></a>
</body>
</html>
<html>
<head>
	<title>Latihan Variabel 01</title>
</head>
<?php	
	
	$kode_barang    ="B123";
	$harga          =50000;
	$jumlah_beli    =6;
	$jumlah_harga   = $harga * $jumlah_beli;
	$diskon         = 0.1 * $jumlah_harga;
	$total          = $jumlah_harga - $diskon;

	echo "Latihan Variabel 12.2A <br>";
	echo "---------------------------<br><br>";
	echo "<pre>";
	echo "<font color = 'orange'>";
	echo "kode_barang    =$kode_barang<br>";
	echo "harga          =$harga<br>";
	echo "jumlah_beli    =$jumlah_beli<br>";
	echo "jumlah_harga   =$jumlah_harga<br>";
	echo "diskon         =$diskon<br>";
	echo "total_bayar    =$total";

?>
</body>
</html>
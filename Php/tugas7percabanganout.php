<html>
<head>
	<title>TUGAS7PERCABANGAN</title>
</head>
<body>
	<?php 
		$nama=$_POST['customer'];
		$alamat=$_POST['alamat'];
		$cat=$_POST['cat'];
		$wc=$_POST['wc'];
		$jumlah=$_POST['beli'];

		if ($cat='MOWILEX') {
			$harga= 20000;
		}
		elseif ($cat='DANAPAINT') {
			$harga= 30000;
		}
		elseif ($cat='CATYLAC') {
			$harga= 40000;
		}
		else
		{
		$harga=0;
		}
		 $total=$harga*$jumlah;
		if ($jumlah>=5)
		{
			$diskon=$total*0.05;
		} 
		elseif ($total>=10)
		{
			$diskon=$total*0.1;
		}
		else
		{
			$diskon=0;
		}	

		$totalbayar=$total-$diskon;
?>
		
<pre>
	 <b>KONSER AMAL INDAHNYA BERBAGI</b> 
	 <br>
	 <b>====================================================</b> 
	 <br>

	 Nama Customer			: <?php echo $nama; ?> 
	 <br>
	 Alamat 			: <?php echo $alamat; ?> 
	 <br>
	 Jenis CAT     			: <?php echo $cat; ?> 
	 <br>
	 Warna         			: <?php echo $wc; ?> 
	 <br>
	 Harga                  	: <?php echo $harga; ?> 
	 <br>
	 Jumlah Beli            	: <?php echo $jumlah; ?> 
	 <br>
	 <b>=====================================================</b> 
	 <br>
	 Total Harga            	: <?php echo $total; ?>
	 <br>
	 Diskon 			: <?php echo $diskon; ?>
	 <br>
	 <b>=====================================================</b>
	 <br>
	 Total Bayar			: <?php echo $totalbayar; ?>
</pre>
<a href="tugas7percabanganin.php"><center> Kembali Ke Awal </center></a>
</body>
</html>
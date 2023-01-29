<html>
<head>
		<title>Contoh IF ELSE</title>
</head>
<body>
<?php
	$nilai=$_POST['nilai'];

	echo"<center><h2>";
	if ($nilai>= 60)
	{ echo "Nilai Anda =$nilai. Selamat, Anda Lulus";}
	else
	{ echo "Nilai Anda =$nilai. Sorry, Anda Tidak Lulus";}
	
?>
<br>
<a href="latihanifelse.php">INPUT DATA LAGI</a>
</body>
</html>		
<html>
<head>
		<title>Data Komentar</title>
</head>
<body>
<?php
	$nama		=$_POST['nama'];
	$email		=$_POST['email'];
	$komentar	=$_POST['komentar'];
?>
<h1>Data Komentar Anda</h1>
<hr>
	Nama Anda 	:<?php echo $nama; ?><br>
	Email Anda	:<?php echo $email; ?><br>
	komentar 	:<?php echo $komentar; ?><br>
<a href = "forminputkomentar.php"> INPUT DATA LAGI </a>
</body>
</html>				
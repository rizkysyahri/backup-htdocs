<html>
<head>
		<title>Form Output Data Pegawai</title>
</head>	
<body>
	<strong><div align="center"><h1>FORMULIR PEGAWAI NEGERI KONOHA</h1></div></strong>
	<table widht="304" border="1" align="center">
	<tr>
	<td width="101">Nama :</td>
	<td width="187"><?php echo $_POST['txtnama'];?></td>
</tr>
	<tr>
	<td>Alamat :</td>
	<td><?php echo $_POST['txtalamat'];?></td>
</tr>
	<tr>		
	<td>Tempat Lahir :</td>
	<td><?php echo $_POST['txttempat'];?></td>
</tr>
	<tr>
	<td>Tanggal Lahir :</td>
	<td><?php echo $_POST['txtlahir'];?></td>
</tr>
	<tr>
	<td>Jenis Kelamin :</td>
	<td><?php echo $_POST['rjk'];?></td>
</tr>		
	<tr>
	<td>Pendidikan :</td>
	<td><?php echo $_POST['cpend'];?></td>
</tr>
</td>


</table>
<center><a href="tugas06input.php">Back To Home</a></center>

</body>
</html>			
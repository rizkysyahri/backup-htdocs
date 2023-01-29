<html>
<head>
	<title>Form Input Data Pegawai</title>
</head>
<body>
	<strong><div align="center"><h1>FORMULIR PEGAWAI NEGERI KONOHA</h1></div></strong>
	<form action="tugas06output.php" method="post">
	<table border="1" align="center">
	<tr>
	<td colspan=2>Isi Data Di Bawah Ini :</td>
	</tr>
	<tr>
	<td width=40%>Nama</td>
	<td>
	<input type="text" name=txtnama></td>
	</tr>
	<tr>
	<td width=40%>Alamat</td>
		<td>
	<textarea rows=5 cols=45 name=txtalamat></textarea></td>
	</tr>
	<tr>
	<td width=40%>Tempat Lahir</td>
		<td>
	<input type="text" name=txttempat></td>
	</tr>
	<tr>
	<td width=40%>Tanggal Lahir</td>
		<td>
	<input type="text" name=txtlahir></td>
	</tr>
	<tr>
	<td width=40%>Jenis Kelamin</td>
		<td>
	<input type="radio" name=rjk value="Laki-Laki"> Pria
	<input type="radio" name=rjk value="Perempuan"> Wanita
	</td></tr>
	<tr>
	<td width=47%>Pendidikan</td>
	
	<td>
	 	<select size=1 name=cpend>
		<option value=D1> D1 </option>
		<option value=D2> D2 </option>
		<option value=D3> D3 </option>
		<option value=S1> S1 </option>
	</select>
	</td>
	
		<tr>
		<td colspan="2"><center><input type="submit" name="button" id="button" value="Submit"/>
		<input type="reset" value="Cancel"/></td></center>
	</tr>
	</table>
</form>
</body>
</html>				


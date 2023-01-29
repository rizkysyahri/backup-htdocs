<html>
<head>
	<title>TUGAS7PERCABANGAN</title>
</head>
<body>
	<form action="tugas7percabanganout.php" method="post">
	<b>TOKO CAT GUNA BANGUN JAYA</b>

	<table>
		<tr>
			<td>
				Nama Customer :
			</td>
			<td>
				<input type="text" name="customer">
			</td>
		</tr>
		<tr>
			<td>
				Alamat :
			</td>
			<td>
				<input type="text" name="alamat">
			</td>
		</tr>
		<tr>
			<td>
				Jenis CAT :
			</td>
			<td>
				<select name="cat">
				<option value="-Pilih-">
				<option value="MOWILEX"> MOWILEX
				<option value="DANAPAINT">DANAPAINT
				<option value="CATYLAC">CATYLAC	
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Warna Cat :
			</td>
			<td>
				<input type="radio" name="wc" value="merah">Merah
				<input type="radio" name="wc" value="biru">Biru
				<input type="radio" name="wc" value="kuning">Kuning
			</td>
		</tr>
		<tr>
			<td>
				Jumlah Beli :
			</td>
			<td>
				<input type="text" name="beli">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Hitung">
				<input type="reset" name="Batal">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

<html>
<head>
	<title>TUGAS07</title>
</head>
<body>
	<form action="tugas7output.php" method="post">
	<b>KONSER AMAL INDAHNYA BERBAGI</b>

	<table>
		<tr>
			<td>
				Nama Pemesanan:
			</td>
			<td>
				<input type="text" name="pesanan">
			</td>
		</tr>
		<tr>
			<td>
				Kode Studio:
			</td>
			<td>
				<select name="studio">
				<option value="-Pilih-">
				<option value="studio1">Studio 1
				<option value="studio2">Studio 2
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Jenis Kelas:
			</td>
			<td>
				<input type="radio" name="kelas" value="VIP">VIP
				<input type="radio" name="kelas" value="Festival">Festival
			</td>
		</tr>
		<tr>
			<td>
				Jumlah Tiket:
			</td>
			<td>
				<input type="text" name="tiket">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Tampil">
				<input type="reset" name="Batal">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

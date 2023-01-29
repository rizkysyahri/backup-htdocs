<html>

<head>
		<title>Tampil Data Transaksi</title>
</head>


<body>
	<center>
		
		<strong><div align="center"><h1>TAMPIL DATA TRANSAKSI</h1></div></strong>
		<table border="10" align="center">

			<tr>
				<td colspan=4 align="center"></td>
				<hr>
			</tr>

			<tr>
				<td width=50%>Nama Pembeli</td>
				<th>:</th>	
				<td>
					<?= $nm_pembeli; ?>
				</td>
			</tr>
			<tr>
				<td width=50%>No Handphone</td>
				<th>:</th>
				<td>
					<?= $no_hp; ?>
				</td>
			</tr>
			<tr>
				<td width=50%>Merk Sepatu</td>
				<th>:</th>
				<td>
					<?= $merk_sepatu; ?>
				</td>
			</tr>
			<tr>
				<td width=50%>Ukuran Sepatu</td	>
				<th>:</th>
				<td>
					<?= $ukuran_spt; ?>
				</td>
			</tr>			
			<tr>
				<td colspan="4" align="center">
					<a href="<?=  base_url('transaksi'); ?>">
						<input type="submit" value="Kembali">
				</td>		
			</tr>
		</table>
		<hr>
	</center>
</body>

</html>														
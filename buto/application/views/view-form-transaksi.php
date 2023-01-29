<html>

<head>
		<title>Form Input Transaksi</title>
</head>


<body>
	<center>
		<form action="<?=base_url('transaksi/cetak'); ?> " method ="post">

			<strong><div align="center"><h1>FORM INPUT TRANSAKSI</h1></div></strong>
			<table border="10" align="center">
				
				<tr>
					<td colspan=4 align="center">Isi Data Di Bawah Ini</td>
					<hr>
				</tr>
 				
 				<tr>
 					<td width=50%>Nama Pembeli</td>
 					<th>:</th>
 					<td>
 						<input type="text" name="nama" id="nama" placeholder="Required">
 					</td>
 				</tr>
 				<?= form_error('nama'); ?>
 				<tr>
 					<td width=50%>No Handphone</td>
 					<th>:</th>
 					<td>
 						<input type="text" name="no" id="no" placeholder="Required">
 					</td>
 				</tr>
 				<?= form_error('no'); ?>
 				<tr>
 					<td width=50%>Merk Sepatu</td>
 					<th>:</th>
 					<td> 
 						<select name="merk" id="merk">
 							<option value="">Pilih Merk</option>
 							<option value="Nike Rp 375.000">Nike</option>
 							<option value="Adidas Rp 300.000">Adidas</option>
 							<option value="Kickers Rp 250.000">Kickers</option>
 							<option value="Eiger Rp 275.000">Eiger</option>
 							<option value="Bucherri Rp 400.000">Bucherri</option>	
 						</select>
 					</td>
				</tr>
				<tr>
					<td width=50%>Ukuran Sepatu</td>
					<th>:</th>
					<td>
						<select name="ukuran" id="ukuran">
							<option value="">Pilih Ukuran</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
						</select>
					</td>
				</tr>			
 				<tr>
 					<td colspan="4" align="center">
 						<input type="submit" value="Submit">

 					</td>
			 	</tr>

 			</table>
 			<hr>
 		</form>
	 </center>
</body>


</html> 
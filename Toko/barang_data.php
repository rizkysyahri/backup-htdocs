<table width="700" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
<tr>
  <th width="49%" align="left" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>DATA BARANG</b></th>
  <th width="51%" align="right" valign="middle" bgcolor="#8B9CC4" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b><a href="home.php?go=Barang_Form"><img src="Gambar/add.png" alt="" width="25" height="25" /></a></b></font></th>
</tr>
</table>
<table width="700" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <th width="7%" align="center" scope="col" bgcolor="#CCCCCC">No</th>
    <th width="14%" align="left" scope="col" bgcolor="#CCCCCC">Kode Barang</th>
    <th width="36%" align="left" scope="col" bgcolor="#CCCCCC">Nama Barang</th>   
    <th width="14%" align="right" scope="col" bgcolor="#CCCCCC">Harga Beli</th>      
    <th width="13%" align="right" scope="col" bgcolor="#CCCCCC">Harga Jual</th>
    <th width="8%" align="center" scope="col" bgcolor="#CCCCCC">Stock</th>           
    <th width="8%" align="Center" scope="col" bgcolor="#CCCCCC"><font color="#FFFFFF">Aksi</font></th>
</tr>

<?php
$no=1;
$sql = "select * from tblbarang order by id asc";
$proses = mysqli_query($conn,sql);
while ($record = mysqli_fetch_array($proses))
{
?>
  <tr>
    <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
    <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['kode_barang'] ?></td>
    <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['nama_barang']?></td>
    <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo $record['harga_beli'] ?></td>
    <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo $record['harga_jual']?></td>
    <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $record['stock'] ?></td> 
    <td align="Center" scope="col" bgcolor="#FFFFFF"><a href="?go=Barang_Form_Ubah&amp;id=<?php echo $record['id']; ?>" title="Ubah Data" target="_self"><img src="gambar/ubah.png" width="15" height="15" /></a>&nbsp;&nbsp;<a onclick="return confirm('Yakin data barang ini akan di hapus?');" href="?go=Barang_Hapus&amp;id=<?php echo $record['id']; ?>"><img src="gambar/hapus.png" width="15" height="15" /></a></td>
  </tr>

<?php $no++;}?>

</table>

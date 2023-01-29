<?php
    include "conn.php";

    $id_kompetensi = $_GET['id_kompetensi'];
    $sql      = "select * from kompetensi where id_kompetensi = '$id_kompetensi'";
    $eksekusi = Mysqli_query($konek,$sql);
    $data     = Mysqli_fetch_array($eksekusi); 
?>

<h3>Form Update Kompetensi Keahlian</h3>

<form action="kompetensi_update.php" method="POST">
    Nama Kompetensi Keahlian Baru :
    <input type="text" name="nm_kompetensi" value="<?php echo $data['nm_kompetensi']; ?>"> <br>
    <input type="hidden" name="id_kompetensi" value="<?php echo $data['id_kompetensi']; ?>"> <br>
    <input type="submit" value="Ubah"> 
</form>
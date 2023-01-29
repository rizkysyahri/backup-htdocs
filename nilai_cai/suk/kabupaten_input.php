<?php
    include "koneksi.php";

    $id_prov  = $_POST['nm_prov'];
   
    $sql      = "INSERT INTO kabupaten VALUES (NULL,'$nm_prov')";
    $eksekusi = Mysqli_query($conn,$sql);

    $nomor =1;

    if($eksekusi)
    {
        header("location:kabupaten_show.php");
    }
    else
    {
        echo "Input Gagal";
    }
?>
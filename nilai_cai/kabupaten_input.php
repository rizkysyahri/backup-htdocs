<?php
    include "koneksi.php";

    $nm_kab_  = $_POST['nm_kab'];
   
    $sql      = "INSERT INTO kabupaten VALUES (NULL,'$nm_kab')";
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
<?php
    include "koneksi.php";

    $nm_prov     = $_POST['nm_prov'];
   
    $sql      = "INSERT INTO provinsi VALUES (NULL,'$nm_prov')";
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
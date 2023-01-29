<?php
    include "conn.php";

    $nm_kompetensi = $_POST['nm_kompetensi'];
    //echo $nm_kompetensi;

    $sql      = "INSERT INTO `kompetensi` (`id_kompetensi`, `nm_kompetensi`) VALUES (NULL, '$nm_kompetensi');";
    $eksekusi = Mysqli_query($konek,$sql);

    if($eksekusi)
    {
        header("location:kompetensi_show.php");
    }
    else
    {
        echo "Input Gagal";
    }
?>
<?php
    include "conn.php";

    $id_kompetensi = $_GET['id_kompetensi'];
   
    $sql      = "delete from kompetensi where id_kompetensi = $id_kompetensi";
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
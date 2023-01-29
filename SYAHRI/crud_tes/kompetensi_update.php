<?php
    include "conn.php";

    echo $id_kompetensi = $_POST['id_kompetensi'];
    echo $nm_kompetensi = $_POST['nm_kompetensi'];
    //echo $nm_kompetensi;

    $sql      = "UPDATE `kompetensi` SET nm_kompetensi = '$nm_kompetensi' WHERE `id_kompetensi` = '$id_kompetensi'";
    $eksekusi = Mysqli_query($konek,$sql);

    if($eksekusi)
    {
        header("location:kompetensi_show.php");
    }
    else
    {
        echo "UPDATE Gagal";
    }
?>
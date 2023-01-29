<?php
    include "conn.php";

    $nm_kelas      = $_POST['nm_kelas'];
    $jenjang       = $_POST['jenjang'];
    $id_kompetensi = $_POST['id_kompetensi'];
    //echo $nm_kompetensi;

    $sql      = "INSERT INTO `rombel` (`nm_kelas`,`jenjang`,`id_kompetensi`) VALUES (' $nm_kelas ',' $jenjang  ',' $id_kompetensi')";
    $eksekusi = Mysqli_query($konek,$sql);

    if($eksekusi)
    {
        header("location:rombel.php");
    }
    else
    {
        echo "Input Gagal";
    }
?>
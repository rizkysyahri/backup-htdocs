<?php
    include "conn.php";

    $id_kelas      = $_POST['id_kelas'];
    $nm_kelas      = $_POST['nm_kelas'];
    $jenjang       = $_POST['jenjang'];
    $id_kompetensi = $_POST['id_kompetensi'];
    //echo $nm_kompetensi;

    $sql      = "UPDATE `rombel` SET 
                        `nm_kelas` = '$nm_kelas',
                        `jenjang` = '$jenjang',
                        `id_kompetensi` = '$id_kompetensi' 
                WHERE `id_Kelas` = $id_kelas;";
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
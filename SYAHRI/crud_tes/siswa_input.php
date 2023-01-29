<?php
    include "conn.php";

    $nm_siswa     = $_POST['nm_siswa'];
    $alamat       = $_POST['alamat'];
     $id_kelas     = $_POST['id_kelas'];
    // //echo $nm_kompetensi;

    $sql      = "INSERT INTO `siswa` (`nm_siswa`,`alamat`,`id_kelas`) VALUES (' $nm_siswa ',' $alamat  ',' $id_kelas')";
    $eksekusi = Mysqli_query($konek,$sql);

    if($eksekusi)
    {
        header("location:siswa_show.php");
    }
    else
    {
        echo "Input Gagal";
    }
?>
<?php
    include "conn.php";

    $id_siswa     = $_POST['id_siswa'];
     $nm_siswa     = $_POST['nm_siswa'];
     $alamat       = $_POST['alamat'];
     $id_kelas     = $_POST['id_kelas'];
    // //echo $nm_kompetensi;

    $sql      = "UPDATE `siswa` SET
                         `nm_siswa` = '$nm_siswa ',
                          `alamat` = ' $alamat ',
                          `id_kelas` = '$id_kelas' 
                          WHERE id_siswa = '$id_siswa'";
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
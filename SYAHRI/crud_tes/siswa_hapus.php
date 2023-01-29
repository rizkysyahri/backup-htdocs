<?php
    include "conn.php";

    echo $id_siswa = $_GET['id_siswa'];
   
    $sql      = "delete from siswa where id_siswa = $id_siswa";
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
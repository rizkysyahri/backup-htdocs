<?php
    include "conn.php";

    echo $id_kelas = $_GET['id_kelas'];
   
    $sql      = "delete from rombel where id_kelas = $id_kelas";
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
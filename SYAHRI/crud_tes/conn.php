<?php
    //ini adalah file untuk koneksi antara PHP dan Mysqli
    $host      = "localhost";
    $pengguna = "root";
    $katasnadi = "";
    $basisdata = "crud_tes";

    $konek = Mysqli_connect($host,$pengguna,$katasnadi,$basisdata);

    if($konek)
    {
        //echo "sudah betul";
    }
    else
    {
        echo "belum berhasil";
    }
?>
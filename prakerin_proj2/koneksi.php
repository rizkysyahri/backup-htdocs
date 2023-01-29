<?php
    //mysqli_connect(host,username,password,nama_db)
    $conn = mysqli_connect("localhost","root","","siswa_syahri");

    if($conn)
    {
        //echo "sheeshh berhasil";
    }
    else
    {
        echo "koneksi belum berhasil";
    }
?>
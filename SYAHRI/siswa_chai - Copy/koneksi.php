<?php
    //mysqli_connect(host,username,password,nama_db)
    $conn = mysqli_connect("localhost","root","","siswa_chai");

    if($conn)
    {
        //echo "sheeesh berhasil";
    }
    else
    {
        echo "sheesh tidak berhasil";
    }
?>
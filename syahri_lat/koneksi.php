<?php
    $conn = mysqli_connect("localhost","root","","nilai_cai");

    if($conn)
    {
        echo "berhasil Cuy";
    }
    else
    {
        echo "ga berhasil";
    }
?>
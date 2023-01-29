<?php
    include "koneksi.php";

    $sql      = "SELECT * FROM siswa_chai";
    $eksekusi = mysqli_query($conn,$sql);

    echo "<h2>Manusia Langka</h2>";
    while($data = mysqli_fetch_array($eksekusi))
    {
        echo $data['nama_siswa'];
        echo " - ";
        echo $data['kelas'];
        echo " - ";
        echo $data['alamat'];
        echo "<br>";
    }
?>
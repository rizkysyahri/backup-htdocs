<?php
    include "koneksi.php";

    $sql      = "SELECT * FROM siswa_syahri";
    $eksekusi = mysqli_query($conn,$sql);

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
<?php
   session_start();
   include "koneksi.php";

    // $nik = $_SESSION['nik_login'];


    $nik1            = $_POST['nik'];  
    $nikLama         = $_POST['nik_lama'];                                                                                                                                                                                                           
    $nama_lengkap    = $_POST['nama_lengkap'];                                                                                                                                                                                                             
    $no_telp         = $_POST['no_telp'];                                                                                                                                                                                                             
    $email           = $_POST['email'];                                                                                                                                                                                                             
    $tgl_lahir           = $_POST['tgl_lahir'];                                                                                                                                                                                                             
    $jabatan         = $_POST['jabatan'];
    
    $sql            = "UPDATE `penduduk` SET `nik` = '$nik1' , `nama_lengkap` = '$nama_lengkap', `no_telp` = '$no_telp', `email` = '$email', `tgl_lahir` = '$tgl_lahir', `jabatan` = '$jabatan'
                        WHERE `penduduk`.`nik` = '$nikLama'";
    $eksekusi       = mysqli_query($conn,$sql);
    if($eksekusi)
    {
        $sql_per        = "UPDATE `perjalanan` SET `nik` = '$nik1' where nik = '$nikLama'";
        $eksekusi_per   = mysqli_query($conn,$sql_per);
        echo "<script>
        
                alert('Profil Berhasil Diubah Klik Ok Untuk Login Kembali');
                document.location.href  = 'logout.php';
        </script>
        ";
        
    }else{
        echo "gagal update";
    }
?>
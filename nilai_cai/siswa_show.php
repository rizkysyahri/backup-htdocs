<?php
    include "koneksi.php";

    $id_sekolah_get = $_GET['id_sekolah'];
    $sql = "select * from siswa WHERE id_sekolah = $id_sekolah_get";
    $eksekusi = Mysqli_query($conn,$sql);

    $nomor =1;

    // echo "<h3>Daftar Nilai</h3>";

    // echo "<table border='1'>";
    // echo "<tr>";
    // echo "<td>Id siswa</td>";
    // echo "<td>Nama siswa</td>";
    // echo "<td>Objektif</td>";
    // echo "<tr>";

    // while($data_siswa = Mysqli_fetch_array($eksekusi))
    // {
    //     $id_siswa = $data_siswa['id_siswa'];
    //     echo "<tr>";
    //     echo "<td>".$data_siswa['id_siswa']."</td>";
    //     echo "<td>".$data_siswa['nm_siswa']."</td>";
    //     echo "<td>";
    //     echo "<a href='nilai_siswa.php?id_siswa=$id_siswa'>Lihat nilai</a>";
    //     echo "</td>";
    //     echo "</tr>";
    // }
    
    // echo "</table>";
?>


<!doctype html>
<html lang="en">
  <head>
   
            <meta charset="utf-8">
            <meta http-equiv="X-UA-competible" content="IF-edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" 
            crossorigin="anonymous">

            <style>
                table
                {
                    margin:8px
                }
            </style>

            <title>Data-Data</title>

        </head>
        <body>
            <div class="container col-md-10 p-5 pt-2">
                <center>
                <h3><i class="fas fa-user-graduate mr-2"></i> DAFTAR SISWA</h3><hr> 
                    <table class='table table-striped table-bordered'>
                        <thead>
                        <tr>
                            <th>ID</th> 
                            <th>Nama siswa</th> 
                            <th>Objectif</th> 
                            
                        </tr>
                        </thead>        

                        <?php
                            while($data_siswa = Mysqli_fetch_array($eksekusi))
                            {
                                $id_siswa = $data_siswa['id_siswa'];
                                echo "<tr>";
                                echo "<td>".$data_siswa['id_siswa']."</td>";
                                echo "<td>".$data_siswa['nm_siswa']."</td>";
                                echo "<td>";
                                echo "<a href='nilai_siswa.php?id_siswa=$id_siswa' class='btn btn-success'>Lihat nilai</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            
                        ?>
                    
                </table>
            </center>
            </div>
  </body>
</html>
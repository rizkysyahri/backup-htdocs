<?php
    include "koneksi.php";

    $id_prov_get = $_GET['id_prov'];
    $sql = "select * from kabupaten WHERE id_prov = '$id_prov_get'";
    $eksekusi = Mysqli_query($conn,$sql);

    $nomor =1;

    // echo "<h3>Daftar Nilai</h3>";

    // echo "<table border='1'>";
    // echo "<tr>";
    // echo "<td>Id kabupaten</td>";
    // echo "<td>Nama kabupaten</td>";
    // echo "<td>Objektif</td>";
    // echo "<tr>";

    // while($data_kab = Mysqli_fetch_array($eksekusi))
    // {
    //     $id_kab = $data_kab['id_kab'];
    //     echo "<tr>";
    //     echo "<td>".$data_kab['id_kab']."</td>";
    //     echo "<td>".$data_kab['nm_kab']."</td>";
    //     echo "<td>";
    //     echo "<a href='sekolah_show.php?id_kab=$id_kab'>Lihat Sekolah</a>";
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
                <h3><i class="fas fa-user-graduate mr-2"></i> DAFTAR KABUPATEN</h3><hr> 
                    <table class='table table-striped table-bordered'>
                        <thead>
                        <tr>
                            <th>ID</th> 
                            <th>Nama Kabupaten</th> 
                            <th>Objectif</th> 
                            
                        </tr>
                        </thead>        

                        <?php
                            while($data_kab = Mysqli_fetch_array($eksekusi))
                            {
                                $id_kab = $data_kab['id_kab'];
                                echo "<tr>";
                                echo "<td>".$data_kab['id_kab']."</td>";
                                echo "<td>".$data_kab['nm_kab']."</td>";
                                echo "<td>";
                                echo "<a href='sekolah_show.php?id_kab=$id_kab' class='btn btn-success'>Lihat Sekolah</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    
                </table>
            </center>
            </div>
  </body>
</html>
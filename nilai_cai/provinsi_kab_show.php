<?php
    include "koneksi.php";

    $sql = "select * from provinsi";
    $eksekusi = Mysqli_query($conn,$sql);

    $nomor =1;

    // echo "<h3>Daftar Nilai</h3>";

    // echo "<table border='1'>";
    // echo "<tr>";
    // echo "<td>Id provinsi</td>";
    // echo "<td>Nama provinsi</td>";
    // echo "<td>Objektif</td>";
    // echo "<tr>";

    // while($data_prov = Mysqli_fetch_array($eksekusi))
    // {
    //     $id_prov = $data_prov['id_prov'];
    //     echo "<tr>";
    //     echo "<td>".$data_prov['id_prov']."</td>";
    //     echo "<td>".$data_prov['nm_prov']."</td>";
    //     echo "<td>";
    //     echo "<a href='kabupaten_show.php?id_prov=$id_prov'>Lihat Kabupaten</a>";
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
                <h3><i class="fas fa-user-graduate mr-2"></i> DAFTAR PROVINSI</h3><hr> 
                    <table class='table table-striped table-bordered'>
                        <thead>
                        <tr>
                            <th>ID</th> 
                            <th>Nama provinsi</th> 
                            <th>Objectif</th> 
                            
                        </tr>
                        </thead>        

                        <?php
                            while($data_prov = Mysqli_fetch_array($eksekusi))
                            {
                                $id_prov = $data_prov['id_prov'];
                                echo "<tr>";
                                echo "<td>".$data_prov['id_prov']."</td>";
                                echo "<td>".$data_prov['nm_prov']."</td>";
                                echo "<td>";
                                echo "<a href='kabupaten_show.php?id_prov=$id_prov' class='btn btn-success'>Lihat Kabupaten</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    
                </table>
            </center>
            </div>
  </body>
</html>
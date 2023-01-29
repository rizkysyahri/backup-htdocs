<?php
    include "koneksi.php";

    $id_siswa_get = $_GET['id_siswa'];
    $sql = "select * from mapel";
    $eksekusi = Mysqli_query($conn,$sql);

    // echo "<h3>Daftar Nilai</h3>";

    // echo "<table border='1'>";
    // echo "<tr>";
    // echo "<td>Id mapel</td>";
    // echo "<td>MTK</td>";
    // echo "<td>B.INDO</td>";
    // echo "<td>B.ING</td>";
    // echo "<tr>";

    // while($data_nilai = Mysqli_fetch_array($eksekusi))
    // {
    //     echo "<tr>";
    //     echo "<td>".$data_nilai['id_mapel']."</td>";
    //     echo "<td>".$data_nilai['nilai_mtk']."</td>";
    //     echo "<td>".$data_nilai['nilai_bindo']."</td>";
    //     echo "<td>".$data_nilai['nilai_bing']."</td>";
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
                <h3><i class="fas fa-user-graduate mr-2"></i> DAFTAR NILAI</h3><hr> 
                    <table class='table table-striped table-bordered'>
                        <thead>
                        <tr>
                            <th>ID</th> 
                            <th>MTK</th> 
                            <th>BAHASA INDONESIA</th> 
                            <th>BAHASA INGGRIS</th>  
                            
                        </tr>
                        </thead>        

                        <?php
                            while($data_nilai = Mysqli_fetch_array($eksekusi))
                            {
                                echo "<tr>";
                                echo "<td>".$data_nilai['id_mapel']."</td>";
                                echo "<td>".$data_nilai['nilai_mtk']."</td>";
                                echo "<td>".$data_nilai['nilai_bindo']."</td>";
                                echo "<td>".$data_nilai['nilai_bing']."</td>";
                                echo "</tr>";
                            }
                            
                        ?>
                    
                </table>
            </center>
            </div>
  </body>
</html>
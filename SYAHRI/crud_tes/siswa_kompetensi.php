<?php
    include "conn.php";
    include "menu.php";

    $sql       = "SELECT id_siswa, nm_siswa, nm_kompetensi FROM `siswa` inner 
                    join rombel on siswa.id_kelas = rombel.id_kelas inner   
                    join kompetensi on rombel.id_kompetensi = kompetensi.id_kompetensi";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Siswa & kompetensi</h3>";

    //echo "<a href='siswa_form_input.php'>Tambahkan Siswa</a>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Siswa</td>";
    echo "<td>Nama Siswa</td>";
    echo "<td>kompetensi keahlian</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        echo "<tr>";        
        echo "<td>".$data['id_siswa']."</td>";        
        echo "<td>".$data['nm_siswa']."</td>"; 
        echo "<td>".$data['nm_kompetensi']."</td>";                  
        echo "</tr>";          
    }
    echo "</table>"
 ?>   
<?php
    include "conn.php";
    include "menu.php";

    $sql       = "SELECT * FROM siswa inner join rombel 
                  on siswa.id_kelas = rombel.id_kelas";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Siswa</h3>";

    echo "<a href='siswa_form_input.php'>Tambahkan Siswa</a>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Siswa</td>";
    echo "<td>Nama Siswa</td>";
    echo "<td>Alamat</td>";
    echo "<td>Kelas</td>";
    echo "<td>Aksi</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        $id_siswa = $data['id_siswa'];
        echo "<tr>";        
        echo "<td>".$data['id_siswa']."</td>";        
        echo "<td>".$data['nm_siswa']."</td>"; 
        echo "<td>".$data['alamat']."</td>";        
        echo "<td>".$data['nm_kelas']."</td>"; 
        echo "<td>";    
        echo "<a href='siswa_form_update.php?id_siswa=$id_siswa'>Ubah</a> | ";            
        echo "<a href='siswa_hapus.php?id_siswa=$id_siswa' onclick='return confirm(`Serius ga Nih?!`)'>Hapus</a>";            
        echo "</td>";          
        echo "</tr>";          
    }
    echo "</table>"
 ?>   
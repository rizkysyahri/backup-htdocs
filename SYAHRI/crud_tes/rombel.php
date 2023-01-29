<?php
    include "conn.php";
    include "menu.php";

    $sql       = "SELECT * FROM `rombel` 
                  inner join kompetensi 
                  on rombel.id_kompetensi = kompetensi.id_kompetensi";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Rombel</h3>";

    echo "<a href='rombel_form_input.php'>Tambahkan Rombel Baru</a>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Kelas</td>";
    echo "<td>Nama kelas</td>";
    echo "<td>Jenjang</td>";
    echo "<td>kompetensi</td>";
    echo "<td>Aksi</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        $id_kelas = $data['id_kelas'];
        echo "<tr>";        
        echo "<td>".$data['id_kelas']."</td>";        
        echo "<td><a href='rombel_detail.php?id_kelas=$id_kelas'>".$data['nm_kelas']."</a></td>"; 
        echo "<td>".$data['jenjang']."</td>";        
        echo "<td>".$data['nm_kompetensi']."</td>";
        echo "<td>"; 
        echo "<a href='rombel_form_update.php?id_kelas=$id_kelas'>Ubah</a> | ";
        echo "<a href='rombel_hapus.php?id_kelas=$id_kelas' onclick='return confirm(`Serius ga Nih?!`)'>Hapus</a>";
        echo "</td>"; 
        echo "</tr>";          
    }
    echo "</table>"
 ?>   
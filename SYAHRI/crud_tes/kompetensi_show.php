<?php
    include "conn.php";
    include "menu.php";

    $sql       = "SELECT * FROM `kompetensi`";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Kompetensi Keahlian</h3>";

    echo "<a href='kompetensi_form_input.php'>Tambahkan Kompetensi Keahlian</a>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Kompetensi</td>";
    echo "<td>Nama Kompetensi</td>";
    echo "<td>Aksi</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        $id_kompetensi = $data['id_kompetensi'];
        echo "<tr>";        
        echo "<td>".$data['id_kompetensi']."</td>";        
        echo "<td><a href='kompetensi_siswa.php?id_kompetensi=$id_kompetensi'>".$data['nm_kompetensi']."</a></td>"; 
        echo "<td>"; 
        echo "<a href='kompetensi_form_update.php?id_kompetensi=$id_kompetensi'>Ubah</a> | ";
        echo "<a href='kompetensi_form_update.php?id_kompetensi=$id_kompetensi' onclick='return confirm(`Serius ga Nih?!`)'>Hapus</a>";
        echo "</td>"; 
        echo "</tr>";          
    }
    echo "</table>"
 ?>   
 
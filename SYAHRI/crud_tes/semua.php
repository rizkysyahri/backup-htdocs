<?php
    include "conn.php";
    include "menu.php";

    $sql       = "SELECT * FROM `kompetensi`";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Kompetensi Keahlian</h3>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Kompetensi</td>";
    echo "<td>Nama Kompetensi</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        echo "<tr>";        
        echo "<td>".$data['id_kompetensi']."</td>";        
        echo "<td>".$data['nm_kompetensi']."</td>"; 
        echo "</tr>";          
    }
    echo "</table>"
 ?>   
 
 <?php
    include "conn.php";

    $sql       = "SELECT * FROM `rombel` 
                  inner join kompetensi 
                  on rombel.id_kompetensi = kompetensi.id_kompetensi";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Rombel</h3>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Kelas</td>";
    echo "<td>Nama kelas</td>";
    echo "<td>Jenjang</td>";
    echo "<td>kompetensi</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        echo "<tr>";        
        echo "<td>".$data['id_kelas']."</td>";        
        echo "<td>".$data['nm_kelas']."</td>"; 
        echo "<td>".$data['jenjang']."</td>";        
        echo "<td>".$data['nm_kompetensi']."</td>"; 
        echo "</tr>";          
    }
    echo "</table>"
 ?>   

<?php
    include "conn.php";

    $sql       = "SELECT * FROM siswa inner join rombel 
                  on siswa.id_kelas = rombel.id_kelas";
    $eksekusi  = Mysqli_query($konek,$sql);
    
    echo "<h3>Daftar Siswa</h3>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id Siswa</td>";
    echo "<td>Nama Siswa</td>";
    echo "<td>Alamat</td>";
    echo "<td>Kelas</td>";
    echo "<tr>";
    while($data = Mysqli_fetch_array($eksekusi))
    {
        //echo $data['nm_kompetensi'];

        echo "<tr>";        
        echo "<td>".$data['id_siswa']."</td>";        
        echo "<td>".$data['nm_siswa']."</td>"; 
        echo "<td>".$data['alamat']."</td>";        
        echo "<td>".$data['id_kelas']."</td>"; 
        echo "</tr>";          
    }
    echo "</table>"
 ?>   
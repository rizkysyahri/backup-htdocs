<?php
    include "koneksi.php";

    $sql = "select * from provinsi";
    $eksekusi = Mysqli_query($conn,$sql);

    echo "<h3>Daftar Nilai</h3>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id provinsi</td>";
    echo "<td>Nama provinsi</td>";
    echo "<td>Objektif</td>";
    echo "<tr>";

    while($data_prov = Mysqli_fetch_array($eksekusi))
    {
        $id_prov = $data_prov['id_prov'];
        echo "<tr>";
        echo "<td>".$data_prov['id_prov']."</td>";
        echo "<td>".$data_prov['nm_prov']."</td>";
        echo "<td>";
        echo "<a href='kabupaten_show.php?id_provinsi=<?php echo $id_prov?>'>Lihat Kabupaten</a>";
        echo "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
?>


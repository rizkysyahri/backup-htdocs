<?php
    include "conn.php";
    $id_kelas = $_GET['id_kelas'];
    $sql      = "SELECT * FROM rombel where id_kelas = '$id_kelas'";
    $eksekusi = Mysqli_query($konek,$sql);
    $data     = Mysqli_fetch_array($eksekusi);
    $jenjang  = $data['jenjang'];
    $id_kompetensi = $data['id_kompetensi'];
?>
<h3>Form Input Rombel</h3>

<form action="rombel_update.php" method="POST">
    Nama Rombel :
    <input type="text" name="nm_kelas" value="<?php echo $data['nm_kelas']?>"> <br>

    Jenjang :
    <select name="jenjang">
    <?php
        if($jenjang == 10)
        {
            echo "<option value = '10' selected>kelas 10</option>";
            echo "<option value = '11'>kelas 11</option>";
            echo "<option value = '12'>kelas 12</option>";
        }
        else if($jenjang == 11)
        {
            echo "<option value = '10'>kelas 10</option>";
            echo "<option value = '11' selected>kelas 11</option>";
            echo "<option value = '12'>kelas 12</option>";
        }
        else
        {
            echo "<option value = '10'>kelas 10</option>";
            echo "<option value = '11'>kelas 11</option>";
            echo "<option value = '12' selected>kelas 12</option>";
        }
    ?>    
    </select>
    <br>

    kompetensi
    <select name="id_kompetensi">
    <?php
        $sql2      = "select * from kompetensi";
        $eksekusi2 = Mysqli_query($konek,$sql2);
        while($data2 = Mysqli_fetch_array($eksekusi2))
        {
            if($id_kompetensi == $data2['id_kompetensi'])
            {
                echo "<option value='".$data2['id_kompetensi']."' selected>".$data2['nm_kompetensi']."</option>";
            }
            else
            {
                echo "<option value='".$data2['id_kompetensi']."'>".$data2['nm_kompetensi']."</option>";
            }
        
        }
    ?>
    </select>
    <br>

    <input type="hidden" name = "id_kelas" value="<?php echo $id_kelas; ?>"> 
    <input type="submit" value="Masukkan"> 
</form>
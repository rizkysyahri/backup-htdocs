<?php
    include "conn.php";
    $id_siswa = $_GET['id_siswa'];
    $sql      = "SELECT * FROM siswa where id_siswa = '$id_siswa'";
    $eksekusi = Mysqli_query($konek,$sql);
    $data     = Mysqli_fetch_array($eksekusi); 
    $alamat   = $data['alamat'];
    $rombel   = $data['id_kelas'];  
?>
<h3>Form Input Siswa Baru</h3>

<form action="siswa_update.php" method="POST">
    Nama Siswa :
    <input type="text" name="nm_siswa" value="<?php echo $data['nm_siswa']?>"> <br>

    Alamat :
    <textarea name="alamat"><?php echo $data['alamat'];?></textarea>
    <br>

    Rombel
    <select name="id_kelas">
    <?php
        $sql2      = "select * from rombel";
        $eksekusi2 = Mysqli_query($konek,$sql2);
        while($data2 = Mysqli_fetch_array($eksekusi2))
    {
        if($rombel == $data2['id_kelas'])
        {
            echo "<option value='".$data2['id_kelas']."' selected>".$data2['nm_kelas']."</option>";
        }
        else
        {
            echo "<option value='".$data2['id_kelas']."'>".$data2['nm_kelas']."</option>";
        }
    }
    ?>
    </select>
    <br>

    <input type="hidden" name="id_siswa" value="<?php echo $id_siswa;?>"> 
    <input type="submit" value="Masukkan"> 
</form>
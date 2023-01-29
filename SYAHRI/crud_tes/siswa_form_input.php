<?php
    include "conn.php";
?>
<h3>Form Input Siswa Baru</h3>

<form action="siswa_input.php" method="POST">
    Nama Siswa Baru :
    <input type="text" name="nm_siswa"> <br>

    Alamat :
    <textarea name="alamat"></textarea>
    <br>

    Rombel
    <select name="id_kelas">
    <?php
        $sql      = "select * from rombel";
        $eksekusi = Mysqli_query($konek,$sql);
        while($data = Mysqli_fetch_array($eksekusi))
        {
            echo "<option value='".$data['id_kelas']."'>".$data['nm_kelas']."</option>";
        }
    ?>
    </select>
    <br>

    <input type="submit" value="Masukkan"> 
</form>
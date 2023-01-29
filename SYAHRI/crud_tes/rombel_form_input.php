<?php
    include "conn.php";
?>
<h3>Form Input Rombel</h3>

<form action="rombel_input.php" method="POST">
    Nama Rombel Baru :
    <input type="text" name="nm_kelas"> <br>

    Jenjang :
    <select name="jenjang">
        <option value="10">Kelas 10</option>
        <option value="11">Kelas 11</option>
        <option value="12">Kelas 12</option>
    </select>
    <br>

    kompetensi
    <select name="id_kompetensi">
    <?php
        $sql      = "select * from kompetensi";
        $eksekusi = Mysqli_query($konek,$sql);
        while($data = Mysqli_fetch_array($eksekusi))
        {
            echo "<option value='".$data['id_kompetensi']."'>".$data['nm_kompetensi']."</option>";
        }
    ?>
    </select>
    <br>

    <input type="submit" value="Masukkan"> 
</form>
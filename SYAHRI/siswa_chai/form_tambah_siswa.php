<?php
    include "header.php";
   // include "navigasi.php";
?>


<div class="container col-md-6 mt-4">
    <h4>Formulir Tambah Pemain</h4>

    <form action="input_siswa.php" method="POST">
        <div class="form-group">
            <label>Nama Pemain</label>
            <input type="input" name="nama siswa" class="form-control">
        </div>
        <div class="form-group">
            <label>kelas</label>
            <input type="input" name="kelas" class="form-control">
        </div>
        <div class="form-group">
            <label>alamat</label>
            <input type="input" name="alamat" class="form-control">
        </div>

        <input type="submit" name="" class="btn btn-primary">
    </form>
</div>


<?php
    include "footer.php";
?>
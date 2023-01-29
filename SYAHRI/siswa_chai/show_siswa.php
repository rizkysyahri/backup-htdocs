<?php
    include "koneksi.php";
    include "header.php";
    include "navigasi.php";
?>

    <div class="container">
        <h3 class="mt-2">Daftar Pemain</h3>
        <a href="form_tambah_siswa.php" class="btn btn-primary mb-2">Tambah Pemain</a>
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pemain</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
<?php
            $sql      = "SELECT * FROM siswa_chai";
            $eksekusi = mysqli_query($conn,$sql);
            $no_urut  = 1;

            echo "<h2>Manusia Langka</h2>";
            while($data = mysqli_fetch_array($eksekusi))
            {

                echo "<tr>";
                echo "<th>".$no_urut."</th>";
                echo "<td>".$data['nama_siswa']."</td>";
                echo "<td>".$data['kelas']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "</tr>";
                $no_urut++;
            }
?>
        </tbody>
        </table>
    </div>

<?php

    include "footer.php";
?>
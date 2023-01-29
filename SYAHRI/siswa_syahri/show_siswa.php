<?php
    include "koneksi.php";
    include "header.php";
    include "navigasi.php";

    

?>
    <div class="container">
        <h4 class="mt-2">Daftar Siswa</h4>

        <a href="form_tambah_siswa.php" class="btn btn-primary mb-3">TAMBAH</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
<?php
            $sql      = "SELECT * FROM siswa_syahri";
            $eksekusi = mysqli_query($conn,$sql);
            $no_urut = 1;
            
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
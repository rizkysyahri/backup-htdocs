<?php
    include "koneksi.php";
    include "header.php";
    include "navbar.php";
    include "menu.php";
    

    $sql      = "SELECT * FROM siswa_syahri";
    $eksekusi = mysqli_query($conn,$sql);

    // while($data = mysqli_fetch_array($eksekusi))
    // {
    //     echo $data['nama_siswa'];
    //     echo " - ";
    //     echo $data['kelas'];
    //     echo " - ";
    //     echo $data['alamat'];
    //     echo "<br>";
    // }
?>
    <div class="col-md-10 p-5 pt-2">
         <h3><i class="far fa-paper-plane mr-2"></i> NILAI SISWA</h3><hr>

         <a href="form_input_siswa.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA NILAI SISWA</a>
         <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th colspan="3" scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
<?php
    $no = 1;
    while($data = mysqli_fetch_array($eksekusi))
    {
        // echo $data['nama_siswa'];
        // echo " - ";
        // echo $data['kelas'];
        // echo " - ";
        // echo $data['alamat'];
        // echo "<br>";

        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data['nama_siswa']."</td>";
        echo "<td>".$data['kelas']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td><a href='' class='btn btn-primary'>Detail</a></td>";
        echo "<td><i class='fas fa-edit bg-success p-2 text-white rounded' data-toggle='tooltip' title='Edit'></i></td>";
        echo "<td><i class='fas fa-edit bg-danger p-2 text-white rounded' data-toggle='tooltip' title='Delete'></i></td>";
        echo "<tr>";

        $no++;
    }

?>
          </table>
     </div>



</div>

<?php
    //include "conten.php";
    include "footer.php";
?>
<?php
    
    include "koneksi.php";

    $sql = "select * from kabupaten";
    $eksekusi = Mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible"content="iE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
  </head>
  <body>
      <form action="provinsi_input.php" method="POST">
        Nama Provinsi:
        <input type="text" name="nm_prov"> <br>
        <input type="submit" name="kirim"> 
    </form>
  </body>
</html>
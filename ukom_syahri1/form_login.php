<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <title>login</title>
    <style>
        /* body {
            background-image: url(image/ng.jpg);
        } */
        .container {
            border-radius: 20px;
            
        }
    </style>
</head>
<body>

    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="image/2.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="login_cek.php" method="POST">
          <center><h3 style="color :blue">Peduli Masyarakat</h3></center>
          <div class="form-outline mb-4">
            <input type="text"  class="form-control form-control-lg" name="nik"/>
            <label class="form-label "><i class="fa-solid fa-image-portrait me-2"></i>Nomor Induk Kependudukan</label>
          </div>
          <div class="form-outline mb-4">
            <input type="date" class="form-control form-control-lg" name="tgl_lahir" />
            <label class="form-label" ><i class="fa-solid fa-calendar-days me-2"></i>Tanggal Lahir</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
          <button type="submit" class="btn btn-primary rounded-pill mt-2" style="width: 100%;"><i class="fa-solid fa-right-to-bracket me-2"></i>Masuk</button>
                <br>
                <!-- Button trigger modal -->
                    <a href="registrasi.php" class="btn btn-success rounded-pill mt-2" style="width:100%;" name="">
                    <i class="fa-solid fa-user-plus me-2"></i>Daftar Baru
                    </a>
      </div>
      <center>
          

          

          
          </center>
        </form>
      </div>
    </div>
  </div>
</section>

    


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/all.js"></script>
</body>
</html>


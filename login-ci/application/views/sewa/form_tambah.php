<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Data Sewa</title>

    <!-- Bootstrap core CSS -->
    <link href="/login-ci/assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/login-ci/assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="/login-ci/assets/admin/css/style.css" rel="stylesheet">
    <link href="/login-ci/assets/admin/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Data Sewa</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><?php echo "<a href='Admin/logout'>";?> Logout</a>"</li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  <h5 class="centered"><?php echo "Hallo ".$_SESSION['nama_lengkap']."!";	
		?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="http://localhost/login-ci/index.php/Sewa">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  	<div class="row mtbox">
             <div class="col-md-12 col-sm-12 mb">
                  	<a href='<?php echo base_url("index.php/sewa/tambah"); ?>'>Tambah Data</a><br><br>

		<?php $this->load->library('form_validation'); ?>
		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("sewa/tambah"); ?>
			<table cellpadding="8" class="table" border=0>
				<tr>
					<td>ID</td>
					<td><input type="text" name="input_id"  class="form-control" value="<?php echo set_value('input_id'); ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama" class="form-control"  value="<?php echo set_value('input_nama'); ?>"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="text" name="input_telp" class="form-control"  value="<?php echo set_value('input_telp'); ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="input_alamat" class="form-control" ><?php echo set_value('input_alamat'); ?></textarea></td>
				</tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="radio" name="input_jekel" value='pria' />Pria</td>
          <td><input type="radio" name="input_jekel" value='perempuan' />Perempuan</td>
         </tr> 
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</div>
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2020 - Butoireng
              <a href="index.html#" class="go-top">
                  <i class="fa fa-location-arrow"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  <script type="text/javascript">
    var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
            return true;
        }
    };

    $('#konvert').click(function () {   
        doc.fromHTML($('#konten').html(), 15, 15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('contoh-file.pdf');
    });
</script>

  </body>
</html>

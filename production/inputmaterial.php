<?php
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PENGAJUAN MATERIAL</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-building-o"></i> <span>KANSAI</span></a>
            </div>

            <div class="clearfix"></div>
            <?php 
 
if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }
}
?>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            </br>
            				            <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home "></i> Material <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="input-spec-material.php">Input Material</a></li>
                      <li><a href="daftarmaterial.php">Daftar Material</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Supplier <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inputsupplier.php">Input Supplier</a></li>
                      <li><a href="daftarsupplier.php">Daftar Supplier</a></li>
                    </ul>
                    </li>
                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inputuser.php">Input User</a></li>
                      <li><a href="daftaruser.php">Daftar User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Kedatangan Material<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="formulir.php">Formulir Warehouse</a></li>
                  <li><a href="daftarkedatangan-qc.php">Daftar Kedatangan</a></li>                                            
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Daftar Kedatangan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="daftarkedatangan-warehouse.php">Report Harian</a></li>
                                                       
                    </ul>
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">   
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

				<!-- /menu footer buttons -->
        
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                                       
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">                 
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
			<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>MATERIAL</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="" class="close-link"><i class="fa fa-close"></i> Close</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br/>
        
				<form action="aksi-simpan-material.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="_token" value="3VvnUaOw4QEl3fz7O2Ibi0Ny1p9RhmGh1Np4Nr7l">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="code_item">CODE MATERIAL<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="code_item"  required class="form-control col-md-7 col-xs-12" maxlength="13" minlength="11" name="code_item">
              </div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="desc">DESCRIPTION<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="desc" required class="form-control col-md-7 col-xs-12" name="desc">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="experid">EXPERID<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="experid" required class="form-control col-md-7 col-xs-12" name="experid">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="danger_level">DANGER LEVEL<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" required class="form-control col-md-7 col-xs-12"id="danger_level" name="danger_level">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="storage">STORAGE<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="storage" required class="form-control col-md-7 col-xs-12" name="storage">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="action">ACTION<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="action" required class="form-control col-md-7 col-xs-12"  name="action">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
        
			</div>
		</div>
	</div>
		
			</div>
		</div>
		<!-- /page content -->

	<!-- footer content -->
  <footer>
          <div class="pull-right">
          Developer by Sandi </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
  </body>
</html>
<script type="text/javascript">
	$("#code_item").on("keyup", function(){
		$("#code_item").val(destroyMask(this.value));
    this.value = createMask($("#code_item").val());
})

function createMask(string){
  console.log(string)
	return string.replace(/(\d{2})(\d{3})(\d{3})(\d{4})/,"$1-$2-$3-$4");
}

function destroyMask(string){
  console.log(string)
	return string.replace(/\D/g,'').substring(0, 12);
}	
	
	</script>
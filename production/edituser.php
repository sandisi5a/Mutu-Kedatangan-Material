<?php
// include database connection file
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
include("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['Id_karyawan'];
    $name=$_POST['Nama'];
    $pass=$_POST['pass'];
    $date=$_POST['date_of_entry'];
    $email=$_POST['email'];
    $departement=['departement'];
    // update user data
    $result = mysqli_query( "UPDATE tb_user SET Id_karyawan='$id',Nama='$name',
    pass='$pass,date_of_entry='$date',email='$email', departement='$departement WHERE Id_karyawan=$data", $conn);
    // Redirect to homepage to display updated user in list
    header("Location: daftaruser.php");
}
// Display selected user data based on id
// Getting id from url
$data = $_GET['Id_karyawan'];

// Fetech user data based on id
$result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tb_user WHERE Id_karyawan='$data'");
$data = mysqli_fetch_array($result);
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

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/kansai.jpg" alt="..." class="img-circle profile_img">
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
                      <li><a href="inputmaterial.php">Input Material</a></li>
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
                    <img src="images/kansai.jpg" alt="">Administrator
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
				<h2>USERS</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="" class="close-link"><i class="fa fa-close"></i> Close</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
																<br/>
				<form action="proses-edit-user.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
					<input type="hidden" name="_token" value="3VvnUaOw4QEl3fz7O2Ibi0Ny1p9RhmGh1Np4Nr7l">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">ID Karyawan<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text"  required class="form-control col-md-7 col-xs-12" name="id_karyawan" id="id" value="<?php echo $data['Id_karyawan'] ?>">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Karyawan<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" required class="form-control col-md-7 col-xs-12" name="nama_karyawan" ID="name" value="<?php echo $data['Nama'] ?>">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pass">Password<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="password" required class="form-control col-md-7 col-xs-12" name="password" id="pass" value="<?php echo $data['pass'] ?>">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date Of Entry<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="date" required class="form-control col-md-7 col-xs-12" id="date" name="date_of_entry" value="<?php echo $data['date_of_entry'] ?>">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" required class="form-control col-md-7 col-xs-12" id="email" name="email" value="<?php echo $data['email'] ?>">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept">Departement<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="departement" id="dept" value="<?php echo $data['departement'] ?>">
																<option value="Administrator">Administrator</option>
																<option value="Quality Control">Quality Control</option>
																<option value="Warehouse">Warehouse</option>
															</select>
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

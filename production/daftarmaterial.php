<?PHP
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
?>
<?Php
ini_set('display_errors', 0);?>

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
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="SUKSES"){
			echo "<div class='alert'>SUKSES DI TAMBAHKAN!</div>";
		}
	}
	?>

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
                    </ul>
                  
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
				<h2>DAFTAR MATERIAL</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="" class="close-link"><i class="fa fa-close"></i> Close</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br/>
        <form action="" method="get" align="right" >
                        <label>Cari :</label>
                        <input type="text" name="cari_data"/>
                        <input type="submit" value="submit"/>
                      </form>
                      <a href ="print-daftarmaterial.php" target="blank" class="btn btn-success" ><i class="fa fa-print"></i>Cetak Material </a>
 
<?php 
if(isset($_GET['cari_data'])){
	$cari = $_GET['cari_data'];
	
}
?>
<br></br>
  
				<div class="table-responsive">
					<table id="datatable" class="table table-bordered">
						<thead>
            <tr>
							<th>No</th>
							<th>Code Material</th>
							<th>Description</th>
              <th>Experied</th>
              <th>Danger Level</th>
              <th>Storage</th>
              <th>Action</th>
              <th width="20%">Setting</th>
						</tr>
            <?php 
	include'koneksi.php';
    $no = 1;
    if($cari !=''){
      $select = mysqli_query($conn,"SELECT * FROM `tb_material` WHERE code_item  like '%".$cari."%' or 
      description_material like '%".$cari."%' or experid like '%".$cari."%' or danger_level like '%".$cari."%'  or storage like '%".$cari."%'
      or action_material like '%".$cari."%' "); 
    }else{
     $select = mysqli_query($conn,"SELECT * FROM `tb_material` WHERE code_item order by code_item");
    }
   if(mysqli_num_rows($select)){
		while($d = mysqli_fetch_array($select)){
			?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo $d['code_item']; ?></td>
				<td><?php echo $d['description_material']; ?></td>
				<td><?php echo $d['experid']; ?> Bulan</td>
        <td><?php echo $d['danger_level']; ?></td>
        <td><?php echo $d['storage']; ?></td>
        <td><?php echo $d['action_material']; ?></td>
				<td style="width: 125px">
									<div class="btn-group" role="group">
										<a href="edit-material.php?code_item=<?php echo $d['code_item'] ?>" class="btn btn-info btn-xs">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
										<a href="delete-material.php?code_item=<?php echo $d['code_item'] ?>"
										   onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs"><i
													class="fa fa-minus-square" aria-hidden="true"></i> Delete</a>
                    <a href="print-detail-material.php?code_item=<?php echo $d['code_item'] ?>" target="blank"
										   class="btn btn-success btn-xs"><i class="fa fa-minus-square" aria-hidden="true"></i> Print</a>
									</div>
								</td>
			</tr>
      <?php 
      }}else{
        echo '<tr><td colspan="10">Tidak Ada Data</td></tr>';
      }
      ?>
						</thead>
						
					</table>
				</div>
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

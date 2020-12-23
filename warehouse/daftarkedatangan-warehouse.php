<?PHP
session_start();
if (!isset( $_SESSION["Warehouse"])){
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
     <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    
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
                <h2>Warehouse</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            </br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
           <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Kedatangan Material<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="formulir.php">Formulir Warehouse</a></li>
                  <li><a href="daftarkedatangan-warehouse.php">Daftar Kedatangan</a></li>                                        
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

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
                    <img src="images/kansai.jpg" alt="">Warehouse
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">                                       
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
				<h2>Daftar Kedatangan Material</h2>
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
                      <?php
                      include '.cetakperiode.php'
                      ?>
<?php 
if(isset($_GET['cari_data'])){
	$cari = $_GET['cari_data'];
}
?>
<br></br>
  
				<div class="table-responsive">
					<table id="datatable" class="table table-bordered">
						<thead>
            <tr >
                            <th>No</th>
                            <th>Code Material</th>
                            <th>Description</th>
                            <th>Tanggal Kedatangan</th>
                            <th>Perusahaan</th>
                            <th>No Surat Jalan</th>
                            <th>No PO</th>
                            <th>No Lot</th>
                            <th>Status</th>
                            <th>Action</th>
                            
						</tr>
            <?php 
  include'koneksi.php';
  
    $no = 1;
    if($cari !=''){
      $select = mysqli_query($conn,"SELECT * FROM tb_kedatangan_detail 
      join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
      inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan
      inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier where no_sj like '%".$cari."%' or 
      no_po like '%".$cari."%' or join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item like '%".$cari."%'"); 
    }else{
     $select = mysqli_query($conn,"SELECT * FROM tb_kedatangan_detail 
     inner join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
     inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan
     inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier");
    }
   if(mysqli_num_rows($select)){
   while($d = mysqli_fetch_array($select)){
			?>
			<tr>
                <td><?php echo $no++; ?></td>
                <td style="width: 120px"><?php echo $d['code_item']; ?></td>
                <td><?php echo $d['description_material']; ?></td>
                <td style="width: 100px"><?php echo date('d m Y', strtotime($d["tgl_masuk"])); ?></td>
                <td><?php echo $d['supplier']; ?></td>
                <td><?php echo $d['no_sj']; ?></td>
                <td><?php echo $d['no_po']; ?></td>
                <td><?php echo $d['lot_no']; ?></td>
                <td><?php
        $iod = $d['iodine_value_test'] > $d['iodine_value'] && $d['iodine_value_test'] < $d['iodine_value2']|| $d['iodine_value_test'] == $d['iodine_value2']|| $d['iodine_value_test'] == $d['iodine_value'];
        $app = $d['appearance_test'] == $d['appearance'];
        $cn  = $d['colour_number_test'] == $d['colour_number'] || $d['colour_number_test'] < $d['colour_number'];
        $av  = $d['acid_value_test'] == $d['acid_value'] || $d['acid_value_test'] < $d['acid_value'];
        $sgs = $d['specifikasi_gravity_test'] > $d['specifikasi_gravity'] && $d['specifikasi_gravity_test'] < $d['specifikasi_gravity2']|| $d['specifikasi_gravity_test'] == $d['specifikasi_gravity']|| $d['specifikasi_gravity_test'] == $d['specifikasi_gravity'];
        $m   = $d['melting_point_test'] > $d['melting_point'] && $d['melting_point_test'] < $d['melting_point2']|| $d['melting_point_test'] == $d['melting_point2']|| $d['melting_point_test'] == $d['melting_point'];
        $ht  = $d['heating_test_test'] == $d['heating_test'] || $d['heating_test_test'] < $d['heating_test'];
        $ap1 = $d['aniline_point_test'] > $d['aniline_point'] && $d['aniline_point_test'] < $d['aniline_point2']|| $d['aniline_point_test'] == $d['aniline_point2']|| $d['aniline_point_test'] == $d['aniline_point'];
        $wc  = $d['water_content_test'] > $d['water_content'] && $d['water_content_test'] < $d['water_content2']|| $d['water_content_test'] == $d['water_content2']|| $d['water_content_test'] == $d['water_content'];
        $bp  = $d['boiling_point_test'] > $d['boiling_point'] && $d['boiling_point_test'] < $d['boiling_point2']|| $d['boiling_point_test'] == $d['boiling_point2']|| $d['boiling_point_test'] == $d['boiling_point'];
        if (($iod) and ($app) and ($cn) and ($av) and ($sgs) and ($m) and ($ht) and ($ap1) and ($wc) and ($bp)){
          echo"Good";
        }else {
          echo"Hold";
        } 

  
                ?></td>
                <td style="width: 180px">
               
                <?php
                
          if(empty($d['appearance_test'])){
            ?><a href="formulir1.php?id_kedatangan_detail=<?php echo $d['id_kedatangan_detail'] ?>" class="btn btn-info btn-xs"><i
            class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>;<?php
          }else{
            echo "Close ";    
            ?><a href="formulir1.php?id_kedatangan_detail=<?php echo $d['id_kedatangan_detail'] ?>" class="btn btn-info btn-xs"><i
            class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>;
            <a href="material-inspection-report.php?id_kedatangan_detail=<?php echo $d['id_kedatangan_detail'] ?>"target="blank" class="btn btn-info btn-xs"> <i
            class="fa fa-print" aria-hidden="true"></i> Print</a>;<?php
      
    }
          ?>   
								
			</tr>
			<?php 
		}}else{
      echo '<tr><td colspan="9">Tidak Ada Data</td></tr>';
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

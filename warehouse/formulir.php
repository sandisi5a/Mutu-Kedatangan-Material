<?php
session_start();
if (!isset( $_SESSION["Warehouse"])){
  header("location: ../index.php");
  exit;
}
require_once 'koneksi.php';
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from tb_material");
		while($d = mysqli_fetch_array($data))
	
?>

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
                  
                  <li><a><i class="fa fa-bar-chart-o"></i>Kedatangan Material<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="formulir.php">Formulir Warehouse</a></li>
                  <li><a href="daftarkedatangan-warehouse.php">Daftar Kedatangan</a></li>                                        
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
                    <img src="images/kansai.jpg" alt="">Warehouse
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
  <!-- di isi warehouse -->
    <div class="right_col" role="main">
			<div class="row">
				<div>			
	<form action="proses.trans.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
	
	<div class="row">
		<div class="x_panel">
			<div class="x_title">
				<h2>FORMULIR KEDATANGAN MATERIAL UNIT RESIN</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="" class="close-link"><i class="fa fa-close"></i> Close</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>			
				<div class="x_title">
					<h2>DI ISI OLEH WAREHOUSE</h2>
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="nama_perusahaan">Nama Perusahaan</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="hidden" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value=""  required="required" class="form-control col-md-7 col-xs-12">
            <select class="form-control combobox" id="nama_perusahaan" name="nama_perusahaan" required="">
            <option disabled selected> Pilih </option>
                          <?php 
                            $sql=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tb_supllier");
                            while ($data=mysqli_fetch_array($sql)) {
                          ?>
                            <option value="<?=$data['code_supplier']?>"><?=$data['supplier']?></option> 
                          <?php
                            }
                          ?>
                            </select>
            </div>
					</div>
				</div>				
			</div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="tgl_masuk">Tanggal Masuk</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="date" type = "hidden" id="tgl_masuk" name="tgl_masuk" placeholder="<?php echo date('d F y');?>" value=" <?php echo date('d F y');?>" required="" class="form-control col-md-7 col-xs-12">
              </div>
					</div>
						
					</div>
					
					<div class="form-group">
					
          
          </div>
          </div>
          <?php
    
    $tglnow = date("Ymd");
    $sql = "SELECT RIGHT(id_kedatangan, 3)+1 AS id_kedatangan FROM tb_kedatangan WHERE SUBSTRING(id_kedatangan, 1, 8)='$tglnow' ORDER BY RIGHT(id_kedatangan, 3) DESC LIMIT 1";
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], $sql));

    if(!empty($data['id_kedatangan'])) { 
        if(strlen($data['id_kedatangan']) == 1) {
            $no_request = "".$tglnow."000".$data['id_kedatangan'];
        } else if(strlen($data['id_kedatangan']) == 2) {
            $no_request = "".$tglnow."0".$data['id_kedatangan'];
        } else if(strlen($data['id_kedatangan']) == 3) {
            $no_request = "".$tglnow.$data['id_kedatangan'];
        }
    } else {
        $no_request = "".$tglnow."001";
    }
    
?>
           
					<div class="x_title">
					<div class="clearfix"></div>
				<!-- Editable table -->
<div class="card">
  <div class="card-body">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kedatangan">No Transaksi<span class="required">*</span></label>
						        <div class="col-md-3 col-sm-3 col-xs-6">
							    <input type="text" id="id_kedatangan" required class="form-control col-md-7 col-xs-12" readonly name="id_kedatangan" value="<?php echo $no_request ?>">              
                                </div>
                                <button type="submit" name="simpan" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Simpan</button>
                                
                                <button type="reset" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reset</button>
                            </div>
                            <br></br>
                      <div>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Code Item</th>
            <th class="text-center">Nama Material</th>
            <th class="text-center">No Surat jalan</th>
            <th class="text-center">No PO</th>
            <th class="text-center">No Lot</th>
            <th class="text-center">Quantity</th>
            
          </tr>
        </thead>
        <tbody>
                                <tr>
                                <td width="20%">
                                        <input type="hidden" name="code_item" id="code_item">
                                        <select id="code_item" class="form-control combobox" name="code_item" onchange="changeValue(this.value)">
                                                <option disabled="" selected="">Pilih</option>
                                                <?php 
                                                $sql=mysqli_query($GLOBALS["___mysqli_ston"],"SELECT * FROM tb_material");
                                                $jsArray = "var prdName = new Array();\n";
                                                while ($data=mysqli_fetch_array($sql)) {
                                                
                                                    echo '<option value="'.$data['code_item'].'">'.$data['code_item'].'</option> ';
                                                    $jsArray .= "prdName['" . $data['code_item'] . "'] = {description_material:'" . addslashes($data['description_material']) . "'};\n";
                                                }
                                                ?>
                                                </select>
                                    </td>
                                    <td width="20%">
                                    <input type="Text" id="description_material" name="description_material"  class="form-control col-md-7 col-xs-12">
                                    </td>
                                    <td width="20%">
                                        <input type="text" name="nomor_sj" id="nomor_sj"  autocomplete="off" required class="form-control">
                                    </td>
                                    <td width="12%">
                                        <input type="text" name="no_po" id="no_po"  autocomplete="off" required class="form-control">
                                    </td>
                                    <td width="15%">
                                        <input type="text" name="no_lot" id="no_lot"  maxlength="11" autocomplete="off" required class="form-control">
                                    </td>
                                    <td width="20%">
                                        <input type="text" name="qty" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    </td>
                                    <input type="hidden" name="Appearance" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="colour_number" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="acid_value" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="iodine_value" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Specifikasi_Gravity" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Heating_Test" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Melting_Point" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Aniline_Point" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Water_Content" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Boiling_Point" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="id_kedatangan_detail" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                    <input type="hidden" name="Id_Karyawan" id="qty"  maxlength="5" autocomplete="off" required class="form-control">
                                   
                                </tr>
                            </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
			
          </div>
			<div>
			
          
          </div>
          </div>
</form>
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
    function changeValue(x) {

      var postForm = { //Fetch form data
            'code'     : x //Store name fields value
      };

      $.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : 'getMaterial.php', //Your form processing file URL
            data      : postForm, //Forms name
            success   : function(data) {
              document.getElementById('description_material').value = data;
              //console.log(data);
            }
        });
    };
</script> 
    
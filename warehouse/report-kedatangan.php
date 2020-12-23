<?PHP
session_start();
if (!isset( $_SESSION["Warehouse"])){
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
                  <li><a><i class="fa fa-book"></i>Report Kedatangan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="report-kedatangan.php">Report Harian</a></li>
                                                       
                    </ul>
                  </li>
                  
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
				<h2>MATERIAL</h2>
				<ul class="nav navbar-right panel_toolbox">
					
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br/>
  
				<div class="table-responsive">
					<table id="datatable" class="table table-bordered">
						<thead>
            <tr >
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Code Item</th>
                            <th>Tanggal Kedatangan</th>
                            <th>Perusahaan</th>
                            <th>No Surat Jalan</th>
                            <th>No PO</th>
                            <th>Action</th>
						</tr>
            <?php 
	include'koneksi.php';
    $no = 1;
    $strql ="SELECT * FROM tb_kedatangan_detail 
            inner join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
            inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan
            inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier";
		$data = mysqli_query($conn, $strql)or die("Query Salah");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_kedatangan']; ?></td>
				<td><?php echo $d['code_item']; ?></td> 
				<td><?php echo $d['tgl_masuk']; ?></td>
                <td><?php echo $d['supplier']; ?></td>
                <td><?php echo $d['no_sj']; ?></td>
                <td><?php echo $d['no_po']; ?></td>
				<td style="width: 125px">
        <?php
          if(!empty($d['appearance_test'])){
            echo "<a href=../production/print-detail-kedatangan.php>Print";
          }else{
            echo "Complet";
          }
          ?>      
								</td>
			</tr>
			<?php 
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
<script src="js/jquery-ui.min.js"></script>

<script type="text/javascript">

    $(document).on('keydown', '.autocomplete_txt', function() {

        var id = this.id;
        var splitid = id.split('_');
        var index = splitid[1];

        // Initialize jQuery UI autocomplete
        $( '#'+id ).autocomplete({
              source: function( request, response ) {
                $.ajax({
                  url : 'cari_data.php',
                  dataType: "json",
                  data: {
                    search: request.term
                  },
                  success: function( data ) {
                    response( data );
                  }
                });
              },
              
              select: function (event, ui) {

                id_arr = $(this).attr('id');
	  		    id = id_arr.split("_");

                $(this).val(ui.item.label);
                
                $('#id_barang_'+id[2]).val(ui.item.value);
                return false;

              }

        });
    });


    //adds extra table rows
    var i=$('table tr').length;
    $(".addmore").on('click',function(){
        html = '<tr>';
        html += '<td width="60%"><input type="hidden" name="id_barang['+i+']" id="id_barang_'+i+'" /> <input type="text" name="nm_barang" id="nm_barang_'+i+'" required class="form-control autocomplete_txt" autocomplete="off"></td>';
        html += '<td width="20%"><input type="text" name="qty['+i+']" id="qty_'+i+'" placeholder="0" required class="form-control" autocomplete="off"></td>';
        html += '</tr>';

        $('table').append(html);
        i++;
    });


</script>

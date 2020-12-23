<?php
session_start();
if (!isset( $_SESSION["QC"])){
  header("location: ../index.php");
  exit;
}

include("koneksi.php");

$data = $_GET['id_kedatangan_detail'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM tb_kedatangan_detail join tb_kedatangan ON tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan 
          join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier 
          join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item  WHERE id_kedatangan_detail='$data'");
$data = mysqli_fetch_array($result);

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
                <h2>Administrator</h2>
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
                  <li><a href="daftarkedatangan-qc.php">Daftar Kedatangan</a></li>    
                  <li><a href="formulir1.php">Formulir Kedatangan Spesifikasi</a></li>                                    
                    </ul>
                  </li>
                  </ul>
                  </li>
                </ul>
              </div>
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
  <!-- di isi warehouse -->
    <div class="right_col" role="main">
			<div class="row">
				<div>			
	<form action="aksi-simpan-trans-qc.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
	<input type="hidden" name="_token" value="3VvnUaOw4QEl3fz7O2Ibi0Ny1p9RhmGh1Np4Nr7l">
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
						<input type="text" id="nama_perusahaan" readonly name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $data['supplier']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
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
							<input type="" type = "hidden" readonly id="tgl_masuk" name="tgl_masuk" placeholder="" value=" <?php echo $data['tgl_masuk'];?>" required="" class="form-control col-md-7 col-xs-12">
              </div>
					</div>
						
					</div>
					
					<div class="form-group">
					
          
          </div>
          </div>
                    
					<div class="x_title">
					<div class="clearfix"></div>
				<!-- Editable table -->
<div class="card">
  <div class="card-body">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kedatangan">No Transaksi<span class="required">*</span></label>
						        <div class="col-md-3 col-sm-3 col-xs-6">
							    <input type="text" id="id_kedatangan" required class="form-control col-md-7 col-xs-12" readonly name="id_kedatangan" value="<?php echo $data['id_kedatangan'] ?>">              
                                </div>
                            </div>
                            <br></br>
                            <br></br>
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
                                        <input type="text" readonly name="code_item" id="code_item"value="<?php echo $data['code_item']; ?>"class="form-control">
                                   </td>
                                    <td width="20%">
                                    <input type="Text" readonly id="description_material" name="description_material" value="<?php echo $data['description_material']; ?>" class="form-control">
                                    </td>
                                    <td width="20%">
                                        <input type="text" readonly name="nomor_sj" id="nomor_sj"  autocomplete="off" value="<?php echo $data['no_sj']; ?>;" required class="form-control">
                                    </td>
                                    <td width="12%">
                                        <input type="text" readonly name="no_po" id="no_po"  autocomplete="off" value = "<?php echo $data['no_po']; ?>"required class="form-control">
                                    </td>
                                    <td width="15%">
                                        <input type="text" readonly name="no_lot" id="no_lot"  autocomplete="off" value="<?php echo $data['lot_no']; ?>" required class="form-control">
                                    </td>
                                    <td width="20%">
                                        <input type="text" readonly name="qty" id="qty"  autocomplete="off" value = "<?php echo $data['qty']; ?>"required class="form-control">
                                    </td>
                                   
                                </tr>
                            </tbody>
      </table>
    </div>
</div>
<h2>DIISI OLEH QUALITY CONTROL DEPARTEMENT</h2>
<div class="x_title">
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Appearance">Appearance</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="Appearance" name="Appearance"  placeholder="Appearance" value="<?php echo $data['appearance_test']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="colour_number">Colour Number</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="colour_number" name="colour_number"  maxlength="3" placeholder="Colour Number" value="<?php echo $data['colour_number_test']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="acid_value">Acid Value</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="acid_value"  name="acid_value"  maxlength="3" placeholder="Acid Value" value="<?php echo $data['acid_value_test']; ?>" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Iodine_Value">Iodine Value</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Iodine_Value" name="iodine_value"  maxlength="3" placeholder="Iodine Value" value="<?php echo $data['iodine_value_test']; ?>" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="specifikasi_value">Specifikasi Gravity</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="specifikasi_value" o name="Specifikasi_Gravity"  maxlength="3" placeholder="Specifikasi Gravity" value="<?php echo $data['specifikasi_gravity_test']; ?>" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="heating_value">Heating Test</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Heating_Test"  name="Heating_Test"  maxlength="3" required="" placeholder="Heating Test" value="<?php echo $data['heating_test_test']; ?>" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Melting_Point">Melting Point</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Melting_Point" name="Melting_Point"  maxlength="3" placeholder="Melting_Point" value="<?php echo $data['heating_test_test']; ?>"  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Aniline_Point">Aniline Point</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="Aniline_Point"  name="Aniline_Point" maxlength="3" placeholder="Aniline Point" value="<?php echo $data['aniline_point_test']; ?>" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>  
          <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Water_Content">Water Content</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="Water_Content"  name="Water_Content" maxlength="3" placeholder="Water Content" value="<?php echo $data['water_content_test']; ?>" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
          <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Boiling_Point">Boiling Point</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="Boiling_Point"  name="Boiling_Point" maxlength="3" placeholder="Boiling Point" value="<?php echo $data['boiling_point_test']; ?>" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
          <input type="hidden" id="id_kedatangan_detail"  name="id_kedatangan_detail" value="<?php echo $data['id_kedatangan_detail']; ?>" required="required" class="form-control col-md-7 col-xs-12">
				</div>				
			</div>
      </div>
      </div>
      <div align="center">
	  <button type="submit" class="btn btn-success">Submit</button>
	</div>
<!-- Editable table -->
			
          </div>
			
          
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
    const $tableID = $('#table');
 const $BTN = $('#export-btn');
 const $EXPORT = $('#export');

 const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

 $('.table-add').on('click', 'i', () => {

   const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

   if ($tableID.find('tbody tr').length === 0) {

     $('tbody').append(newTr);
   }

   $tableID.find('table').append($clone);
 });

 $tableID.on('click', '.table-remove', function () {

   $(this).parents('tr').detach();
 });

 $tableID.on('click', '.table-up', function () {

   const $row = $(this).parents('tr');

   if ($row.index() === 0) {
     return;
   }

   $row.prev().before($row.get(0));
 });

 $tableID.on('click', '.table-down', function () {

   const $row = $(this).parents('tr');
   $row.next().after($row.get(0));
 });

 // A few jQuery helpers for exporting only
 jQuery.fn.pop = [].pop;
 jQuery.fn.shift = [].shift;

 $BTN.on('click', () => {

   const $rows = $tableID.find('tr:not(:hidden)');
   const headers = [];
   const data = [];

   // Get the headers (add special header logic here)
   $($rows.shift()).find('th:not(:empty)').each(function () {

     headers.push($(this).text().toLowerCase());
   });

   // Turn all existing rows into a loopable array
   $rows.each(function () {
     const $td = $(this).find('td');
     const h = {};

     // Use the headers from earlier to name our hash keys
     headers.forEach((header, i) => {

       h[header] = $td.eq(i).text();
     });

     data.push(h);
   });

   // Output the result
   $EXPORT.text(JSON.stringify(data));
 });
</script> 
    
<script type="text/javascript">
  function getValueAcid() {
    var postForm = { //Fetch form data
        'code'     : document.getElementById("code_item").value //Store name fields value
    };

    $.ajax({ //Process the form using $.ajax()
        type      : 'POST', //Method type
        url       : 'getAcidMaterial.php', //Your form processing file URL
        data      : postForm, //Forms name
        success   : function(data) {
          var data_split = data.split(/:/);
          var x = document.getElementById("acid_value");
          
          if(parseFloat(x.value) < parseFloat(data_split[1]) || parseFloat(x.value) > parseFloat(data_split[2])) {
             alert('Nilai Tersebut kurang dari minimum atau maksimum dari master, apakah bisa di toleransi');
             x.value = '';
          }

          console.log(data);
        }
    });
  };

  function getValueSpesifikasi() {
    var postForm = { //Fetch form data
        'code'     : document.getElementById("code_item").value //Store name fields value
    };

    $.ajax({ //Process the form using $.ajax()
      type      : 'POST', //Method type
      url       : 'getSpesifikasiMaterial.php', //Your form processing file URL
      data      : postForm, //Forms name
      success   : function(data) {
        var data_split = data.split(/:/);
        var x = document.getElementById("specifikasi_value");

        if(parseFloat(x.value) < parseFloat(data_split[1]) || parseFloat(x.value) > parseFloat(data_split[2])) {
           alert('Nilai Tersebut kurang dari minimum atau maksimum dari master, apakah bisa di toleransi');
           x.value = '';
        }

        console.log(data);
      }
    });
  };
  
  function getValueHeating() {
    var postForm = { //Fetch form data
        'code'     : document.getElementById("code_item").value //Store name fields value
    };

    $.ajax({ //Process the form using $.ajax()
      type      : 'POST', //Method type
      url       : 'getHeatingMaterial.php', //Your form processing file URL
      data      : postForm, //Forms name
      success   : function(data) {
        var data_split = data.split(/:/);
        var x = document.getElementById("Heating_Test");

        if(parseFloat(x.value) < parseFloat(data_split[1]) || parseFloat(x.value) > parseFloat(data_split[2])) {
           alert('Nilai Tersebut kurang dari minimum atau maksimum dari master, apakah bisa di toleransi');
           x.value = '';
        }

        console.log(data);
      }
    });
  };

  function getValueAniline() {
    var postForm = { //Fetch form data
        'code'     : document.getElementById("code_item").value //Store name fields value
    };

    $.ajax({ //Process the form using $.ajax()
      type      : 'POST', //Method type
      url       : 'getAnilineMaterial.php', //Your form processing file URL
      data      : postForm, //Forms name
      success   : function(data) {
        var data_split = data.split(/:/);
        var x = document.getElementById("Aniline_Point");

        if(parseFloat(x.value) < parseFloat(data_split[1]) || parseFloat(x.value) > parseFloat(data_split[2])) {
           alert('Nilai Tersebut kurang dari minimum atau maksimum dari master, apakah bisa di toleransi');
           x.value = '';
        }

        console.log(data);
      }
    });
  };
  function getValueWater() {
    var postForm = { //Fetch form data
        'code'     : document.getElementById("code_item").value //Store name fields value
    };

    $.ajax({ //Process the form using $.ajax()
      type      : 'POST', //Method type
      url       : 'getWaterMaterial.php', //Your form processing file URL
      data      : postForm, //Forms name
      success   : function(data) {
        var data_split = data.split(/:/);
        var x = document.getElementById("Water_Content");

        if(parseFloat(x.value) < parseFloat(data_split[1]) || parseFloat(x.value) > parseFloat(data_split[2])) {
           alert('Nilai Tersebut kurang dari minimum atau maksimum dari master, apakah bisa di toleransi');
           x.value = '';
        }

        console.log(data);
      }
    });
  };
  
  function getValueBoiling() {
    var postForm = { //Fetch form data
        'code'     : document.getElementById("code_item").value //Store name fields value
    };

    $.ajax({ //Process the form using $.ajax()
      type      : 'POST', //Method type
      url       : 'getWaterMaterial.php', //Your form processing file URL
      data      : postForm, //Forms name
      success   : function(data) {
        var data_split = data.split(/:/);
        var x = document.getElementById("Boiling_Point");

        if(parseFloat(x.value) < parseFloat(data_split[1]) || parseFloat(x.value) > parseFloat(data_split[2])) {
           alert('Nilai Tersebut kurang dari minimum atau maksimum dari master, apakah bisa di toleransi');
           x.value = '';
        }

        console.log(data);
      }
    });
  };
</script>
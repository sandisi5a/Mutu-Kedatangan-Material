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
                      <li><a href="formulir-1.php">Formulir Warehouse</a></li>
                      <li><a href="formulir-2.php">Formulir Quality Control</a></li>                                          
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i>Report<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="reportharian.php">Report Harian</a></li>
                      <li><a href="reportbulanan.php">Report Bulanan</a></li>                                          
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
        <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
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
                                       
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
				<div>
				
	<form action="aksi-simpan-material.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
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
					<h2>SPESIFIKASI MATERIAL</h2>
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="CODE_MATERIAL">CODE MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="code_item" name="code_item" placeholder="Code Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="NAMA_MATERIAL">NAMA MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="NAMA_MATERIAL" name="nomor_sj" placeholder="Nama Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Experid">EXPERID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Experid" name="Experid" placeholder="Experid" value="" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="danger_level">DANGER LEVEL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" name="danger_level" required="" placeholder="Danger Level" value="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Storage">STORAGE</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Storage" name="Storage" placeholder="Storage" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="action_material">ACTION MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="action_material" name="action_material" placeholder="Action Material" value="" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
      </div>
      </div>
      <br> </br>
      <h2>SPESIFIKASI MATERIAL UNIT RESIN</h2>
<!--javascript-->
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
          <script>
          $(document).ready(function(){
            
              $("#pilihspesifikasi").change(function(){
                  $(this).find("option:selected").each(function(){
                      var optionValue = $(this).attr("value");
                      if(optionValue == 'Fatty Acid'){
                          //console.log('sandi kampret 1');
                          document.getElementById("boxspesifikasi1").style.display = "block";
                          document.getElementById("boxspesifikasi2").style.display = "none";
                          document.getElementById("boxspesifikasi3").style.display = "none";
                          document.getElementById("boxspesifikasi4").style.display = "none";
                      } else if(optionValue == 'Modified Oil') {
                          //console.log('sandi kampret 2');
                          document.getElementById("boxspesifikasi1").style.display = "none";
                          document.getElementById("boxspesifikasi2").style.display = "block";
                          document.getElementById("boxspesifikasi3").style.display = "none";
                          document.getElementById("boxspesifikasi4").style.display = "none";
                      } else if(optionValue == 'Katalis') {
                          //console.log('sandi kampret 2');
                          document.getElementById("boxspesifikasi1").style.display = "none";
                          document.getElementById("boxspesifikasi2").style.display = "none";
                          document.getElementById("boxspesifikasi3").style.display = "block";
                          document.getElementById("boxspesifikasi4").style.display = "none";
                      } else if(optionValue == 'Monomer') {  
                          //console.log('sandi kampret 2');
                          document.getElementById("boxspesifikasi1").style.display = "none";
                          document.getElementById("boxspesifikasi2").style.display = "none";
                          document.getElementById("boxspesifikasi3").style.display = "none";
                          document.getElementById("boxspesifikasi4").style.display = "block";
                      } else if(optionValue == 'solvent') {  
                          //console.log('sandi kampret 2');
                          document.getElementById("boxspesifikasi1").style.display = "none";
                          document.getElementById("boxspesifikasi2").style.display = "none";
                          document.getElementById("boxspesifikasi3").style.display = "none";
                          document.getElementById("boxspesifikasi4").style.display = "block";
                      }
                  });
              }).change();
          });
          </script>
<!-- option-->
<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kategori Spesifikasi<span class="required">*</span></label>
		<div class="col-md-6 col-sm-6 col-xs-12">     
        <select id="pilihspesifikasi" class="form-control col-md-7 col-xs-12" name="departement">
            <option value=""></option>
            <option value="Fatty Acid">Fatty Acid</option>
            <option value="Modified Oil">Modified Oil</option>
            <option value="Katalis">Katalis</option>
            <option value="Monomer">Monomer</option>
            <option value="solvent">Solvent</option>
        </select>
    </div>
<!-- Fatty acid -->
<div style="display: none;" id="boxspesifikasi1">
<div class="x_title">
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="CODE_MATERIAL">CODE MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="CODE_MATERIAL" name="Code Material" placeholder="Code Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="NAMA_MATERIAL">NAMA MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="NAMA_MATERIAL" name="nomor_sj" placeholder="Nama Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Experid">EXPERID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Experid" name="Experid" placeholder="Experid" value="" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="danger_level">DANGER LEVEL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" name="danger_level" required="" placeholder="Danger Level" value="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Storage">STORAGE</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Storage" name="Storage" placeholder="Storage" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="action_material">ACTION MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="action_material" name="action_material" placeholder="Action Material" value="" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
      </div>
      </div>
      <div align="center">
	  <button type="submit" class="btn btn-success">Submit</button>
	</div>
    </div>
<!-- MOdified Oil -->
    <div style="display: none;" id="boxspesifikasi2">
    <div class="x_title">
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="CODE_MATERIAL">CODE MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="CODE_MATERIAL" name="Code Material" placeholder="Code Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="NAMA_MATERIAL">NAMA MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="NAMA_MATERIAL" name="nomor_sj" placeholder="Nama Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Experid">EXPERID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Experid" name="Experid" placeholder="Experid" value="" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="danger_level">DANGER LEVEL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" name="danger_level" required="" placeholder="Danger Level" value="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Storage">STORAGE</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Storage" name="Storage" placeholder="Storage" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="action_material">ACTION MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="action_material" name="action_material" placeholder="Action Material" value="" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
      </div>
      </div>
      <div align="center">
	  <button type="submit" class="btn btn-success">Submit</button>
	</div>
</div>
<!-- Katalis -->
    <div style="display: none;" id="boxspesifikasi3">
    <div class="x_title">
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="CODE_MATERIAL">CODE MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="CODE_MATERIAL" name="Code Material" placeholder="Code Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="NAMA_MATERIAL">NAMA MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="NAMA_MATERIAL" name="nomor_sj" placeholder="Nama Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Experid">EXPERID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Experid" name="Experid" placeholder="Experid" value="" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="danger_level">DANGER LEVEL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" name="danger_level" required="" placeholder="Danger Level" value="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Storage">STORAGE</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Storage" name="Storage" placeholder="Storage" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="action_material">ACTION MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="action_material" name="action_material" placeholder="Action Material" value="" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
      </div>
      </div>	
      <div align="center">
	  <button type="submit" class="btn btn-success">Submit</button>
	</div>	
    </div>
    <!-- Monomer -->
    <div style="display: none;" id="boxspesifikasi4">
    <div class="x_title">
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="CODE_MATERIAL">CODE MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="CODE_MATERIAL" name="Code Material" placeholder="Code Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="NAMA_MATERIAL">NAMA MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="NAMA_MATERIAL" name="nomor_sj" placeholder="Nama Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Experid">EXPERID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Experid" name="Experid" placeholder="Experid" value="" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="danger_level">DANGER LEVEL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" name="danger_level" required="" placeholder="Danger Level" value="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Storage">STORAGE</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Storage" name="Storage" placeholder="Storage" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="action_material">ACTION MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="action_material" name="action_material" placeholder="Action Material" value="" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
      </div>
      </div>
      <div align="center">
	  <button type="submit" class="btn btn-success">Submit</button>
	</div>
    </div>
    <!--solvent-->
    <div style="display: none;" id="boxspesifikasi5">
    <div class="x_title">
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12">
					<br></br>	
				<div class="x_content">
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="CODE_MATERIAL">CODE MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="CODE_MATERIAL" name="Code Material" placeholder="Code Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="NAMA_MATERIAL">NAMA MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="NAMA_MATERIAL" name="nomor_sj" placeholder="Nama Material" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Experid">EXPERID</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="TEXT" id="Experid" name="Experid" placeholder="Experid" value="" required="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
				</div>				
			</div>
			<div class="col-md-6 col-xs-12">				
				<br></BR>
				<div class="x_content">
                <div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="danger_level">DANGER LEVEL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="danger_level" name="danger_level" required="" placeholder="Danger Level" value="" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="Storage">STORAGE</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="Storage" name="Storage" placeholder="Storage" value=""  required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="action_material">ACTION MATERIAL</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="Text" id="action_material" name="action_material" placeholder="Action Material" value="" required="required" class="form-control col-md-7 col-xs-12">
						</div>
            <div align="center">
	          <button type="submit" class="btn btn-success">Submit</button>
  	        </div>
					</div>
				</div>				
			</div>
      </div>
      </div>
          
      </div>   
</div>

</div>

</form>
	
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

<?php
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
include 'koneksi.php';
$vcode			        =	$_POST['code_item'];
$vdesc			        =	$_POST['desc'];
$vexperid		        =	$_POST['Experid'];
$vdanger_level	    =	$_POST['danger_level'];
$vstorage		        =	$_POST['Storage'];
$vaction		        =	$_POST['action_material'];
$appearance	        =	$_POST['appearance'];
$colour_number	    =	$_POST['colour_number'];
$acid_value		      =	$_POST['acid_value'];
$iodine_value	      =	$_POST['iodine_value1'];
$iodine_value2	    =	$_POST['iodine_value2'];
$sg         		    =	$_POST['specifikasi_gravity1'];
$sg2         		    =	$_POST['specifikasi_gravity2'];
$heating_test		    =	$_POST['heating_test'];
$melting_point		  =	$_POST['melting_point'];
$melting_point2		  =	$_POST['melting_point2'];
$aniline_point		  =	$_POST['aniline_point1'];
$aniline_point2		  =	$_POST['aniline_point2'];
$water_content  	  =	$_POST['water_content1'];
$water_content2  	  =	$_POST['water_content2'];
$boiling_point		  =	$_POST['boiling_point1'];
$boiling_point2		  =	$_POST['boiling_point2'];
$simpan = "INSERT into tb_material (code_item, description_material, experid, danger_level, storage, action_material, appearance, 
colour_number, acid_value, iodine_value, iodine_value2, specifikasi_gravity, specifikasi_gravity2, heating_test,
 melting_point, melting_point2, aniline_point, aniline_point2, water_content, water_content2, boiling_point, boiling_point2) VALUES 
('$vcode', '$vdesc', '$vexperid','$vdanger_level', '$vstorage','$vaction', '$appearance', '$colour_number', '$acid_value',
'$iodine_value','$iodine_value2','$sg','$sg2','$heating_test',
'$melting_point','$melting_point2', '$aniline_point','$aniline_point2','$water_content','$water_content2', '$boiling_point','$boiling_point2')";
$sql_simpan = mysqli_query($conn,$simpan);
if(!$sql_simpan){?>
  "<script>alert('Periksa Input Anda.');window.location='input-spec-material.php';</script>";<?php
} else {?>

echo "<script>alert('Data berhasil ditambah.');window.location='daftarmaterial.php';</script>";<?php
}


?>
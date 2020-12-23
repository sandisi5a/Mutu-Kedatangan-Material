<?php
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
include "koneksi.php";
   
  $code			          =	$_POST["code_item"];
  $desc			          =	$_POST['desc'];
  $experid		        =	$_POST['Experid'];
  $danger_level	      =	$_POST['danger_level'];
  $storage		        =	$_POST['Storage'];
  $action		          =	$_POST['action_material'];
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
  $heating_test		    =	$_POST['heating_test'];
  $aniline_point		  =	$_POST['aniline_point1'];
  $aniline_point2		  =	$_POST['aniline_point2'];
  $water_content  	  =	$_POST['water_content1'];
  $water_content2  	  =	$_POST['water_content2'];
  $boiling_point		  =	$_POST['boiling_point1'];
  $boiling_point2		  =	$_POST['boiling_point2'];
  $simpan = "UPDATE tb_material SET code_item='$code',description_material='$desc',experid='$experid',danger_level ='$danger_level',
  storage='$storage',action_material='$action',appearance='$appearance',colour_number=$colour_number,acid_value=$acid_value,
  iodine_value=$iodine_value,iodine_value2=$iodine_value2,specifikasi_gravity='$sg',specifikasi_gravity2='$sg2',melting_point='$melting_point',melting_point2='$melting_point2',
  heating_test='$heating_test',aniline_point=$aniline_point,aniline_point2='$aniline_point2',water_content='$water_content',water_content2='$water_content2',
  boiling_point='$boiling_point',boiling_point2='$boiling_point2' WHERE code_item='$code'";
  $sql_simpan = mysqli_query($conn,$simpan);
      if(!$sql_simpan){?>
        "<script>alert('Periksa Input Anda.');window.location='input-spec-material.php';</script>";<?php
      } else {?>
      echo "<script>alert('Data berhasil di ubah.');window.location='daftarmaterial.php';</script>";<?php
      }
      ?>
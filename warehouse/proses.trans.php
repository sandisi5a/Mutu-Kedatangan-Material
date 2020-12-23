<?php session_start();
include 'koneksi.php';                  


$nama_perusahaan      = $_POST['nama_perusahaan'];
$tgl_masuk            = $_POST['tgl_masuk'];
$id_kedatangan        = $_POST['id_kedatangan'];
$code_item            = $_POST['code_item'];
$description_materia  = $_POST['description_material'];
$nomor_sj             = $_POST['nomor_sj'];
$no_po                = $_POST['no_po'];
$no_lot               = $_POST['no_lot'];
$qty                  = $_POST['qty'];
  $appearance           = $_POST['Appearance'];
  $colour_number        = $_POST['colour_number'];
  $acid_value           = $_POST['acid_value'];
  $iodine_value         = $_POST['iodine_value'];
  $specifikasi_gravity  = $_POST['Specifikasi_Gravity'];
  $heating_test         = $_POST['Heating_Test'];
  $melting_point        = $_POST['Melting_Point'];
  $aniline_point        = $_POST['Aniline_Point'];
  $water_content        = $_POST['Water_Content'];
  $boiling_point        = $_POST['Boiling_Point'];
  $id_kedatangan_detail = $_POST['id_kedatangan_detail'];


              $proses="INSERT INTO tb_kedatangan (id_kedatangan, code_supplier, tgl_masuk) VALUES ('$id_kedatangan', '$nama_perusahaan',' $tgl_masuk')";
              $sql= mysqli_query($conn, $proses);
              $proses2 = "INSERT INTO tb_kedatangan_detail(id_kedatangan_detail, id_kedatangan, code_item, no_sj, no_po, lot_no, qty, appearance_test,
                 colour_number_test, acid_value_test, iodine_value_test, specifikasi_gravity_test, heating_test_test, melting_point_test, 
                 aniline_point_test, water_content_test, boiling_point_test, Id_karyawan) VALUES ('$id_kedatangan_detail','$id_kedatangan','$code_item','$nomor_sj',
                 '$no_po','$no_lot','$qty','$appearance','$colour_number','$acid_value','$iodine_value','$specifikasi_gravity','$heating_test','$melting_point',
                 '$aniline_point','$water_content','$boiling_point','".$_SESSION["idkaryawan"]."')";
              $sql2= mysqli_query($conn, $proses2);

                if($sql2){?>                  
                  <script>alert('Data berhasil diperbaharui.');window.location='daftarkedatangan-warehouse.php';</script>;<?php
                }else {?>
                  <script>alert('jangan asal pencet yah periksa dulu dong wkwkwkwk!');history.go(-1)</script><?php
                };
?>
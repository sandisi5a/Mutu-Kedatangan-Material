<?php
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
include("koneksi.php");

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
    // update user data
    $hasil  = "UPDATE tb_kedatangan_detail SET id_kedatangan_detail='$id_kedatangan_detail',
    id_kedatangan ='$id_kedatangan',code_item='$code_item',no_sj ='$nomor_sj',no_po='$no_po',lot_no ='$no_lot',
    qty='$qty',appearance_test='$appearance' ,colour_number_test='$colour_number',acid_value_test ='$acid_value',
    iodine_value_test='$iodine_value',specifikasi_gravity_test ='$specifikasi_gravity',heating_test_test='$heating_test',
    melting_point_test='$melting_point',aniline_point_test='$aniline_point',water_content_test='$water_content',
    boiling_point_test='$boiling_point',id_karyawan='".$_SESSION["idkaryawan"]."' WHERE id_kedatangan_detail=$id_kedatangan_detail";
    $result = mysqli_query($conn,$hasil);
    if(!$result){?>
      "<script>alert('Periksa Input Anda.');window.location='';</script>";<?php
    } else {?>
    
    echo "<script>alert('Data berhasil diperbaharui.');window.location='daftarkedatangan-qc.php';</script>";<?php
    }
?>   
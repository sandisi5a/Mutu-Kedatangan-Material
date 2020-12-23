<?php
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
include'koneksi.php';
$vsupplier       =$_POST["Supplier"];
$valamat         =$_POST["alamat"];
$vno_telp        =$_POST["no_telp"];
$code_Supplier   =$_POST["code_Supplier"];

$query ="UPDATE tb_supllier SET code_supplier= '$code_Supplier',supplier= '$vsupplier',alamat='$valamat',no_telp='$vno_telp' WHERE code_supplier=$code_Supplier";
$sql_simpan = mysqli_query($conn,$query );
if(!$sql_simpan){?>
  "<script>alert('Periksa Input Anda.');window.location='inputsupplier.php';</script>";<?php
} else {?>

 "<script>alert('Data Berhasil Dirubah.');window.location='daftarsupplier.php';</script>";<?php
}

?>
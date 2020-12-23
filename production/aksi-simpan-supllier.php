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

$sql_simpan = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT into tb_supllier (code_supplier, supplier, alamat, no_telp) VALUES 
('', '$vsupplier', '$valamat','$vno_telp')")or die ("Gagal Perintah SQL".mysqli_error($GLOBALS["___mysqli_ston"]));
if(!$sql_simpan){?>
  "<script>alert('Periksa Input Anda.');window.location='inputsupplier.php';</script>";<?php
} else {?>

 "<script>alert('Data berhasil ditambah.');window.location='daftarsupplier.php';</script>";<?php
}


?>
<?php
session_start();
if (!isset( $_SESSION["admin"])){
  header("location: ../index.php");
  exit;
}
include'koneksi.php';
$vId_karyawan        = $_POST['id_karyawan'];
$vnama_karyawan      = $_POST['nama_karyawan'];
$vpassword           = $_POST['password'];
$vdate_of_entry      = $_POST['date_of_entry'];
$vemail              = $_POST['email'];
$vdepartement        = $_POST['departement'];
$sql_simpan = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO tb_user(Id_karyawan, Nama, pass, date_of_entry, email, departement) VALUES 
('$vId_karyawan', '$vnama_karyawan', '$vpassword','$vdate_of_entry', '$vemail','$vdepartement')");
if ($sql_simpan) { ?>
	<script>alert('Data berhasil diperbaharui.');window.location='daftaruser.php';</script><?php
} else{?>
<script>alert('Periksa Input Anda.');window.location='daftaruser.php';</script>";<?php
}
?>

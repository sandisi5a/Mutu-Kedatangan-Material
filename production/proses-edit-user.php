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

$query ="UPDATE tb_user SET Id_karyawan='$vId_karyawan',Nama='$vnama_karyawan',pass='$vpassword',date_of_entry='$vdate_of_entry',
email='$vemail',departement='$vdepartement' WHERE Id_karyawan= '$vId_karyawan'";
$sql_simpan = mysqli_query($conn,$query );
if(!$sql_simpan){?>
  "<script>alert('Periksa Input Anda.');window.location='inputsupplier.php';</script>";<?php
} else {?>

 "<script>alert('Data Berhasil di Ubah.');window.location='daftaruser.php';</script>";<?php
}

?>
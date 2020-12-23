<?php

include("koneksi.php");

session_start();
if (!isset( $_SESSION["admin"])){
  header("location: index.php");
  exit;
}

if( isset($_GET['code_supplier']) ){
    $data = $_GET['code_supplier'];

    
    $sql = ("DELETE FROM tb_supllier WHERE code_supplier=$data");
    $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: daftarsupplier.php');
    } else {
         mysqli_error($conn);
        die("gagal menghapus...");
    }
}

 
?>
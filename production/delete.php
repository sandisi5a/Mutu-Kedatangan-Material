<?php

include("koneksi.php");

if( isset($_GET['Id_karyawan']) ){
    $data = $_GET['Id_karyawan'];

    
    $sql = ("DELETE FROM tb_user WHERE Id_karyawan=$data");
    $query = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: daftaruser.php');
    } else {
         mysqli_error($conn);
        die("gagal menghapus...");
    }
}

 
?>
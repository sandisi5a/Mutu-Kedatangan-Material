<?php
require_once 'koneksi.php';
if(!empty($_POST['code'])) {
    $code = $_POST['code'];
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT acid_value, specifikasi_gravity, specifikasi_gravity2 FROM tb_material WHERE code_item='$code'"));
    echo $data['acid_value'] .':'. $data['specifikasi_gravity'] .':'. $data['specifikasi_gravity2'];
}
?>
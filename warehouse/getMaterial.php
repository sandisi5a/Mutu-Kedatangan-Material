<?php
require_once 'koneksi.php';
if(!empty($_POST['code'])) {
    $code = $_POST['code'];
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT description_material FROM tb_material WHERE code_item='$code'"));
    echo $data['description_material'];
}
?>
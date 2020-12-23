<?php
require_once 'koneksi.php';
if(!empty($_POST['code'])) {
    $code = $_POST['code'];
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT melting_point, heating_test, heating_test2 FROM tb_material WHERE code_item='$code'"));
    echo $data['melting_point'] .':'. $data['heating_test'] .':'. $data['heating_test2'];
}
?>
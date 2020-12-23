<?php
require_once 'koneksi.php';
if(!empty($_POST['code'])) {
    $code = $_POST['code'];
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT melting_point, water_content, water_content2 FROM tb_material WHERE code_item='$code'"));
    echo $data['melting_point'] .':'. $data['water_content'] .':'. $data['water_content2'];
}
?>
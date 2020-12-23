<?php
require_once 'koneksi.php';
if(!empty($_POST['code'])) {
    $code = $_POST['code'];
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT melting_point, boiling_point, boiling_point FROM tb_material WHERE code_item='$code'"));
    echo $data['melting_point'] .':'. $data['boiling_point'] .':'. $data['boiling_point2'];
}
?>  
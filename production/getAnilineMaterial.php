<?php
require_once 'koneksi.php';
if(!empty($_POST['code'])) {
    $code = $_POST['code'];
    $data = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT melting_point, aniline_point, aniline_point2 FROM tb_material WHERE code_item='$code'"));
    echo $data['melting_point'] .':'. $data['aniline_point'] .':'. $data['aniline_point2'];
}
?>
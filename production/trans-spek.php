<?php
$Appearance         = $_GET['appearance'];
$colour_number      = $_GET['colour_number'];
$acid_value         = $_GET['acid_value'];
$iodine_value       = $_GET['iodine_value'];
$sg                 = $_GET['specifikasi_gravity'];
$heating_test       = $_GET['heating_test'];
$melting_point      = $_GET['melting_point'];
$aniline_point      = $_GET['aniline_point'];
$water_content      = $_GET['water_content'];
$Boiling_point      = $_GET['boiling_point'];
$data               = $_GET['code_item']

$tampil = "SELECT * FROM tb_material WHERE code_item ='$data' ";
   $cekspek = mysqli_query($conn, $tampil);
   $array = mysqli_fetch_array($cekspek);
        if 
        $Appearance          = $array['appearance'];
        $colour_number       = $array['colour_number'];
        $acid_value          = $array['acid_value'];
        $iodine_value        = $array['iodine_value'];
        $sg                  = $array['specifikasi_gravity'];
        $heating_test        = $array['heating_test'];
        $melting_point       = $array['melting_point'];
        $aniline_point       = $array['aniline_point'];
        $water_content       = $array['water_content'];
        $Boiling_point       = $array['boiling_point'];
   else
        header("location:daftarkedatangan.php");




?>
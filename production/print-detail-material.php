<?php

require_once __DIR__ . '\vendor\autoload.php';
include 'koneksi.php';
$strql ="SELECT * FROM `tb_material` WHERE code_item='".$_GET['code_item']."' order by code_item ASC";
		$data = mysqli_query($conn, $strql)or die("Query Salah");
		while($material = mysqli_fetch_array($data)){


$mpdf = new \Mpdf\Mpdf();
$html ='
<!DOCTYPE html>
<html>
<head>
 <title>Detail Data Bahan Baku</title>
</head>
<style>
		section {
			clear: both;			
			padding: 10px;
			border: 1px solid black;
			display: inline-block;
			width: 100%;
			clear: both;
			box-sizing: border-box;
		}
		div {
			float: left;
		}

		.div-1 {
			width: 50%;
		}
		.div-2 {
			width: 50%;
						
        }
        .lebar{
            width: 150px;
        }
        .center{
            text-align: center;
        }
        .right{
            text-align: right;
        }
	</style>
</head>
<body>
<br align="left">PT KANSAI PRAKARSA COATINGS</br>
<br align="left">Unit Resin</br> 

<h2 class="center">Detail Bahan Baku </h2>

<br> </br>
        <div class="div-1">
        <table>
        <tr><td><label class="" for="name">Code Bahan Baku *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["code_item"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Nama Bahan Baku *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["description_material"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Experid *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["experid"].'" class="lebar"></td></tr>
        </table>	
        </div>
                <div class="div-2">
                <table>
                <tr><td><label class="" for="name">Tingkat Bahaya *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["danger_level"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Penyimpanan *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["storage"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Perlakuan *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["action_material"].'" class="lebar"></td></tr>
                </table>	
                </div>
    
    <br></br>
    <h2 class="center">Detail Spesifikasi Bahan Baku </h2>
    	
        <div class="div-1">
        <table>
        <tr><td><label class="" for="name">Appearance *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["appearance"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Colour Number *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["colour_number"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Acid Value *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["acid_value"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Iodine Value *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["iodine_value"].'-'.$material["iodine_value2"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Specifikasi Gravity *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["specifikasi_gravity"].'-'.$material["specifikasi_gravity2"].'" class="lebar"></td></tr>
        </table>	
        </div>
                <div class="div-2">
                <table>
                <tr><td><label class="" for="name">Heating Test *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["heating_test"].'-'.$material["heating_test2"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Melting Point *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["melting_point"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Aniline Point *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["aniline_point"].'-'.$material["aniline_point2"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Water content *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["water_content"].'-'.$material["water_content2"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">BOiling Point *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["boiling_point"].'-'.$material["boiling_point2"].'" class="lebar"></td></tr>
                '; }
                $html.=   '</table>	
                </div>
        
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('detailmaterial.pdf','I');
?>

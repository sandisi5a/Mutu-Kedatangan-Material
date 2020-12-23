<?php

require_once __DIR__ . '\vendor\autoload.php';
include 'koneksi.php';
$exp  = $material['experid'];
$tgl1 = $_GET['tgl_masuk'];
$exp1 = date('Y-m-d', strtotime('+1 month', strtotime($tgl1)));
$strql = "SELECT * FROM tb_kedatangan_detail 
inner join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan 
inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier";
$data = mysqli_query($conn, $strql)or die("Query Salah");
while($d = mysqli_fetch_array($data)){
    $iod = $d['iodine_value_test'] > $d['iodine_value'] && $d['iodine_value_test'] < $d['iodine_value2']|| $d['iodine_value_test'] == $d['iodine_value2']|| $d['iodine_value_test'] == $d['iodine_value'];
    $app = $d['appearance_test'] == $d['appearance'];
    $cn  = $d['colour_number_test'] == $d['colour_number'] || $d['colour_number_test'] < $d['colour_number'];
    $av  = $d['acid_value_test'] == $d['acid_value'] || $d['acid_value_test'] < $d['acid_value'];
    $sgs = $d['specifikasi_gravity_test'] > $d['specifikasi_gravity'] && $d['specifikasi_gravity_test'] < $d['specifikasi_gravity2']|| $d['specifikasi_gravity_test'] == $d['specifikasi_gravity']|| $d['specifikasi_gravity_test'] == $d['specifikasi_gravity'];
    $m   = $d['melting_point_test'] > $d['melting_point'] && $d['melting_point_test'] < $d['melting_point2']|| $d['melting_point_test'] == $d['melting_point2']|| $d['melting_point_test'] == $d['melting_point'];
    $ht  = $d['heating_test_test'] == $d['heating_test'] || $d['heating_test_test'] < $d['heating_test'];
    $ap1 = $d['aniline_point_test'] > $d['aniline_point'] && $d['aniline_point_test'] < $d['aniline_point2']|| $d['aniline_point_test'] == $d['aniline_point2']|| $d['aniline_point_test'] == $d['aniline_point'];
    $wc  = $d['water_content_test'] > $d['water_content'] && $d['water_content_test'] < $d['water_content2']|| $d['water_content_test'] == $d['water_content2']|| $d['water_content_test'] == $d['water_content'];
    $bp  = $d['boiling_point_test'] > $d['boiling_point'] && $d['boiling_point_test'] < $d['boiling_point2']|| $d['boiling_point_test'] == $d['boiling_point2']|| $d['boiling_point_test'] == $d['boiling_point'];
    
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
        .lebar-1{
            width: 500px;
        }
            .lebar-2{
                width: 500px;
        }
        .center{
            text-align: center;
        }
        .right{
            text-align: right;
        }
        .heigth{
            height: 100px;
        }
	</style>
</head>

<body>
<br align="left">PT KANSAI PRAKARSA COATINGS</br>
<br align="left">Unit Resin</br> 

<h2 class="center">Material Inspection Report </h2>
<table align="right"><tr><td><label class="lebar" for="name">Date *</label></td>
        <td><input type="text" name="Supplier" value="'.$d["tgl_masuk"].'" class="lebar"></td></tr></table>
<br> </br>
    	
        <table border="1" align="center" width=800px>
        <tr><td><label class="lebar" for="name">Material Name *</label></td>
        <td><input type="text" name="Supplier" value="'.$d["description_material"].'" class="lebar-1"></td></tr>
        <tr><td><label class="lebar" for="name">Code Material *</label></td>
        <td><input type="text" name="Supplier" value="'.$d["code_item"].'" class="lebar-1"></td></tr>
        <tr><td><label class="lebar" for="name">Lot No *</label></td>
        <td><input type="text" name="Supplier" value="'.$d["lot_no"].'" class="lebar-1"></td></tr>                
                <tr><td><label class="lebar" for="name">Supplier / Maker *</label></td>
                <td><input type="text" name="Supplier" value="'.$d["supplier"].'" class="lebar-1"></td></tr>
                <tr><td><label class="lebar">Surat Jalan NO. *</label></td>
                <td><input type="text" name="Supplier" value="'.$d["no_sj"].'" class="lebar-1"></td></tr>
                <tr><td><label class="lebar" for="name">L/C No *</label></td>
                <td><input type="text" name="Supplier" value="'.$d[""].'" class="lebar-1"></td></tr>
                <tr><td><label class="lebar" for="name">Quantity *</label></td>
                <td><input type="text" name="Supplier" value="'.$d["qty"].'" class="lebar-1"></td></tr>
                <tr><td><label class="lebar" for="name">Incoming Date *</label></td>
                <td><input type="text" name="Supplier" value="'.$d["tgl_masuk"].'" class="lebar-1"></td></tr>
                <tr><td><label class="lebar" for="name">Result *</label></td>
                ';if (($iod) and ($app) and ($cn) and ($av) and ($sgs) and ($m) and ($ht) and ($ap1) and ($wc) and ($bp)){
                    $html .= '<td>Good</td>';
                  }else {
                    $html .= '<td>Hold</td>';
                  } 
                  ;$html .='</tr>
                <tr><td><label class="lebar" for="name">Recheck *</label></td>
                <td><input type="text" name="Supplier" value="" class="lebar-1"></td></tr>
                <tr><td><label class="lebar" for="name">Remark *</label></td>
                <td><input type="text" name="Supplier" value="" class="lebar-1"></td></tr>
                </table>	
    <br></br>  
    <table Border="1" align="right" width=300px >
    <tr><td><label class"">Report By</label></td>
    <td><label class"">Approve By</label></td></tr>
    <tr><td class="heigth"></td>
    <td class="heigth"></td></tr>
    '; }
    $html.=   '    </table>    
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-kedatangan.pdf','I');
?>

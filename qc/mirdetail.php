<?php

require_once __DIR__ . '\vendor\autoload.php';
include 'koneksi.php';
$strql ="SELECT * FROM tb_kedatangan_detail 
            inner join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
            inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan 
            inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier";
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
        <tr><td><label class="" for="name">Supplier *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["supplier"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Nama Bahan Baku *</label></td>
        <td><input type="text" name="Id Transaksi" value="'.$material["id_kedatangan "].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Tanggal *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["tgl_masuk"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Code Material *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["code_item"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Nama Material *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["description_material"].'" class="lebar"></td></tr>
        </table>	
        </div>
                <div class="div-2">
                <table>
                <tr><td><label class="" for="name">Nomor Surat Jalan *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["no_sj"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">No PO *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["no_po"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Lot Number *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["lot_no"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Qty *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["qty"].'" class="lebar"></td></tr>
                </table>	
                </div>
    
    <br></br>
    <h2 class="center">Detail Spesifikasi Bahan Baku </h2>
    	
        <div class="div-1">
        <table>
        <tr><td><label class="" for="name">Appearance *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["appearance_test"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Colour Number *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["colour_number_test"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Acid Value *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["acid_value_test"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Iodine Value *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["iodine_value_test"].'" class="lebar"></td></tr>
        <tr><td><label class="" for="name">Specifikasi Gravity *</label></td>
        <td><input type="text" name="Supplier" value="'.$material["specifikasi_gravity_test"].'" class="lebar"></td></tr>
        </table>	
        </div>
                <div class="div-2">
                <table>
                <tr><td><label class="" for="name">Heating Test *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["heating_test_test"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Melting Point *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["melting_point_test"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Aniline Point *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["aniline_point_test"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Water content *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["water_content_test"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">BOiling Point *</label></td>
                <td><input type="text" name="Supplier" value="'.$material["boiling_point_test"].'" class="lebar"></td></tr>
                '; }
                $html.=   '</table>	
                </div>
        
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('MirDetail.pdf','I');
?>

<?php

require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage('L');
$html ='<!DOCTYPE html>
<html>
<head>
 <title>Detail Data Bahan Baku</title>
</head>
</head>

<body>
<br align="left">PT KANSAI PRAKARSA COATINGS</br>
<br align="left">Unit Resin</br> 

<h2 align ="center">Daftar Material </h2>
    	
<table border="1" cellpadding="5" width="1000">
<thead>
<tr >
    <th>No</th>
    <th>Code Material</th>
    <th>Description</th>
    <th>Experide</th>
    <th>Level Bahaya</th>
    <th>Penyimpanan</th>
    <th>Aksi </th>
    <th >Spesifikasi</th>
    
</tr>';
$data = mysqli_query($conn,"SELECT * FROM tb_material where code_item");
$no=1;
while($d = mysqli_fetch_array($data)){
$html .= '<tr>
				<td> '.$no++.'</td>
				<td> '.$d["code_item"].'</td>
				<td> '.$d["description_material"].'</td>
				<td> '.$d["experid"].'</td>
                <td> '.$d["danger_level"].'</td>
                <td> '.$d["storage"].'</td>
                <td> '.$d["action_material"].'</td>
                <td> <ul>
                    <li>Appearance = '.$d["appearance"].'</li>
                    <li>Colour Number = '.$d["colour_number"].'li
                    <li>Acid Value = '.$d["acid_value"].'</li>
                    <li>Iodine Value = '.$d["iodine_value"].' - '.$d["iodine_value2"].'</li>
                    <li>Specifikasi Gravity = '.$d["specifikasi_gravity"].' - '.$d["specifikasi_gravity2"].'</li>
                    <li>Melting Point = '.$d["melting_point"].' - '.$d["melting_point2"].'</li>
                    <li>Aniline Point = '.$d["aniline_point"].' - '.$d["aniline_point2"].'</li>
                    <li>water_content = '.$d["water_content"].' - '.$d["water_content2"].'</li>
                    <li>Boiling Point = '.$d["boiling_point"].' - '.$d["boiling_point2"].'</li>
                    <li>Heating Test = '.$d["heating_test"].'</li> 
                    <ul> 
                </td>';
}          

$html .= '</div>
								</td>
			</tr>
            </table>
</thead>
<br></br>  
	
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output('daftar-material.pdf','I');
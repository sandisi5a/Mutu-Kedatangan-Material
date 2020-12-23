<?php
require_once __DIR__ . '\vendor\autoload.php';
include 'koneksi.php';

$Between = '';

if(isset($_POST['tgl_awal']) && isset($_POST['tgl_akhir'])) {
    $Between .= " WHERE DATE(tb_kedatangan.tgl_masuk) BETWEEN '".$_POST['tgl_awal']."' AND '".$_POST['tgl_akhir']."'";
}

$d = "SELECT * FROM tb_kedatangan_detail 
inner join tb_material on tb_kedatangan_detail.code_item = tb_material.code_item
inner join tb_kedatangan on tb_kedatangan_detail.id_kedatangan = tb_kedatangan.id_kedatangan 
inner join tb_supllier on tb_kedatangan.code_supplier = tb_supllier.code_supplier
$Between";
$data = mysqli_query($conn, $d)or die("Query Salah");
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
$mpdf->AddPage('L');
$html ='
<!DOCTYPE html>
<html>
<head>
 <title>Detail Data Bahan Baku</title>
</head>
</head>

<body>
<br align="left">PT KANSAI PRAKARSA COATINGS</br>
<br align="left">Unit Resin</br> 

<h2 align ="center">Kedatangan Material </h2>
    	
<table border="1" cellpadding="5" width="1000">
<thead>
<tr >
    <th>No</th>
    <th>Code Material</th>
    <th>Description</th>
    <th>Tanggal Kedatangan</th>
    <th>Perusahaan</th>
    <th>No Surat Jalan</th>
    <th>NO PO</th>
    <th>Qty</th>
    <th>Status</th>
</tr>
';

$no=1;
$html .= '<tr>
				<td> '.$no++.'</td>
				<td> '.$d["code_item"].'</td>
				<td> '.$d["description_material"].'</td>
				<td> '.$d["tgl_masuk"].'</td>
                <td> '.$d["supplier"].'</td>
                <td> '.$d["no_sj"].'</td>
                <td> '.$d["no_po"].'</td>
                <td> '.$d["qty"].'</td>';
                if (($iod) and ($app) and ($cn) and ($av) and ($sgs) and ($m) and ($ht) and ($ap1) and ($wc) and ($bp)){
                    $html .= '<td>Good</td>';
                  }else {
                    $html .= '<td>Hold</td>';
                  } 

$html .= '</div>
								</td>
			</tr>
            '; }
            $html.= '</table>

                </thead>	
    <br></br>  
	
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
$mpdf=new mPDF('utf-8', 'A4-L');
?>

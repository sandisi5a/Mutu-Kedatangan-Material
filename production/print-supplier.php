<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
include 'koneksi.php';
$strql = "SELECT * FROM tb_supllier where code_supplier";
$data = mysqli_query($conn, $strql)or die("Query Salah");
while($supplier = mysqli_fetch_array($data)){


$html = '<!DOCTYPE html>
<html>
<head>
 <title>Detail Data Supplier</title>
</head>
<style>
.lebar{
    width: 300px;
}
.lebar-1{
    width: 500px;
}
    .lebar-2{
        width: 500px;
}
</style>
<body>
<br align="left">PT KANSAI PRAKARSA COATINGS</br>
<br align="left">Unit Resin</br> 

<h2 align="center">Data Supplier </h2>
       
                <table align="center">
                <tr align=”center”><td><label class="" for="name" class="lebar">Code Supplier *</label></td>
                <td><input type="text" name="Supplier" value="'.$supplier["code_supplier"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Supplier *</label></td>
                <td><input type="text" name="Supplier" value="'.$supplier["supplier"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">Alamat *</label></td>
                <td><input type="text" name="Supplier" value="'.$supplier["alamat"].'" class="lebar"></td></tr>
                <tr><td><label class="" for="name">No Telp *</label></td>
                <td><input type="text" name="Supplier" value="'.$supplier["no_telp"].'" class="lebar"></td></tr>
                </table>	
                </div>
                '; }
                $html.=   '
        
</html> ';
$mpdf->WriteHTML($html);
$mpdf->Output('Supplier.pdf','I');
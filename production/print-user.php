<?php

require_once __DIR__ . '\vendor\autoload.php';
include 'koneksi.php';
$strql ="SELECT * FROM tb_user WHERE Id_karyawan ='".$_GET['Id_karyawan']."'order by Id_karyawan ASC";
		$data = mysqli_query($conn, $strql)or die("Query Salah");
		while($user = mysqli_fetch_array($data)){

$mpdf = new \Mpdf\Mpdf();
$html ='
<!DOCTYPE html>
<html>
<head>
 <title>Detail Data Bahan Baku</title>
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
            width: 200px;
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

<h2 class="center">Identitas Users </h2>

<br> </br>
    	
        
        <table align ="center">
        <tr><td><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">No Penneng*</label></td>
        <td><input type="text" name="Supplier" value="'.$user["Id_karyawan"].'" class="lebar"></td></tr>
        <tr><td><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Karyawan *</label></td>
        <td><input type="text" name="Supplier" value="'.$user["Nama"].'" class="lebar"></td></tr>

                <tr><td><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal Masuk *</label></td>
                <td><input type="text" name="Supplier" value="'.$user["date_of_entry"].'" class="lebar"></td></tr>
                <tr><td><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email *</label></td>
                <td><input type="text" name="Supplier" value="'.$user["email"].'" class="lebar"></td></tr>
                <tr><td><label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Departement *</label></td>
                <td><input type="text" name="Supplier" value="'.$user["departement"].'" class="lebar"></td></tr>'; }
                $html.=   '</table>	
                
                
    <br></br>
    
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('User.pdf','I');
?>

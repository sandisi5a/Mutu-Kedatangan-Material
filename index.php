<?php
session_start();
if(isset($_SESSION["admin"])){
		header("production/daftarmaterial.php");
}else if (isset($_SESSION["QC"])){
	header("location:qc/daftarkedatangan-qc.php");
}else if(isset($_SESSION["Warehouse"])){
	header("location:warehouse/formulir.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pengajuan Material</title>
	<link href="production/css/style.css" rel="stylesheet">
</head>
<body>
 	
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="login-proses.php" method="post">
			<label>Username</label>
			<input type="text" name="idkaryawan" class="form_login" placeholder="ID karyawan" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<H5>Developer by Sandi</H5>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>
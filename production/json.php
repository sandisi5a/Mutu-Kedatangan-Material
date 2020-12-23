<?php
 header('Content-Type: application/json; charset=utf8');
 //panggil koneksi.php
 include("koneksi.php");

 //query tabel produk
 $sql="SELECT * FROM tb_material";
 $query=mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(mysqli_error($GLOBALS["___mysqli_ston"]));

//data array
 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data; 
 
//mengubah data array menjadi json
 echo json_encode($array);
?>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='db_mm';

$conn= ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost, $dbuser, $dbpass));
mysqli_select_db($conn, $dbname);

?>
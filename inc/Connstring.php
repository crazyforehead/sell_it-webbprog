<?php 

	$mysqli = new mysqli ('localhost', 'root', '', 'selltest'); //HOST USER PASSWORD DATABASE

if (mysqli_connect_error()) { 
 echo "Connect failed: " . mysqli_connect_error() . "<br>"; 
 exit(); 
} 
$mysqli->set_charset("utf8"); 

 ?>
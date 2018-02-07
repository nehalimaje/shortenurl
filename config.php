<?php

$server = 'localhost';
$username = 'root';
$psw = '';
$conn = mysqli_connect($server,$username,$psw);
if(!$conn)

{
	die('Could not connect: ' .mysqli_error());  
}
mysqli_select_db($conn,'urldb');


?>
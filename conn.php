<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","dev","desarrollo","test_pass_modal");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>
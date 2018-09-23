<?php 

$db = mysqli_connect('localhost','root','','electroshop');

if (mysqli_connect_errno()) {
	
	echo "Database connection failed with the following errors". mysqli_connect_error();
	die();
	}

define('BASEURL', '/tutorials/');

?>
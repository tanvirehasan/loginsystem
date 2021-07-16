<?php

	
	$host   ='localhost';
	$user   = 'root';
	$pass   = '';
	$dbname = 'loginsystem';


	$conn= mysqli_connect($host,$user,$pass,$dbname);

	if (!$conn) {		
		echo "Databese Connection Error";
	}

?>
<?php 

	
	$dbhost ='localhost';
	$dbuser ='root';
	$dbpass ='';
	$dbname ='bvconstruction.sql';


	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if ($db->connect_error) {

		die("CONNECTION FAILED :" .$db->connect_error);
	}else{
		echo "";
	}




 ?>
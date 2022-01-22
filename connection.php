<?php 

	
	$dbhost ='localhost';
	$dbuser ='root';
	$dbpass ='';
	$dbname ='bvconstruction';


	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if ($conn->connect_error) {

		die("CONNECTION FAILED :" .$conn->connect_error);
	}else{
		echo "";
	}



 ?>
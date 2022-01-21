<?php 

include 'connection.php';



$cancel = $_GET['Id'];
$status_sql = "UPDATE project SET remarks='Cancelled' WHERE PID = '$cancel'";

$res_app = mysqli_query($conn, $status_sql);

if ($res_app) {
	echo "<script> alert('You have Cancelled the Project!') </script>";
	echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/project-area.php' </script>";
}




?>
<?php 

include 'connection.php';



$app = $_GET['app_id'];
$status_sql = "UPDATE appointment SET status='Approved' WHERE APPID = '$app'";

$res_app = mysqli_query($conn, $status_sql);

if ($res_app) {
	echo "<script> alert('You have approved the Appointment!') </script>";
	echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/appointment-area.php' </script>";
}




?>
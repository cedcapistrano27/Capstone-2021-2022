<?php 

include 'connection.php';



$set = $_GET['ID'];
$status_sql = "UPDATE web_images SET status='SET' WHERE ImgID = '$set'";

$res_app = mysqli_query($conn, $status_sql);

if ($res_app) {
	echo "<script> alert('You have changed the status!') </script>";
	echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/setting.php' </script>";
}




?>


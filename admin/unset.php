<?php 


include 'connection.php';


$unset = $_GET['UnsetID'];
$status_sql = "UPDATE web_images SET status='UNSET' WHERE ImgID = '$unset'";

$res_app = mysqli_query($conn, $status_sql);

if ($res_app) {
	echo "<script> alert('You have changed the status into UNSET!') </script>";
	echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/setting.php' </script>";
}




?>
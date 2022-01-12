<?php 

include 'connection.php';

error_reporting(0);

$acc = $_GET['id'];
$acc_sql = "DELETE FROM user WHERE UID = '$acc'";

$res_acc = mysqli_query($conn, $acc_sql);

if ($res_acc) {
	echo "<script> alert('You Have Remove A Client Account!') </script>";
	echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/account-area.php' </script>";
}




?>
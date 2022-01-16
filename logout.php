<?php
include 'connection.php';
session_start();
session_destroy();
echo " <script>alert('Thank you for choosing us!') </script>";
   echo "<script> window.location.href='http://localhost/Capstone-2021-2022/index_agency.php' </script>  ";
        header("Location: {$url}");


?>


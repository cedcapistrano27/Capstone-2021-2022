<?php
include 'connection.php';
session_start();
session_destroy();
echo " <script>alert('Redirecting to login page.!') </script>";
   echo "<script> window.location.href='login.php' </script>  ";
        header("Location: {$url}");


?>


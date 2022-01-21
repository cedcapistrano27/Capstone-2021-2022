<?php
include 'connection.php';
session_start();
session_destroy();
echo " <script>alert('Thank you for choosing us!') </script>";
   echo "<script> window.location.href='index.html' </script>  ";
        header("Location: {$url}");


?>


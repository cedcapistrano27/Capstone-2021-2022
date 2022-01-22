<?php
include 'connection.php';
session_start();
session_destroy();
echo " <script>alert('Have a great day!') </script>";
   echo "<script> window.location.href='index.html' </script>  ";
        header("Location: {$url}");


?>


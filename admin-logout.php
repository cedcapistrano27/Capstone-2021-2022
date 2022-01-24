<?php
include 'connection.php';
session_start();
session_destroy();
echo " <script>alert('Have a great day!') </script>";
   echo "<script> window.location.href='index.php' </script>  ";
        header("Location: {$url}");


?>


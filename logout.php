<?php
include 'connection.php';
session_start();
session_destroy();
echo " <script>alert('Thank you for choosing us!') </script>";
   echo "<script> window.location.href='index.php' </script>  ";
        header("Location: {$url}");


?>


<?php 

include 'connection.php';

if(isset($_POST['insert'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $section = $_POST['section'];
        $query = "INSERT INTO web_images(filename, image_info, picpath, status) values('".$name."', '".$section."', '".$target_dir."".$name."', 'Unset')";
        $result = mysqli_query($conn,$query);

        if ($result == true) {
           echo "<script> alert('You have Inserted a New Image!') </script>";
   echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/setting.php' </script>";

        }
     }

  }
 
}








 ?>
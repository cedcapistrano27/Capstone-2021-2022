<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
  }
  
$uname = $_SESSION['username'];


  if(isset($_POST["signup-btn"]))
{
  $password = $_POST["pass"];
  $confirm_pass = $_POST["confirm-pass"];

  if(strlen($password)<8){
    if(!ctype_upper($password) && !ctype_lower($password)){
      echo "<script>alert('Password Should have uppercase and lowercase letters')</script>";
    }
    else{
      echo "<script>alert('Password should be 8 characters long.')</script>";
    }
  }
  elseif($confirm_pass != $password){
    echo "<script>alert('Password does not match!')</script>"; 
  }
  else{
    $sql = "UPDATE user SET password = '$password' WHERE username = '$uname'";
    $result = $conn->query($sql);
      echo "<script>alert('Your password has been changed. Your account have been logged out!')</script>"; 
      echo "<script> window.location.href='http://localhost/Capstone-2021-2022/logout2_resetpass.php' </script>  ";
      header("Location: {$url}");
  }
  
  }





?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="signupstyle.css">
    
   </head>
<body>
  <div class="wrapper">
  <label for="" style="visibility:hidden;"> <?php echo $uname?> </label>
    <h2>Reset Password</h2>
    <form  method="post">
      
      <div class="input-box">
        <input type="password" placeholder="New Password" name="pass" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm-pass" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Confirm" name="signup-btn">
      </div>
      <div class="text">
        
						<a class="txt2" href="user_update.php">
							 Go back
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
      </div>
    </form>
  </div>

  

</body>
</html>

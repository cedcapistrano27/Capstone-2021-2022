<?php
include 'connection.php';

if(isset($_POST["signup-btn"]))
{
  $username = $_POST["uname"];
  $email = $_POST["email"];
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
    $sql = "INSERT INTO user (username, email, password, usertype) VALUES ('$username', '$email', '$password', 'common')";
    $result = $conn->query($sql);
    echo "<script>alert('Your account has been created. Redirecting to login page...')</script>"; 
    echo "<script> window.location.href='login.php' </script>  ";
    header("Location: {$url}");
    exit;
    $conn->close();
  }
  
  }  


?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main stylesheet and color file-->
     <!--<link href="assets/css/style.css" rel="stylesheet">-->
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="signupstyle.css">

   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form  method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your username" name="uname" required>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" name="email" required >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="pass" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm-pass" required>
      </div>
      <div class="policy">
        <input type="checkbox" checked>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="signup-btn">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
        <br>
						<a class="txt2" href="index_agency.php">
							 Go to homepage
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
      </div>
    </form>
  </div>

  

</body>
</html>

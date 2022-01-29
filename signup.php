<?php
session_start();
include 'connection.php';
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailers/src/Exception.php';
  require 'PHPMailers/src/PHPMailer.php';
  require 'PHPMailers/src/SMTP.php';
  
if(isset($_POST["signup-btn"]))
{
  $Fname = $_POST["fname"];
  $Mname = $_POST["mname"];
  $Lname = $_POST["lname"];
  $C_number = $_POST["telNo"];
  $username = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["pass"];
  $confirm_pass = $_POST["confirm-pass"];
  $OTP=rand(1000,9999);
  if(strlen($password)<8){
    if(!ctype_upper($password) && !ctype_lower($password)){
      echo "<script>alert('Password Should have uppercase and lowercase letters')</script>";
    }
    else{
      echo "<script>alert('Password should be 8 characters long.')</script>";
    }
  }
  else if($confirm_pass != $password){
    echo "<script>alert('Password does not match!')</script>"; 
  }
  else{
    //SERVER SETTING 
    $mail=new PHPMailer();
    $mail-> isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    
    $mail->Username ='BVConstruk@gmail.com';
    $mail->Password=  'bv12345678';

     //Recipients
    $mail->setFrom('BVConstruk@gmail.com', 'BV Construction');
    $mail->AddAddress($email);
    $mail->addReplyTo('BVConstruk@gmail.com');

    // $_SESSION["created_at"] = $currentDate; 
    // $_SESSION["expiration"] = $packageEndDate;

              //Content
              $mail->IsHTML(true);
              $mail->Subject='Confirmation OTP Code';
              $mail->Body='<h1 align-center>Your Account has Been Veryfied</h1><br><a href="localhost/login.php?email='.$email.'">Click here to login</a>';

              //icomment mo nalang tong $mail ben pag ayaw pa din. para sa presentation ok muna.

          if($mail->send()){
            // $email=$_SESSION['email'];
          // $querymail = "UPDATE account SET created_at='$currentDate', expiration ='$packageEndDate' WHERE email='$myemail'";  
          //      $run1 = mysqli_query($con,$querymail) or die(mysqli_error($con));
               $sql = "INSERT INTO user (fname,mname,lname,cnumber,username, email, password, usertype) VALUES ('$Fname','$Mname','$Lname','$C_number','$username', '$email', '$password', 'common')";
               $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                if($result){
                  echo "<script>alert('Your account has been created. Check your email for validation. Redirecting to login page...')</script>"; 
                  echo "<script> window.location.href='login.php' </script>  ";
                  // header("Location: {'$url'}");
                  exit;
                }


            }
          
    // $sql = "INSERT INTO user (username, email, password, usertype) VALUES ('$username', '$email', '$password', 'common')";
    // $result = $conn->query($sql);
    // echo "<script>alert('Your account has been created. Redirecting to login page...')</script>"; 
    // echo "<script> window.location.href='login.php' </script>  ";
    // header("Location: {.$url.}");
    // exit;
    // $conn->close();

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

    <style>
      input[type="number"] {
        width: 100px;
      }

      input:invalid+span:after {
        position: absolute; content: '✖';
        padding-left: 5px;
        color: #8b0000;
      }

      input:valid+span:after {
        position: absolute;
        content: '✓';
        padding-left: 5px;
        color: #009000;
      }
    </style>
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form  method="post">
    <div class="input-box">
        <input type="text" placeholder="First Name" name="fname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Middle Initial" name="mname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Last Name" name="lname" required>
      </div>
      <div class="input-box" style=" display:flex;">
        <input type="text" name="" id="" value="+63" readonly style="width:85px;"> <input type="number" style="width:250px:" name="telNo" id="quantity" size="20"  maxlength="10" placeholder="Enter 10 digit number" required> <span class="validity"></span>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" name="email" required >
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your username" name="uname" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="pass" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="confirm-pass" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="signup-btn">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
        <br>
						<a class="txt2" href="index.php">
							 Go to homepage
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
      </div>
    </form>
  </div>

  

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
  $(document).ready(function () {
  //called when key is pressed in textbox
  $("#quantity").keypress(function (e) {
     
     var maxlengthNumber = parseInt($('#quantity').attr('maxlength'));
     var inputValueLength = $('#quantity').val().length + 1;
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        
               return false;
    }
    if(maxlengthNumber < inputValueLength) {
    	return false;
    }
   });
});
</script>
</html>

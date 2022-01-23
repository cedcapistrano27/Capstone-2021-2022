<?php
include 'connection.php';
session_start();
//if the user is logged in the account
if (isset($_SESSION['username'])) {
		header('location:dashboard.php');
	exit;
}

if(isset($_POST["login-btn"]))
{
	$username = $_POST["uname"];
	$password = $_POST["pass"];


$sql1 = "SELECT * FROM user WHERE username = '$username' ;";
$result1 = $conn->query($sql1);
if ($result1->num_rows>0)
{
    while($row=$result1->fetch_assoc())
    {
      $Firstname = $row['fname'];
      $Midname = $row['mname'];
      $Lastname = $row['lname'];
      $Address = $row['address'];
      $Email = $row['email'];
      $Contact = $row['cnumber'];
      $ID = $row['ID_proof'];
      $Username = $row['username'];
	  $Password = $row['password'];
	  
    }
}

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
  {
    while ($row = $result->fetch_assoc())
    {
      if($row["usertype"] == 'admin')
      {
		$_SESSION["username"] = $username;
        echo "<script> window.location.href='admin/admin-index.php' </script>  ";
        header("Location: {$url}");
        exit;
      }
      else if($row["usertype"] == 'common')
      {
		$_SESSION["username"] = $username;
		$_SESSION["fname"] = $Firstname;
		$_SESSION["mname"] = $Midname;
		$_SESSION["lname"] = $Lastname;
		$_SESSION["address"] = $Address;
		$_SESSION["email"] = $Email;
		$_SESSION["cnumber"] = $Contact;
		$_SESSION["ID_proof"] = $ID;
		$_SESSION["password"] = $password;

		echo "<script> window.location.href='dashboard.php' </script>  ";
		header("Location: {$url}");
		exit;
      }
	  else
	  {
		echo "<script>alert('Invalid user account. Contact your Administrator!')</script>";
		exit;
	  }
    }


  $conn->close();
  }
 

// $query = "SELECT count(*) AS count FROM user WHERE username= '$username' AND password = '$password' AND usertype ='$usertype';";
// $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// 	while ($row = mysqli_fetch_assoc($result)) {
// 		$count = $row['count'];

// 			if ($count == 1 AND $usertype = 'admin') {
// 				$_SESSION['username'] = $username;
// 				header('location:admin.php');
// 				exit;
// 			}
// 			else{
// 				$_SESSION['username'] = $username;
// 				header('location:dashboard.php');
// 			}
// 		}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/agency/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<!--===============================================================================================-->
<link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
	
</style>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<div class="login100-pic js-tilt" data-tilt >
					<img src="assets/images/agency/img-01.png" alt="IMG">
				</div>
				
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="uname" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a> 

					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
						<br>
						<a class="txt2" href="index.html">
							Go to homepage
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
					</div>	
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js2/main2.js"></script>

</body>
</html>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="signupstyle.css">

   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" required >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
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
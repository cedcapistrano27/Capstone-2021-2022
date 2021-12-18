<?php 

include 'connection.php';
session_start();


// updating...

if (isset($_POST['update'])) {

  $Username = $_POST['user'];
  $Firstname = $_POST['fname'];
  $Midname = $_POST['mname'];
  $Lastname = $_POST['lname'];
  $Address = $_POST['address'];
  $Email = $_POST['email'];
  $Contact_number = $_POST['cnumber'];
  $Proof_ID = $_POST['proof_id'];
  
  

  $sql = "UPDATE user SET fname='$Firstname', mname='$Midname', lname='$Lastname', address='$Address', email='$Email', cnumber='$Contact_number', ID_proof='$Proof_ID' WHERE username = '$Username' ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   echo " <script>alert('User_Updated') </script>";
   echo "<script> window.location.href='http://localhost/Capstone-2021-2022/client.php' </script>  ";
        header("Location: {$url}");
  }

 }




?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>BV Contruction</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="client.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" bgcolor="#0000">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-dark" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index_agency.html">BV Contruction</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown"><a href="index_agency.php">Logout</a>
                 
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <section class="module module-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <img class="col-sm-12" src="images/avatar.png" style="border-radius: 50%;width: 100%;height: auto;">
            <h1 class="col-sm-12">Welcome <?php echo($_SESSION['username']) ?></h1>
            <a class="col-sm-12" href="client.php">Create an Appointment</a>
            <a class="col-sm-12" href="appointment_list.php">Appointment/s</a>
            <a class="col-sm-12" href="projects.php">Project/s</a>
            <a class="col-sm-12"href="user_update.php">User Profile</a>
            
          </div>
          <div class="col-sm-10">
            <div class="col-sm-12" style="border-radius: 20px;box-shadow: 10px 10px 20px rgb(133, 131, 131);background-color:rgb(248, 245, 245);">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora soluta commodi minus accusamus, 
            dolor eum necessitatibus aliquam dolorum velit nam hic aspernatur excepturi fuga laborum nisi. Consecteturlaborum itaque accusantium?
              <div class="content">
                <h2>Update Profile</h2>
                <form method="post">
                  <label for="" style="font-size:14px">First Name:</label>  <input type="text" name="fname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['fname']) ?>"> 
                  <label for="" style="font-size:14px">Middle Name:</label> <input type="text" name="mname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:50px;" value="<?php echo($_SESSION['mname']) ?>"> 
                  <label for="" style="font-size:14px">Last Name:</label> <input type="text" name="lname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['lname']) ?>"><br>
                  <label for="" style="font-size:14px; margin-left:20px;">Address:</label> <input type="text" name="address" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['address']) ?>"> 
                  <label for="" style="font-size:14px; margin-left:55px;" >Email:</label> <input type="email" name="email" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['email']) ?>"> <br>
                  <label for="" style="font-size:14px; margin-left:10px;">Contact #:</label> <input type="number" name="cnumber" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['cnumber']) ?>">
                  <label for="" style="font-size:14px; margin-left:10px;">Proof of Identification:</label>
                  <select name="proof_id" id="" value="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:120px;" >
                    <option value=""><?php echo($_SESSION['ID_proof']) ?></option>
                    <option value="SSS ID">SSS ID</option>
                    <option value="Passport">Passport</option>
                    <option value="Driver's License">Driver's License</option>
                    <option value="Barangay ID">Barangay ID</option>
                    <option value="TIN ID">TIN ID</option>
                    <option value="Police Clearance">Police Clearance</option>
                    <option value="NBI Clearance">NBI Clearance</option>
                  </select> <br>
                  <label for="" style="font-size:14px; margin-left:6px;">Username:</label> <input type="text" name="user" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['username']) ?>" readonly> 
                  <label for="" style="font-size:14px; margin-left:10px;">Password:</label> <input type="password" name="" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo($_SESSION['password']) ?>" readonly> <button href="#" style="margin-bottom:10px; margin-left:5px; width:150px; background-color:#CD5C5C;color:white;" >Reset Password</button><br>
            
                  <button type="submit" name="update" style="margin-bottom:10px; margin-left:15px; width:85px; background-color:#68BBE3;color:white;" >Update</button>
                </form>
              </div>
            </div>    
          </div>
        </div>
        

          
           
           
      </div>
      
      

        <!-- FOOTER -->
        <div class="bg-dark text-center">
          <div class="container">
            
                  <h5 class="widget-title font-alt">About BV Construction</h5>
               
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row text-center">
              <div class="col-sm-3">
                <p>Company proect with high quality services and lead modern look interior.</p>
              </div>
              <div class="col-sm-3">
                <p>Phone: +1 234 567 89 10</p> Fax: +1 234 567 89 10
              </div>
              <div class="col-sm-3">
                <p>Email:<a href="#"> somecompany@example.com</a></p>
              </div>
              <div class="col-sm-3">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
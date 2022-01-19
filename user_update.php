<?php 

include 'connection.php';
session_start();


// updating...
$Uname = $_SESSION['username'];
$sql1 = "SELECT * FROM user WHERE username = '$Uname'  "  ;
$result1 = $conn->query($sql1);
if ($result1->num_rows>0)
{
    while($row=$result1->fetch_assoc())
    {
      $uid = $row['UID'];
      $Firstname1 = $row['fname'];
      $Midname1 = $row['mname'];
      $Lastname1 = $row['lname'];
      $Address1 = $row['address'];
      $Email1 = $row['email'];
      $Contact_number1 = $row['cnumber'];
      $Proof_ID1 = $row['ID_proof'];
      $pass = $row['password'];
    }
}

if (isset($_POST['update'])) {

  
  $Firstname = $_POST['fname'];
  $Midname = $_POST['mname'];
  $Lastname = $_POST['lname'];
  $Address = $_POST['address'];
  $Email = $_POST['email'];
  $Contact_number = $_POST['cnumber'];
  $Proof_ID = $_POST['proof_id'];
  
  

  $sql = "UPDATE user SET fname='$Firstname', mname='$Midname', lname='$Lastname', address='$Address', email='$Email', cnumber='$Contact_number', ID_proof='$Proof_ID' WHERE username = '$Uname' ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   echo " <script>alert('User_Updated') </script>";
   echo "<script> window.location.href='http://localhost/Capstone-2021-2022/dashboard.php' </script>  ";
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
    
    <title>BV Contruction</title>
    
    <link rel="stylesheet" href="client.css">
    
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
  <style>
    .rightpanel{
      background-color:rgb(242, 242, 242);
      height: 1350px;
      padding: 0px 35px 0px 35px;
    }
    .module,
    .module-small {
      position: relative;
      padding: 50px 0 0 0;
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-size: cover;
    }
  </style>

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
              
              <li class="dropdown"><a href="logout.php">Logout</a>
                 
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <section class="module module-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-2"style="margin-top: 20px;">
            <a href="user_update.php">
            <img class="col-sm-2" src="images/avatar.png" style="border-radius: 50%;width: 100%;height: auto;cursor:pointer;">
            </a>
            <span>________________________</span>
            <div class="container2 col-sm-10" style="font-size: 14px; padding-bottom: 40px; width:250px; right:30px">
              <a class="col-sm-12" href="dashboard.php">Dashboard</a>
              <a class="col-sm-12" href="appointment_list.php">Appointment</a>
              <a class="col-sm-12" href="Project_list.php">Project</a>
              <a class="col-sm-12" href="Payment.php">Payment</a>

            </div>
          </div>







          <div class="rightpanel col-sm-10">
          <div class="col-sm-12" style="border-radius: 20px;box-shadow: 2px 2px 5px rgb(133, 131, 131);background-color:rgb(248, 245, 245);margin-top:25px;">
            
            <div class="content" style="">
                  <h2 style="text-align: center;">Update Profile</h2>
                  <form method="post">
                    <label for="" style="font-size:14px">First Name:</label>  <input type="text" name="fname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Firstname1 ?>"> 
                    <label for="" style="font-size:14px">Middle Name:</label> <input type="text" name="mname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:50px;" value="<?php echo $Midname1 ?>"> 
                    <label for="" style="font-size:14px">Last Name:</label> <input type="text" name="lname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Lastname1 ?>"><br>
                    <label for="" style="font-size:14px; margin-left:20px;">Address:</label> <input type="text" name="address" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Address1 ?>"> 
                    <label for="" style="font-size:14px; margin-left:55px;" >Email:</label> <input type="email" name="email" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Email1 ?>"> <br>
                    <label for="" style="font-size:14px; margin-left:10px;">Contact #:</label> <input type="number" name="cnumber" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Contact_number1 ?>">
                    <label for="" style="font-size:14px; margin-left:10px;">Proof of Identification:</label>
                    <select name="proof_id" id="" value="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:120px;" >
                      <option value="<?php echo $Proof_ID1 ?>"></option>
                      <option value="SSS ID">SSS ID</option>
                      <option value="Passport">Passport</option>
                      <option value="Drivers License">Driver's License</option>
                      <option value="Barangay ID">Barangay ID</option>
                      <option value="TIN ID">TIN ID</option>
                      <option value="Police Clearance">Police Clearance</option>
                      <option value="NBI Clearance">NBI Clearance</option>
                    </select> <br>
                    <label for="" style="font-size:14px; margin-left:6px;">Username:</label> <input type="text" name="user" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Uname ?>" readonly> 
                    <label for="" style="font-size:14px; margin-left:10px;">Password:</label> <input type="password" name="" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $pass ?>" readonly> <a href="reset_pass.php" id="reset_pass" style="text-decoration:none; color:white; border:solid 1px; padding:4px; margin-left:5px; background-color: #A52A2A;">Reset Password</a><br>
              
                    <button type="submit" name="update" style="margin-bottom:10px; margin-left:15px; width:85px; background-color:#68BBE3;color:white;">Update</button>
                  </form>
            </div>
            </div>    
            </div>    
          </div>
        </div>
        

          
           
           
      </div>
      
      
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>

    
  </body>
</html>
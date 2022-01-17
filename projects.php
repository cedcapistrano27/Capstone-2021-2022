<?php
include 'connection.php';
session_start();
//project timeline here..
include 'connection.php';
$Uname = $_SESSION['username'];
$sql1 = "SELECT * FROM user WHERE username = '$Uname'  "  ;
$result1 = $conn->query($sql1);
if ($result1->num_rows>0)
{
    while($row=$result1->fetch_assoc())
    {
      $uid = $row['UID'];
    }
}

$query = "SELECT * FROM timeline WHERE UID = '$uid' ORDER BY DateIssued ASC";
$result= $conn->query($query);


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
    
    <link rel="stylesheet" href="client.css">
    
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index_agency.php">BV Contruction</a>
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
          <div class="col-sm-2"style="margin-top: 50px;">
              <a href="user_update.php">
              <img class="col-sm-2" src="images/avatar.png" style="border-radius: 50%;width: 100%;height: auto;cursor:pointer;">
              </a>
              <span>________________________</span>
              <div class="container2 col-sm-10" style="font-size: 14px; padding-bottom: 40px; width:250px; right:30px">
                <a class="col-sm-12" href="dashboard.php">Dashboard</a>
                <a class="col-sm-12" href="appointment_list.php">Appointment/s</a>
                <a class="col-sm-12" href="Project_list.php.php">Project/s</a>
              </div>
          </div>
          <div class="rightpanel col-sm-10" style="background-color:rgb(242, 242, 242);height: 1350px;padding: 0px 35px 0px 35px;">
              
          </div>
        </div>
        

          
           
           
      </div>
      
      

    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
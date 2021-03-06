<?php 
include 'upload_pic.php';
$target = "";
include 'connection.php';
session_start();
//if the user clicks the back button from the browser, it prevents him to go back in the last page.
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
  }

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
      $pass = $row['password'];
      $avatar = $row['picpath'];
    }
}


if (isset($_POST['update'])) {

  
  $Firstname = $_POST['fname'];
  $Midname = $_POST['mname'];
  $Lastname = $_POST['lname'];
  $Address = $_POST['address'];
  $Email = $_POST['email'];
  $Contact_number = $_POST['cnumber'];
  $picpath = $_POST["picpath"];
  

  // move uploaded pic from temp folder to permanent folder
  if(file_exists($picpath)){
    $pic_filename = explode('temp/', $picpath)[1];
    rename($picpath, 'uploads/' . $pic_filename);
    $picpath = 'uploads/' . $pic_filename;
  }



  $sql = "UPDATE user SET fname='$Firstname', mname='$Midname', lname='$Lastname', address='$Address', email='$Email', cnumber='$Contact_number', picpath='$picpath' WHERE username = '$Uname' ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   echo " <script>alert('Update Succesfully') </script>";
   echo "<script> window.location.href='dashboard.php' </script>  ";
        header("Location: {$url}");
        
  }

  $sql2 = "INSERT INTO user (pic_filename) VALUES ('$pic_filename') WHERE username = '$Uname' ";
  $result2 = mysqli_query($conn, $sql2);




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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
    
    .leftpanel{
      padding: 15px 10px;
      font-size: 17px;
      font-family: verdana,tahoma;
      font-weight: 700;
    } 
    .leftpanel:hover{
      background-color:#0492c2 ;
      color: white;
      
    }
    .material-icons{
      vertical-align: middle;
      margin-right: 5px;
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
          
        <div class="col-sm-2" style="box-shadow: -2px -2px 5px lightgrey;height: 1350px;padding:20px 5px 0 10px;" >
          <?php
            if($avatar!=""){
              echo "<img src='$avatar' style='border-radius:50%;height:150px;width:200px;'></img>";
            }
            else{
              echo "<img src='images/avatar.png' style='border-radius:50%;height:150px;width:200px;'></img>";
            }
            ?>
            <span>________________________</span>
              
              
              <a class="leftpanel col-sm-12" href="dashboard.php" ><i class="material-icons" >home</i>Home</a>

              <a class="leftpanel col-sm-12" href="appointment_list.php" ><i class="material-icons" >&#xe916;</i>Appointment</a>
              <a class="leftpanel col-sm-12" href="Project_list.php" ><i class="material-icons">&#xe16a;</i>Project</a>
              <a class="leftpanel col-sm-12" href="Payment.php" ><i class="material-icons">&#xe850;</i>Payment</a>
              <a class="leftpanel col-sm-12" href="user_update.php" ><i class="material-icons">&#xe869;</i>Settings</a>

           
           
          </div>







          <div class="rightpanel col-sm-10">
          <div class="col-sm-12" style="border-radius: 20px;box-shadow: 2px 2px 5px rgb(133, 131, 131);background-color:rgb(248, 245, 245);margin-top:25px;">
            
            <div class="content" style="">
                  <h2 style="text-align: center;">Update Profile</h2>
                  <form id="pic-upload" class="a-form" enctype="multipart/form-data" method="post" width='840'>
                    <div class="a-form-group mt-3" style="float:left; clear:block; width:20%;" >
                    <div id="pic-box" style='width:150px; height:150px; overflow:hidden; margin-top:7px; margin-left:5px; background:none; border:thin solid #d3d3d3; border-radius:5px;'></div>
                    <input type="file" style="margin-top:10px; text:center; margin-left:5px; "
                    id="uploadfile" name="uploadfile" value="" />
                    </div>
                  </form>
                  <form method="post">
                    <label for="" style="font-size:14px">First Name:</label>  <input type="text" name="fname" id="" style="margin-left:8px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Firstname1 ?>"> 
                    <label for="" style="font-size:14px; margin-left:10px;">Middle Name:</label> <input type="text" name="mname" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:75px;" value="<?php echo $Midname1 ?>">  <br>
                    <label for="" style="font-size:14px">Last Name:</label> <input type="text" name="lname" id="" style="margin-left:10px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Lastname1 ?>"><br>
                    <label for="" style="font-size:14px; margin-left:20px;">Address:</label> <input type="text" name="address" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Address1 ?>"> 
                    <label for="" style="font-size:14px; margin-left:10px;" >Email:</label> <input type="email" name="email" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Email1 ?>"> <br>
                    <label for="" style="font-size:14px; margin-left:10px;">Contact #:</label> <input type="number" name="cnumber" id="" style="margin-left:8px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Contact_number1 ?>">
                    <!-- <label for="" style="font-size:14px; margin-left:10px;">Proof of Identification:</label>
                    <select name="proof_id" id="" value="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:120px;" >
                      <option value="<?php echo $Proof_ID1 ?>"></option>
                      <option value="SSS ID">SSS ID</option>
                      <option value="Passport">Passport</option>
                      <option value="Drivers License">Driver's License</option>
                      <option value="Barangay ID">Barangay ID</option>
                      <option value="TIN ID">TIN ID</option>
                      <option value="Police Clearance">Police Clearance</option>
                      <option value="NBI Clearance">NBI Clearance</option>
                    </select>
                     -->
                     <br>
                    <label for="" style="font-size:14px; margin-left:6px;">Username:</label> <input type="text" name="user" id="" style="margin-left:8px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $Uname ?>" readonly>
                    <label for="" style="font-size:14px; margin-left:10px;">Password:</label> <input type="password" name="" id="" style="margin-left:5px; margin-bottom:10px; margin-right:5px; width:200px;" value="<?php echo $pass ?>" readonly> <a href="reset_pass.php" id="reset_pass" style="text-decoration:none; color:white; border:solid 1px; padding:4px; margin-left:5px; background-color: #A52A2A;">Reset Password</a><br>
              
                    <button type="submit" name="update" style="margin-bottom:10px; margin-left:15px; width:85px; background-color:#68BBE3;color:white;">Update</button>
                    <div class="form-group col3" style="visibility:hidden;">
                      <label for="picpath" class="mb-0">Picture Path</label>
                      <input type="text" class="form-control mt-0" name="picpath" id="picpath" value="<?php echo "$target" ?>">
                    </div>
                  </form>
            </div>
            </div>    
            </div>    
          </div>
        </div>
        

          
           
           
      </div>
      <div class="bg-dark text-center " style="background-color: black;">
          <div class="container " >
            
                  <h5 class="widget-title font-alt">About BV Construction</h5>
               
          </div>
        </div>
        
        <footer class="footer bg-dark" style="background-color: black;text-align: center;">
          <div class="container">
            <div class="row text-center">
              <div class="col-sm-3">
                <p>Company proect with high quality services and lead modern look interior.</p>
              </div>
              <div class="col-sm-3">
                <p>Phone: PH (+63)9958596092</p>
              </div>
              <div class="col-sm-3">
                <p>Email:<a href="#"> bvconstrak@gamil.com</a></p>
              </div>
              <div class="col-sm-3">
                <div class="footer-social-links"><a href="https://www.facebook.com/bvconstrak"><i class="fa fa-facebook" style="font-size: 20px;"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>

      
      
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- JavaScript Codes to upload picture and display it inside the specified image -->
<script>
$(document).ready(function(){
  $('#uploadfile').change(function(e){
  var formData = new FormData($('#pic-upload')[0]);
    //codes in AJAX for uploading of picture
    $.ajax({
    type: 'POST',
    url: 'upload_pic.php',
    data: formData,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function(result){
    if(result.ok){
    $('#pic-box').html('');
    $('#pic-box').append("<img src='" + result.temp_path + "' style='width:100%'/>");
    $('#picpath').val(result.temp_path);
    } else {
    alert('Error encountered while trying to upload the picture!');
    }
    }
    });
    return false;
  });
});
</script>
    
  </body>
</html>
<?php
  include 'connection.php';

  if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['update'])){
      $FirstName2 = $_POST['FirstName'];
      $MidName2 = $_POST['MidName'];
      $LastName2 = $_POST['LastName'];
      $BirthDate2 = $_POST['BirthDate'];
      $Gender2 = $_POST['Gender'];
      $Address2 = $_POST['Address'];
      $ContactNos2 = $_POST['ContactNos'];
      $EmailAddress2 = $_POST['EmailAddress'];
      $BloodType2 = $_POST['BloodType'];
      
      $employee_update="UPDATE user SET FirstName='$FirstName2', MidName='$MidName2', LastName='$LastName2', BirthDate='$BirthDate2', Gender='$Gender2', Address='$Address2', ContactNos='$ContactNos2', EmailAddress='$EmailAddress2', BloodType='$BloodType2' WHERE EncoderID='$Encoder_ID'";
      $employee_product= mysqli_query($db, $employee_update); 
      if($employee_product){ 
        Echo"<script>alert('Product has been updated!')</script>";   
        header('Location: Employeetable.php');  
      }
    } 

     else if (isset($_POST['delete'])) {

             $email = $_POST['EmailAddress'];

              $sql = "DELETE FROM employee_tbl WHERE EmailAddress = '$email'";
              if($db->query($sql)===TRUE)
              {
               echo "<script>alert('Deleted');</script>";
                echo " <script>window.location.href='http://localhost/Project/1stproject/employeetable.php';</script>";   
              }
              else
              {
                echo "Error: " . $sql . "<br>" . $db->error;
              }        
          }

  }

  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV Construction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="client_side.css">
    
</head>
<body>
    
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <img src="images/logo.jpg" class="logo-image" alt="BV Logo" width="30">
        <h3>BV <span>Construction</span></h3>
      </div>
      <div class="right_area">
        <a href="landing.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="images/profic1.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="client_side.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Appointments</span></a>
        <a href="client_update.php"><i class="fas fa-sliders-h"></i><span>Account Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="images/avatar.png" class="profile_image" alt="">
        <h4>Username</h4>
      </div>
        <a href="client_side.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Appointments</span></a>
        <a href="client_update.php"><i class="fas fa-sliders-h"></i><span>Account Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="container container1">

  


<div class="container container1 bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-sm-4 col border-right" style="background: background: rgb(126,224,255);
background: linear-gradient(90deg, rgba(126,224,255,1) 0%, rgba(66,224,233,1) 50%, rgba(105,255,203,1) 100%);">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold text-black"><?php echo $FirstName ?></span><span class="text-black-50"><?php echo $EmailAddress ?></span><span> </span></div>
      </div>
      <div class="col col border-right">

            <div class="closer mt-2">
                 <a href="employeetable.php"><i class="material-icons">close</i></a>
             </div>


          <div class="p-3 py-4">

                  
                  <div class="p-3 bg-light fw-bold text-black"><i class="fas fa-info-circle mr-1"></i> EMPLOYEE UPDATE</div>

            
              <div class="row mt-2">
                  <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name="FirstName" placeholder="first name" value = "<?php echo $FirstName ?>"></div>

                  <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" class="form-control" name="MidName" value = "<?php echo $MidName ?>" placeholder="middle name"></div>

                  <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="LastName" value = "<?php echo $LastName ?>" placeholder="surname"></div>
              </div>
              <div class="row mt-3">
                  
                  <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" class="form-control" name="ContactNos" placeholder="enter contact number" value = "<?php echo $ContactNos ?>"></div>
                  
                  <div class="col-md-12"><label class="labels">Address </label><input type="text" class="form-control" name="Address" placeholder="enter address line " value = "<?php echo $Address ?>"></div>
                  
                  <div class="col-md-12"><label class="labels">Blood type</label><input type="text" class="form-control" name="BloodType" placeholder="enter blood type" value = "<?php echo $BloodType ?>"></div>
                  
                 
                  
                  <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" name="EmailAddress" placeholder="enter email id" value = "<?php echo $EmailAddress ?>"></div>

                  
              </div>
              <div class="row mt-3">

                  <div class="col-md-6"><label class="labels">Birth Date</label><input type="date" class="form-control"  name="BirthDate" value = "<?php echo $BirthDate ?>"></div>

                  <div class="col-md-6"><label class="labels" >Gender</label>

                    <select class="form-select form-control" name="Gender" >
                     <option value=''><?php echo $Gender ?></option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                     </select>

                    


                  </div>
              </div>

              <center>
                <span class="icon-input-btn mt-5">
                  <i class="fas fa-file-upload text-white"></i> 
                  <input type="submit" name="update" class="btn btn1  text-white " value="UPDATE">
                </span>
                <span class="icon-input-btn mt-4">
                <i class="fas fa-trash text-white"></i>
                  <input type="submit" name="delete" class="btn btn-danger text-white " value="DELETE">
                </span>
              </center>
              
          </div>

          <div style="margin-top: 10px; margin-bottom: 15PX;">
        <center> <a class="navbar-brand fw-bold text-info mt-4" style="font-size: 15px;">FURNITURE HUB <i class="fab fa-accusoft"></i></a></center>
      </div>


      </div>

     
  </div>
</div>
</div>
</div>





</div>  

    

    
    <!-- footer -->
  <footer>
     <span><p><b>&copy; 2020 Copyrights Reserved</b> By <i>BV Construction Industries.</i></p></span>
  </footer>

</body>
</html>
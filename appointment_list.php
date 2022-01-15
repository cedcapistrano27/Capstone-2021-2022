<?php
session_start();
include 'connection.php';
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
    }
}
if (isset($_POST['request'])) {

 
  $appoint = $_POST['appointment1'];
  $details = $_POST['details'];
  
  

  $sql = "INSERT into appointment (UID,date,a_details,status) VALUES ('$uid','$appoint','$details', 'pending')  ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   echo " <script>alert('Appointment Created!') </script>";
   echo "<script> window.location.href='http://localhost/Capstone-2021-2022/appointment_list.php' </script>  ";
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
    /* form */
    form {
      padding: 15px;
      border: 1px solid #666;
      background: #fff;
      display: none;
    }

    #formButton {
      display: block;
      margin-right: auto;
      margin-left: auto;
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
              <a class="col-sm-12" href="appointment_list.php">Appointment/s</a>
              <a class="col-sm-12" href="projects.php">Project/s</a>
            </div>
          </div>







          <div class="rightpanel col-sm-10">
            <div class="header col-sm-12" style="margin: 80px 0 25px 0;">
              <div class="headername col-sm-6" style="border-radius: 20px;width:650px;height:200px;background-color:white;margin-right:20px;">
                <div class="col-sm-6">
                  <h5 style="font-size:30px">Good Day</h5> 
                  <h1 style="font-size:50px"><?php echo $Firstname1?></h1> 
                </div>
                <div class="col-sm-6" style="margin: -50px 0 0 0;">
                  <img src="images/Appoinmentcion.png" style="height:300px;margin-left:70px;">
                </div>
                
              </div>
              <div class="timedate col-sm-6" style="border-radius: 20px;box-shadow: 5px 5px 5px rgb(133, 131, 131);background-color:rgb(248, 245, 245);width:200px;height:200px;text-align:center;background-color:rgb(201, 248, 201);">
                <span id="displayDateTime2" style="font-size: 15px;"></span>
                <h1 id="displayDateTime" style="font-size: 50px;"></h1>
              </div>
            </div>  
            <div class="col-sm-12" style="border-radius: 5px;box-shadow: 2px 2px 10px rgb(133, 131, 131);background-color:rgb(248, 245, 245);margin-bottom:25px;height: 900px;">
            <div class="content">
                <h2 class="col-sm-9">My Appointments</h2>
                <button type="button" class="btn btn-primary col-sm-3" style="margin-top:20px;border-radius:5px;" id="formButton">New Appointment</button>
                <form method="post" id="form1">
                  <!-- label tong pangalan!!!!!  -->
                  <label for="name" style="visibility:hidden;">Hey </label> <br>
                  <label for="">Date of Appointment:</label> <input type="datetime-local" name="appointment1" id="" style="margin-top:10px;">
                  <br>
                  <label for="">Details: </label><br> <textarea name="details" id="" cols="30" rows="10" style="width:600px; height:150px; margin-bottom:10px;"></textarea> <br>
                  <button type="submit" name="request" style="margin-bottom:10px; width:85px; background-color:#68BBE3;color:white;">Submit</button>
                </form>
                <table   class="table table-hover my-1 caption-top table-borderless">
                  <thead class="table-dark">
                    <tr >
                      <th class="fw-light">CustomerName</th>
                      <th class="fw-light">Date Time</th>
                      <th class="fw-light">Details</th>
                      <th class="fw-light">Status</th>
                      <th class="fw-light"></th>
                    
                      
                    </tr>
                  </thead>
                      <tbody class="color">
                      <?php
                            
                            include 'connection.php';
                          
                          $Uname = $_SESSION['username'];
                          
                            $sql1 = "SELECT * FROM user WHERE username = '$Uname'"  ;
                            $result1 = $conn->query($sql1);
                            if ($result1->num_rows>0)
                            {
                                while($row=$result1->fetch_assoc())
                                {
                                  $uid = $row['UID'];
                                  $Firstname1 = $row['fname'];
                                  $Midname1 = $row['mname'];
                                  $Lastname1 = $row['lname'];
                                
                                }
                            }
                            $sql3 = "SELECT * FROM appointment WHERE UID = '$uid' ORDER BY date ASC";

                            $result = $conn->query($sql3);
                            
                            if($result->num_rows>0)
                            {

                              // output data of each row

                            while($row=$result->fetch_assoc())
                                {

                              
                              $Date_time = $row["date"];
                              $Details =$row["a_details"];
                              $Status = $row["status"];
                            
                              
                            
                              echo 
                              
                              "<tr>"
                              ."<td>$Firstname1"." $Midname1"." $Lastname1</td>"
                              ."<td>$Date_time</td>"
                              ."<td>$Details</td>"
                              ."<td>$Status</td>";
                              

                                  }
                                echo "</table>";
                              }else{
                                  echo "0 results";}
                              $conn->close();
                            ?>


                      </tbody>
                    </table>
              </div>
            </div>    
          </div>
        </div>
        

          
           
           
      </div>
      
      
      <script>
        var today = new Date();
      var day = today.getDay();
      var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
      var monthlist = ["Jan","Feb","March","April ","May","Jun","July"];
      var month = today.getMonth();                           
      var date = monthlist[month]+' '+today.getDate();
      var dateTime = date;
      
      document.getElementById("displayDateTime").innerHTML = dateTime ;
      document.getElementById("displayDateTime2").innerHTML = ' <br> Today is ' + daylist[day];
      

              
      </script>                            
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      $(document).ready(function() {
      $("#formButton").click(function() {
        $("#form1").toggle();
      });
    });
    </script>
  </body>
</html>
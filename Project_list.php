<?php
include 'connection.php';
session_start();
//if the user clicks the back button from the browser, it prevents him to go back in the last page.
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
  }
  
$Uname = $_SESSION['username'];
$sql1 = "SELECT * FROM user WHERE username = '$Uname' " ;
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


$projects = "SELECT COUNT(remarks) AS finished_projects FROM project WHERE UID = '$uid' AND remarks = 'Completed'";
$project_result = mysqli_query($conn, $projects);
$row1 = mysqli_fetch_array($project_result);

$projects2 = "SELECT COUNT(remarks) AS ongoing_projects FROM project WHERE UID = '$uid' AND remarks = 'Processed'";
$project_result2 = mysqli_query($conn, $projects2);
$row2 = mysqli_fetch_array($project_result2);

$projects3 = "SELECT COUNT(remarks) AS cancelled_projects FROM project WHERE UID = '$uid' AND remarks = 'Cancelled'";
$project_result3 = mysqli_query($conn, $projects3);
$row3 = mysqli_fetch_array($project_result3);

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
    #view{
      margin:10px;
      top:15px;
      border-radius:5px;
      padding:15px;
      font-size: 12px;
      background-color:lightblue;
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
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="login.html">BV Contruction</a>
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
              <a class="col-sm-12" href="user_update.php">Settings</a>

            </div>
          </div>







          <div class="rightpanel col-sm-10">
            <div class="header col-sm-12" style="margin: 50px 0 25px 0;padding: 0 0;">
              <div class="headername col-sm-12" style="border-radius: 20px;width:100%;height:300px;background-color:white;">
                <div class="col-sm-5" >
                  <h5 style="font-size:30px">Paid Payments</h5>
                  <h1 style="font-size:50px">P 12000</h1>
                  <div class="col-sm-12" style="padding: 0 0;margin-top: 35px;">
                    <div class="col-sm-6" style="padding: 0 0;">
                      <label class="col-sm-6" style="padding: 0 0;font-size: 10px;"> All Balance </label>
                      <label class="col-sm-6">8000</label>
                      <div class="col-sm-9" style="height: 5px;background-color: lightskyblue;"></div>
                    </div>
                    <div class="col-sm-6" style="padding: 0 0;">
                      <label class="col-sm-6" style="padding: 0 0;font-size: 10px;">All Project</label>
                      <label class="col-sm-6">20000</label>
                      <div class="col-sm-9" style="height: 5px;background-color: lightgreen;"></div>
                    </div>
                  </div>
                  <button type="button" onclick="topayment()" class="btn btn-primary col-sm-11" style="border-radius:20px;margin-top: 20px;padding: 8px 0 8px 10px;">View History
                    <i class="material-icons" style="font-size:15px;padding-left: 70px;">chevron_right</i>
                  </button> 
                  
                </div>
                
                  <div class="timedate col-sm-2" style="border-radius: 20px;box-shadow: 1px 1px 5px rgb(133, 131, 131);background: linear-gradient(0deg, rgba(231,242,171,1) 8%, rgba(180,249,177,1) 57%);width:160px;height:250px;text-align:left;margin: 20px 10px 0 0;">
                    
                    <i class="material-icons" style="font-size:36px">done</i><br>
                    <span style="font-size: 15px;">Completed</span>
                    <h1 style="font-size: 50px;"> <?php echo $row1['finished_projects']?> </h1>
                    <label for="">Total</label>
                  </div>
                  <div class="timedate col-sm-2" style="border-radius: 20px;box-shadow: 1px 1px 5px rgb(133, 131, 131);background: linear-gradient(0deg, rgba(231,242,171,1) 8%, rgba(250,237,41,1) 57%);width:160px;height:250px;text-align:left;margin: 20px 10px 0 0;">
                    <i class="material-icons" style="font-size:36px">cached</i><br>
                    <span style="font-size: 15px;">On Going</span>
                    <h1 style="font-size: 50px;"> <?php echo $row2['ongoing_projects']?></h1>
                    <label for="">Total</label>

                  </div>
                  <div class="timedate col-sm-2" style="border-radius: 20px;box-shadow: 1px 1px 5px rgb(133, 131, 131);background: linear-gradient(0deg, rgba(231,242,171,1) 8%, #ffa0a0 57%);width:160px;height:250px;text-align:left;background-color:rgb(201, 248, 201);margin: 20px 10px 0 0;">
                    <i class="material-icons" style="font-size:36px">highlight_off</i><br>
                    <span style="font-size: 15px;">Canceled</span>
                    <h1 style="font-size: 50px;"><?php echo $row3['cancelled_projects']?></h1>
                    <label for="">Total</label>

                  </div>
                
              </div>
              
            </div>  
            <div class="col-sm-12" style="border-radius: 5px;box-shadow: 2px 2px 10px rgb(133, 131, 131);background-color:rgb(248, 245, 245);margin-bottom:25px;height: 900px;">
            <div class="content">
                <h2 class="col-sm-9">My Projects</h2>
                
                <table   class="table table-hover my-1 caption-top table-borderless">
                  <thead class="table-dark">
                    <tr >
                      <th class="fw-light">Project Name</th>
                      <th class="fw-light">Scope</th>
                      <th class="fw-light">Date</th>
                      <th class="fw-light">Status</th>
                      <th class="fw-light" style="text-align: center;">Action</th>
                    
                      
                    </tr>
                  </thead>
                      <tbody class="color">
                      <?php
                            
                            include 'connection.php';
                          
                          $Uname = $_SESSION['username'];
                          
                            $sql2 = "SELECT * FROM user WHERE username = '$Uname'"  ;
                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows>0)
                            {
                                while($row=$result2->fetch_assoc())
                                {
                                  $uid = $row['UID'];
                                  $Firstname1 = $row['fname'];
                                  $Midname1 = $row['mname'];
                                  $Lastname1 = $row['lname'];
                                
                                }
                            }
                            $sql3 = "SELECT * FROM project WHERE UID = '$uid' ";

                            $result = $conn->query($sql3);
                            
                            if($result->num_rows>0)
                            {

                              // output data of each row

                            while($row=$result->fetch_assoc())
                                {

                              $Project_name = $row["project_name"];
                              $Date_issued = $row["Pdate"];
                              $Scope = $row["scope"];
                              $Status = $row["remarks"];
                              $PID = $row["PID"];
                            
                              
                            
                              echo 
                                
                              "<tr>"
                              ."<td style='font-size: 18px;padding: 15px;'>$Project_name </td>"
                              ."<td style='font-size: 18px;padding: 15px;'>$Scope</td>"
                              ."<td style='font-size: 18px;padding: 15px;'>$Date_issued </td>"
                              ."<td style='font-size: 18px;padding: 15px;'>$Status</td>"
                              ."<td class='col-sm-1' style='padding: 10px 0;'>
                              
                                <a href='project_timeline.php?id=$PID' class='btn btn-primary col-sm-6' style='border-radius:5px;width:100px;padding: 0 0;height: 30px;font-size: 12px;margin-left: 10px;background-color:#337ab7;border-color:#2e6da4;' id='formButton'>
                                  <i class='material-icons' style='font-size:10px;padding-top: 5px;'>open_in_new</i>
                                  View</a>
                                </td>";
                              

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
      <script>

        function toproject(){
          window.location.href='project_timeline.php'
          $PID = $_SESSION["PID"];
        }
        function topayment(){
          window.location.href='Payment.php'
        }
      
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

    
  </body>
</html>
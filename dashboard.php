<?php
include 'connection.php';
session_start();
//if the user clicks the back button from the browser, it prevents him to go back in the last page.
  if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
    }
//insert appointment baby.

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
      $avatar = $row['picpath'];
    }
}

$sql = "SELECT COUNT(UID) AS numbers FROM appointment  WHERE UID = '$uid' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$projects = "SELECT COUNT(Remarks) AS finished_projects FROM project WHERE UID = '$uid' AND Remarks = 'Completed'";
$project_result = mysqli_query($conn, $projects);
$row1 = mysqli_fetch_array($project_result);

$projects2 = "SELECT COUNT(Remarks) AS ongoing_projects FROM project WHERE UID = '$uid' AND Remarks = 'Ongoing'";
$project_result2 = mysqli_query($conn, $projects2);
$row2 = mysqli_fetch_array($project_result2);

$projects3 = "SELECT COUNT(Remarks) AS cancelled_projects FROM project WHERE UID = '$uid' AND Remarks = 'Cancelled'";
$project_result3 = mysqli_query($conn, $projects3);
$row3 = mysqli_fetch_array($project_result3);

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
    
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboardstyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">

    
  </head>
  <style>
    .module, .module-small {
      position: relative;
      padding: 50px 0px 0px 0px;
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-size: cover;
    }
    .rightpanel{
      background-color:rgb(242, 242, 242);
      height: 1350px;
      padding: 0px 35px 0px 35px;
    }

    .myappoinment {
      max-width:100%;
      background-color:whitesmoke;
      border-radius: 20px;
      padding: 10px 10px;
      box-shadow: 2px 2px 10px grey;
      text-align: center;
      cursor: pointer;
    }
    .myappoinment:hover {
      background-color: rgb(186, 242, 186);
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
  <script>
    function toappoinment(){
      window.location.href='appointment_list.php';

    }/*
    function openclose(){
      document.getElementById("AL").style.display= "block";
      document.getElementById("APM").style.backgroundColor="blue";
    }*/
  </script>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" bgcolor="#0000">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-dark" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="login.php">BV Contruction</a>
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
        <div class="row" >
          
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
          
          <div class="rightpanel col-sm-10" >
            <span style="font-size: 30px;color: black;">Home</span>
            <div class="nameheader col-sm-12" style="max-width:100%;background-color:white;border-radius: 20px;padding: 10px 10px;box-shadow: 2px 2px 10px grey;">
                <div class="col-sm-6" style="padding: 0px 0px 0px 0px;">
                  <a class="col-sm-12" style="font-size: 30px;color: rgb(100, 100, 100);">Welcome</a>
                  <a class="col-sm-12" style="font-size: 50px;text-align: center;margin: 15px 0px 0 30px;"><?php echo $Firstname1?></a>
                </div>
                <div class="col-sm-6" style="text-align: center;padding-right: 0px;">
                  <img src="images/dashboardicon.png" style="width: 300px;padding-left: 30px;height: 200px;">
                </div>
            </div>
            <div class="col-sm-6">
              <span style="font-size: 30px;color: black;">My Project</span>
              <a href="Project_list.php" style="color:black;">
                <div class="col-sm-12" style="max-width:100%;background-color:white;border-radius: 20px;padding: 10px 10px;box-shadow: 2px 2px 10px grey;">
                  <h4 class="col-sm-12">completed : <?php echo $row1['finished_projects']?> </h4>
                  <div class="col-sm-8" style="background-color: rgb(186, 242, 186);height: 5px;margin-left: 15px;"></div>
                  <h4 class="col-sm-12">On - Ongoing : <?php echo $row2['ongoing_projects']?> </h4>
                  <div class="col-sm-8" style="background-color: yellow;height: 5px;margin-left: 15px;"></div>
                  <h4 class="col-sm-12">Canceled : <?php echo $row3['cancelled_projects']?> </h4>
                  <div class="col-sm-8" style="background-color: red;height: 5px;margin-left: 15px;"></div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <span style="font-size: 30px;color: black;">My Appointment</span>
              <a onclick="toappoinment()">
                <div class="myappoinment col-sm-12" style="background-color: white;">
                  <span class="col-sm-6" style="font-size: 85px;padding: 0px 0px;margin-left: 10px;color:black;">
                    <?php
                    echo $row['numbers'];
                    ?>
                  </span>
                  <div class="col-sm-5" style="border-left: 2px solid rgb(75, 74, 74);height: 130px;margin-top: 10px;align-content: center;">
                    <img class="col-sm-12" src="images/pin.png">
                  </div>
                </div>
              </a>
            </div>
            
            <div class="col-sm-12" style="max-width:100%;height: 700px;background-color:white;border-radius: 5px;padding: 10px 10px;box-shadow: 2px 2px 10px grey;margin-top: 15px;">
            <h2 class="col-sm-2">Updates</h2> <br>
            <table   class="table table-hover my-1 caption-bottom table-borderless" >
            <thead class="table-dark">
                    <tr >
                      <th class="fw-light">Project Name</th>
                      <th class="fw-light">Scope</th>
                      <th class="fw-light">Payment</th>
                      <th class="fw-light">Remarks</th>
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
                        $sql3 = "SELECT * FROM project WHERE UID = '$uid' ";

                          $result = $conn->query($sql3);
                          
                          if($result->num_rows>0)
                          {

                            // output data of each row

                          while($row=$result->fetch_assoc())
                              {

                            
                            $Project_Name = $row["project_name"];
                            $scope =$row["scope"];
                            $Date = $row["Pdate"];
                            $Remarks = $row["remarks"];
                          
                            
                          
                            echo 
                            
                            
                            "<td >$Project_Name</td>"
                            ."<td >$scope</td>"
                            ."<td >$Date</td>"
                            ."<td >$Remarks</td>"
                            ."<tr>";
                            

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


        <!-- FOOTER -->
        
     
    
    </main>
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
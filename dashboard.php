<?php
include 'connection.php';
session_start();
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
    }
}

$sql = "SELECT COUNT(UID) AS numbers FROM appointment  WHERE UID = '$uid' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$projects = "SELECT COUNT(Remarks) AS finished_projects FROM timeline WHERE UID = '$uid' AND Remarks = 'Finished'";
$project_result = mysqli_query($conn, $projects);
$row1 = mysqli_fetch_array($project_result);

$projects2 = "SELECT COUNT(Remarks) AS ongoing_projects FROM timeline WHERE UID = '$uid' AND Remarks = 'Ongoing'";
$project_result2 = mysqli_query($conn, $projects2);
$row2 = mysqli_fetch_array($project_result2);

$projects3 = "SELECT COUNT(Remarks) AS cancelled_projects FROM timeline WHERE UID = '$uid' AND Remarks = 'Cancelled'";
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
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboardstyle.css" rel="stylesheet">

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
      background-color:rgb(232, 232, 232);
      height: 1350px;
      padding: 0px 35px 0px 35px;
    }

    .myappoinment {
      max-width:100%;
      background-color:whitesmoke;
      border-radius: 20px;
      padding: 10px 10px;
      box-shadow: 5px 5px 10px grey;
      text-align: center;
      cursor: pointer;
    }
    .myappoinment:hover {
      background-color: rgb(186, 242, 186);
    }
    
    
  </style>
  <script>
    function toappoinment(){
      window.location.href='appointment_list.php';

    }/*
    function openclose(){
      document.getElementById("AL").style.display= "block";
      //document.getElementById("APM").style.backgroundColor="blue";
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
        <div class="row" >
          
          <div class="col-sm-2" style="margin-top: 20px;">
            <a href="user_update.php">
            <img class="col-sm-2" src="images/avatar.png" style="border-radius: 50%;width: 100%;height: auto;cursor:pointer;">
            </a>
            <span>________________________</span>
            <div class="container2 col-sm-10" style="font-size: 14px; padding-bottom: 40px; width:250px; right:30px">
              <a class="col-sm-12" href="dashboard.php">Dashboard</a>
              <a class="col-sm-12" href="appointment_list.php">Appointment/s</a>
              <a class="col-sm-12" href="Project_list.php">Project/s</a>
              <a class="col-sm-12"href="user_update.php">User Profile</a>
            </div>
           
          </div>
          
          <div class="rightpanel col-sm-10" >
            <span style="font-size: 30px;color: black;">Dashboard</span>
            <div class="nameheader col-sm-12" style="max-width:100%;background-color:whitesmoke;border-radius: 20px;padding: 10px 10px;box-shadow: 5px 5px 10px grey;">
                <div class="col-sm-6" style="padding: 0px 0px 0px 0px;">
                  <a class="col-sm-12" style="font-size: 30px;color: rgb(100, 100, 100);">Welcome</a>
                  <a class="col-sm-12" style="font-size: 50px;text-align: center;margin: 15px 0px 0 30px;"><?php echo $Uname ?></a>
                </div>
                <div class="col-sm-6" style="text-align: center;padding-right: 0px;">
                  <img src="images/dashboardicon.png" style="width: 300px;padding-left: 30px;height: 200px;">
                </div>
            </div>
            <div class="col-sm-6">
              <span style="font-size: 30px;color: black;">My Project</span>
              <a href="Project_list.html" style="color:black;">
                <div class="col-sm-12" style="max-width:100%;background-color:whitesmoke;border-radius: 20px;padding: 10px 10px;box-shadow: 5px 5px 10px grey;">
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
                <div class="myappoinment col-sm-12" >
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
            <span class="col-sm-12" style="font-size: 30px;color: black;">Updates</span>
            <div class="col-sm-12" style="max-width:100%;background-color:whitesmoke;border-radius: 20px;padding: 10px 10px;box-shadow: 5px 5px 10px grey;margin-top: 15px;text-align: center;">
              <a class="col-sm-3">Project Name</a>
              <a class="col-sm-3" style="padding-left: 100px;">Scope</a>
              <a class="col-sm-3" style="padding-left: 100px;">Date</a>
              <a class="col-sm-3" style="padding-left: 60px;">Remarks</a>
              
            </div>
            <div class="col-sm-12" style="max-width:100%;height: 700px;background-color:whitesmoke;border-radius: 5px;padding: 10px 10px;box-shadow: 5px 5px 10px grey;margin-top: 15px;text-align: center;">
            <table   class="table table-hover my-1 caption-bottom table-borderless" >
                  
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
                            $scope =$row["project_info"];
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
      
      

        <!-- FOOTER -->
        
     
    
    </main>
    
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
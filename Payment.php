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
      $avatar = $row['picpath'];
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
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    #view{
      margin:10px;
      top:15px;
      border-radius:5px;
      padding:15px;
      font-size: 12px;
      background-color:lightblue;
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
          <label style="font-size: 30px;margin:20px 0 0 0;">Payment</label>
          <div class="" id="divToPrint" style="display:none;">
            <div style="width:200px;height:300px;background-color:teal;">

            </div>
          </div>
          
            <div class="header col-sm-12" style="margin: 30px 0 25px 0;padding: 0 0;">
              <div class="headername col-sm-12" style="border-radius: 20px;width:100%;height:100px;padding:0;">
                <div class="col-sm-12" >
                    <div class="col-sm-4 " style="padding:0;margin-left:15px;">
                      <div class="col-sm-12" style="height: auto;background-color: white;width:250px;border-radius:10px;box-shadow: 2px 2px 5px rgb(133, 131, 131)">
                      <label class="col-sm-12" style="margin:0;padding: 0;font-size:40px;color:#337ab7;">8000</label>
                      <label class="col-sm-12" style="padding: 0 ;font-size: 10px;margin:0;opacity: 0.8;"> All Balance </label>
                      </div>
                    </div>
                    <div class="col-sm-4 " style="padding:0;margin-left:0px">
                      <div class="col-sm-12" style="height: auto;background-color: white;width:250px;border-radius:10px;box-shadow: 2px 2px 5px rgb(133, 131, 131)">
                      <label class="col-sm-12" style="margin:0;padding: 0;font-size:40px;color:#337ab7;">12000</label>
                      <label class="col-sm-12" style="padding: 0 ;font-size: 10px;margin:0;opacity: 0.8;"> Paid Payments </label>
                      </div>
                    </div>
                    <div class="col-sm-4" style="padding: 0;margin-left:-15px">
                    <div class="col-sm-12" style="height: auto;background-color: white;width:250px;border-radius:10px;box-shadow: 2px 2px 5px rgb(133, 131, 131)">
                        <label class="col-sm-12" style="margin:0;padding: 0;font-size:40px;color:#337ab7;">20000</label>
                        <label class="col-sm-12" style="padding: 0 ;font-size: 10px;margin:0;opacity: 0.8;">All Project</label>
                      </div>
                    </div>
                  
                  
                  
                </div>
                
                
              </div>
              
            </div>  
            <div class="col-sm-12" style="border-radius: 5px;box-shadow: 2px 2px 10px rgb(133, 131, 131);background-color:rgb(248, 245, 245);margin-bottom:25px;height: 900px;">
            <div class="content">
                <h2 class="col-sm-9">Payment History</h2> <br>
                <div>
            <!-- <input type="button" value="print" onclick="PrintDiv();" /> -->
            <a href="generatepdf.php" style="height: 35px; width: 350; margin-right: auto; margin-left: auto; text-align: center; background: #055C9D; color: white; border-radius: 3px; cursor: pointer; text-decoration: none; line-height: 2.3; padding: 10px;">Print</a>
                </div>
                
                <table   class="table table-hover my-1 caption-top table-borderless">
                  <thead class="table-dark">
                    <tr >
                      <th class="fw-light">Project Name</th>
                      <th class="fw-light">Date</th>
                      <th class="fw-light">Payment</th>
                      <th class="fw-light">Downpayment</th>
                      <th class="fw-light" >Total Cost</th>
                    
                      
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
                            $sql3 = "SELECT * FROM payment WHERE UID = '$uid' ";

                            $result = $conn->query($sql3);
                            
                            if($result->num_rows>0)
                            {

                              // output data of each row

                            while($row=$result->fetch_assoc())
                                {

                              $Project_name = $row["project_name"];
                              $Date_issued = $row["payment_issued"];
                              $payment_type = $row["payment_type"];                            
                              $total_cost = $row["total_cost"];
                            
                              
                            
                              echo 
                                
                              "<tr>"
                              ."<td style='font-size: 15px;padding: 15px;'>$Project_name </td>"
                              ."<td style='font-size: 15px;padding: 15px;'>$Date_issued</td>"
                              ."<td style='font-size: 15px;padding: 15px;'>$payment_type </td>"
                              ."<td style='font-size: 15px;padding: 15px;'>$total_cost</td>";
                              

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
      <!-- <a href='project_timeline.php?id=<?php echo $PID?>'>boom </a> -->
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
      
        var today = new Date();
      var day = today.getDay();
      var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
      var monthlist = ["Jan","Feb","March","April ","May","Jun","July"];
      var month = today.getMonth();                           
      var date = monthlist[month]+' '+today.getDate();
      var dateTime = date;
      
      document.getElementById("displayDateTime").innerHTML = dateTime ;
      document.getElementById("displayDateTime2").innerHTML = ' <br> Today is ' + daylist[day];

      function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
      
      </script>                            
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>

    
  </body>
</html>
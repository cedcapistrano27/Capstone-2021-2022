<?php
                        include 'connection.php';
                        session_start();
                        //if the user clicks the back button from the browser, it prevents him to go back in the last page.
                        if (!isset($_SESSION['username'])) {
                          header('location:login.php');
                          exit;
                          }
                       
                        $Project = $_GET['id'];

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
    <link rel="stylesheet" href="dist/css/timeline.css">
  </head>
  <style>
    .rightpanel{
      background-color:rgb(242, 242, 242);
      height: 1350px;
      padding: 0px 35px 0px 35px;
      overflow: scroll;
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
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">BV Contruction</a>
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


            <!-- <div class="container">
              <div class="breadcrumb">
                <a href="#">
                  <span class="breadcrumb__inner">
                    <span class="breadcrumb__title">Project</span>
                  </span>
                </a>
                <a href="#">
                  <span class="breadcrumb__inner">
                    <span class="breadcrumb__title">Name of Project</span>
                  </span>
                </a>
              </div>
            </div> -->
            <div class="timeline">
              <div class="timeline--body">
                <?php

                        // $sql3 = "SELECT PID FROM project WHERE UID = '$uid' " ;
                        // $result3 = $conn->query($sql3);
                        // if ($result3->num_rows>0)
                        // {
                        //     while($row=$result3->fetch_assoc())
                        //     {
                        //       $PID = $row['PID'];
                        //     }
                        // }

                        $sql2 = "SELECT * FROM timeline WHERE UID = '$uid' AND PID = '$Project' " ;
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows>0)
                        {
                            while($row=$result2->fetch_assoc())
                            {
                              $Uscope = $row['Uscope'];
                              $Pinfo = $row['ProjectInfo'];
                              $Dissued = $row['DateIssued'];
                              $Remarks = $row['Remarks'];
                              $picture = $row['picpath'];


                              echo 

                              "<div class='timeline--item'>
                                <p class='time'> $Dissued</p>
                                <div class='content'>
                                  <h2 class='title'>$Uscope</h2>
                                  <p>
                                      $Pinfo
                                  </p>
                                  $Remarks <br>
                                  <img src='admin/$picture' style='height:150px;width:200px;'></img>
                                  </div>
                              </div>";
                            }
                        }
                ?>


                
               












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
          window.location.href='projects.php'
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
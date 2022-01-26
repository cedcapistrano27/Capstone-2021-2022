<?php
session_start();
//if the user clicks the back button from the browser, it prevents him to go back in the last page.
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  exit;
  }
  
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
      $avatar = $row['picpath'];
    }
}
if (isset($_POST['request'])) {

 
  $appoint = $_POST['appointment1'];
  $details = $_POST['details'];
  $time = $_POST['app_time'];
  
  $query = "SELECT * FROM appointment WHERE time = '$time' and date='$appoint'";
  $resulta = mysqli_query($conn,$query);
  if($resulta->num_rows == 0)
  {
    $sql = "INSERT into appointment (UID,date,time,a_details,status) VALUES ('$uid','$appoint','$time','$details','pending')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo " <script>alert('Appointment Created!') </script>";
      echo "<script> window.location.href='appointment_list.php' </script> ";
      header("Location: {$url}");
    }
  }
  else{
    echo "<script>alert('Time $time is already booked. Please select another one.')</script>";

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/> -->
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
                
                  <form method="post" id="form1" style="position:absolute;margin:100px;border-radius: 5px;box-shadow: 2px 2px 10px rgb(133, 131, 131);background-color:rgb(248, 245, 245);">
                    <!-- label tong pangalan!!!!!  -->
                    <!--<label for="name" style="visibility:hidden;">Hey </label> <br>-->
                    
                    <label for="">Date of Appointment:</label> <input type="date" name="appointment1" id="txt-appoint_date"  style="margin-top:10px;" onkeydown="return false" required >
                    <label for="">Select time: 
                      <select name="app_time" id="time_list" style="height:35px; width:100px;">
                        <!-- <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option> -->
                      </select>
                    </label> 
                    <!-- <div>
                      <input type="text" id="time" placeholder="Select Time">
                    </div> -->
                    <br>
                    <label for="">Details: </label><br> <textarea name="details" id="" cols="30" rows="10" style="width:600px; height:150px; margin-bottom:10px;"></textarea> <br>
                    <button type="submit" name="request" style="margin-bottom:10px; width:85px; background-color:#68BBE3;color:white;">Submit</button>
                  </form>
                  
                <table   class="table table-hover my-1 caption-top table-borderless">
                  <thead class="table-dark">
                    <tr >
                      <th class="fw-light">Date Time</th>
                      <th class="fw-light">Type</th>
                      <th class="fw-light" style="text-align: center;">Status</th>
                    
                      
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
                              $Status = $row["status"];
                              $atype = $row["atype"];

                            
                              
                            
                              echo 
                              
                              "<tr>"
                              ."<td>$Date_time</td>"
                              ."<td>$atype</td>"
                              ."<td style='text-align:center;'>$Status</td>";
                              

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
      $("#formButton").click(function() {
        $("#form1").toggle();
      });
    });
    </script>
    <script>
        $(document).ready(function() { //DISABLED PAST DATES IN APPOINTMENT DATE
        var dateToday = new Date();
        var month2 = dateToday.getMonth() + 1;
        var day2 = dateToday.getDate();
        var year2 = dateToday.getFullYear();

        if (month2 < 10)
          month2 = '0' + month2.toString();
        if (day2 < 10)
          day2 = '0' + day2.toString();

        var maxDate = year2 + '-' + month2 + '-' + day2;

        $('#txt-appoint_date').attr('min', maxDate);
      });

      // var timepicker = new TimePicker('time', {
      //   lang: 'en',
      //   theme: 'dark'
      // });
      // timepicker.on('change', function(evt) {
        
      //   var value = (evt.hour || '00') + ':' + (evt.minute || '00');
      //   evt.element.value = value;

      // });
    </script>
    <script>
      var availableTime= 
      [
        "8:00 AM",
        "9:00 AM",
        "10:00 AM",
        "11:00 AM",
        "12:00 PM",
        "1:00 PM",
        "2:00 PM",
        "3:00 PM",
        "4:00 PM",
        "5:00 PM"
      ];
      

      $(document).ready(function()
      {
        for(i=0;i<availableTime.length;i++)
        {
          $('#time_list').append('<option>'+availableTime[i]+'</option>')
        }

        // var needle = document.getElementById('time_list').value;
        // if(availableTime.indexOf(needle) > -1){
        //   availableTime.splice(availableTime.indexOf(needle),1);
        // }

        

      })
    </script>
    
    
  </body>
</html>
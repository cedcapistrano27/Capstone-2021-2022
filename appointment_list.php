<?php
session_start();
$Uname = $_SESSION['username'];
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
              
              <li class="dropdown"><a href="index_agency.php">Logout</a>
                 
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <section class="module module-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
          <a href="user_update.php">
            <img class="col-sm-2" src="images/avatar.png" style="border-radius: 50%;width: 100%;height: auto;cursor:pointer;">
            </a>
            <h1 class="col-sm-12" style="font-size: 26px;"><?php echo $Uname ?></h1>
            <a class="col-sm-12" href="dashboard.php">Dashboard</a>
            <a class="col-sm-12" href="client.php">Create an Appointment</a>
            <a class="col-sm-12" href="appointment_list.php">Appointment/s</a>
            <a class="col-sm-12" href="projects.php">Project/s</a>
            
            
          </div>
          <div class="col-sm-10">
            <div class="col-sm-12" style="border-radius: 20px;box-shadow: 10px 10px 20px rgb(133, 131, 131);background-color:rgb(248, 245, 245);margin-bottom:25px;">
            
            <div class="content">
                <h2>List of Appointments</h2>
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
      
      

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
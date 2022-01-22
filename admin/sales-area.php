<?php 

      include 'connection.php';
      include 'filter.php';
      session_start();

      $sql_pay ="SELECT * FROM payment ORDER BY PayID desc";
       $result = mysqli_query($conn, $sql_pay);  

       ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV CONSTRUCTION | Administrators : Sale Management</title>
    <link rel="icon" type="images/x-icon" href="images/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    
      <script src='jquery-3.3.1.js' type='text/javascript'></script>
      <script src='jquery-ui.min.js' type='text/javascript'></script>
      <script type='text/javascript'>
      $(document).ready(function(){
        $('.dateFilter').datepicker({
            dateFormat: "yy-mm-dd"
        });
      });
       </script>
<style>
    body{
      margin: 0;
      padding: 0;
      font-family: "Roboto", sans-serif;
      background: url(landing-page.jpg) no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
    }

    header{
      z-index: 1;
      position: fixed;
      background: #22242A;
      padding: 20px;
      width: calc(100% - 0%);
      top: 0;
      height: 30px;
    }
    .left_area{
      display: flex;
    }
    .left_area img{
      border-radius: 5px;
      margin-right: 5px;
    }

    .left_area h3{
      color: #fff;
      margin: 0;
      text-transform: uppercase;
      font-size: 22px;
      font-weight: 900;
    }

    .left_area span{
      color: #19B3D3;
    }

    .logout_btn{
      padding: 5px;
      background: #19B3D3;
      text-decoration: none;
      float: right;
      margin-top: -30px;
      margin-right: 40px;
      border-radius: 2px;
      font-size: 15px;
      font-weight: 600;
      color: #fff;
      transition: 0.5s;
      transition-property: background;
    }

    .logout_btn:hover{
      background: #0B87A6;
    }

    .sidebar{
      z-index: 1;
      top: 0;
      background: #2f323a;
      margin-top: 70px;
      padding-top: 30px;
      position: fixed;
      left: 0;
      width: 250px;
      height: calc(100% - 9%);
      transition: 0.5s;
      transition-property: left;
      overflow-y: auto;
    }

    .profile_info{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .sidebar .profile_info .profile_image{
      width: 100px;
      height: 100px;
      border-radius: 100px;
      margin-bottom: 10px;
    }

    .sidebar .profile_info h4{
      color: #ccc;
      margin-top: 0;
      margin-bottom: 20px;
    }

    .sidebar a{
      color: #fff;
      display: block;
      width: 100%;
      line-height: 60px;
      text-decoration: none;
      padding-left: 40px;
      box-sizing: border-box;
      transition: 0.5s;
      transition-property: background;
    }

    .sidebar a:hover{
      background: #19B3D3;
    }

    .sidebar i{
      padding-right: 10px;
    }

    label #sidebar_btn{
      z-index: 1;
      color: #fff;
      position: fixed;
      cursor: pointer;
      left: 300px;
      font-size: 20px;
      margin: 5px 0;
      transition: 0.5s;
      transition-property: color;
    }

    label #sidebar_btn:hover{
      color: #19B3D3;
    }

    #check:checked ~ .sidebar{
      left: -185px;
    }

    #check:checked ~ .sidebar a span{
      display: none;
    }

    #check:checked ~ .sidebar a{
      font-size: 20px;
      margin-left: 165px;
      width: 100%;
    }

    .content{
      width: 100% - 250px;
      margin-top: 60px;
      padding: 20px;
      margin-left: 250px;
      height: 100vh;
      transition: 0.5s;
    }

    #check:checked ~ .content{
      margin-left: 60px;
    }

    #check:checked ~ .sidebar .profile_info{
      display: none;
    }

    #check{
      display: none;
    }

    .mobile_nav{
      display: none;
    }


    /*Section Area*/
   

    .header-table{
      display: flex;
      align-items: center;
      margin-top: 20px;
      background: white;
      padding: 10px;
      border-radius: 5px;
    }
    .header-row{
      flex: 1;  
      padding: 10px;
      text-align: center;
      font-variant: small-caps;

    }

    .header-row input[type="date"], .header-row input[list], .header-row input[type="submit"] {
      height: 4vh;
      font-size: 18px;
      text-align: center;
      font-variant: inherit;
    }

    table{
      margin: 30px auto;
      border: 1px black solid;
      width: 100%;
      border-collapse: collapse;
      background: white;
      
    }

    thead{
      background: black;
      color: white;
    }

    th,td{
      padding: 10px;
      text-align: center;
      font-variant: small-caps;
    }
    
    .form1 {
      padding: 15px;
      border: 1px solid #666;
      width: 40%;
      background: #fff;
      display: none;
      position:absolute;
      margin:100px 0 0 300px;
      border-radius: 5px;
      box-shadow: 2px 2px 10px rgb(133, 131, 131);
      background-color:rgb(248, 245, 245);
    }

    #formButton {
      display: block;
      margin-right: auto;
      margin-left: auto;
    }





    /* Responsive CSS */

@media screen and (max-width: 780px){
      .sidebar{
        display: none;
      }

      #sidebar_btn{
        display: none;
      }

      header .left_area span{
        font-size: 13px;
      }

      .content{
        margin-left: 0;
        margin-top: 0;
        padding: 10px 20px;
        transition: 0s;

      }

      #check:checked ~ .content{
        margin-left: 0;
      }

      .mobile_nav{
        display: block;
        width: calc(100% - 0%);
      }

      .nav_bar{
        background: #222;
        width: 100% - 0px;
        margin-top: 70px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }

      .nav_bar .mobile_profile_image{
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

      .nav_bar .nav_btn{
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        transition: 0.5s;
        transition-property: color;
      }

      .nav_bar .nav_btn:hover{
        color: #19B3D3;
      }

      .mobile_nav_items{
        background: #2F323A;
        display: none;
      }

      .mobile_nav_items a{
        color: #fff;
        display: block;
        text-align: center;
        letter-spacing: 1px;
        line-height: 60px;
        text-decoration: none;
        box-sizing: border-box;
        transition: 0.5s;
        transition-property: background;
      }

      .mobile_nav_items a:hover{
        background: #19B3D3;
      }

      .mobile_nav_items i{
        padding-right: 10px;
      }

      .active{
        display: block;
      }

      section{
        width: auto;
        margin-top: 40px;
        margin-left: auto;
        margin-right: auto;
        height: auto;
        display: flex;
        flex-direction: column-reverse;
      }

    }
</style>
<script>
   $(document).ready(function() {
      $("#formButton").click(function() {
        $(".form1").toggle();
      });
    });
</script>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <img src="../images/logo.jpg" class="logo-image" alt="BV Logo" width="30">
        <h3>BV <span>Construction</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
<!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../images/avatar.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="admin-index.php"><i class="fas fa-home"></i><span>HOME</span></a>
        <a href="appointment-area.php"><i class="fas fa-calendar-check"></i><span>APPOINTMENTS</span></a>
        <a href="project-area.php"><i class="fas fa-tasks"></i><span>PROJECTS</span></a>
        <a href="sales-area.php"><i class="fas fa-dollar-sign"></i><span>SALES</span></a>
        <a href="setting.php"><i class="fas fa-cogs"></i><span>SETTINGS</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../images/avatar.png" class="profile_image" alt="">
        <h4>Admin User</h4>
      </div>
      <a href="admin-index.php"><i class="fas fa-home"></i><span>HOME</span></a>
        <a href="appointment-area.php"><i class="fas fa-calendar-check"></i><span>APPOINTMENTS</span></a>
        <a href="project-area.php"><i class="fas fa-tasks"></i><span>PROJECTS</span></a>
        <a href="sales-area.php"><i class="fas fa-dollar-sign"></i><span>SALES</span></a>
        <a href="setting.php"><i class="fas fa-cogs"></i><span>SETTINGS</span></a>
    </div>
    <!--sidebar end-->

   <div class="content">

      <section style="display: flex; flex-direction: column; padding: 10px;">
        
        <div class="first-container"  style=" margin: auto; width: 100%; border-radius: 5px; margin-bottom: 20px;">

          <div class="calendar" style="width:100%; padding:7px; margin-bottom:15px; font-size: 2rem; color:white; font-weight: 700;-webkit-text-stroke: 2px black;">
            <span><label class="day-name"></label></span>,
            <span><label class="month-name"></label></span>
            <span><label class="date-number"></label></span>
            <span><label class="year"></label></span>
            
          </div>

          <div class="header-total" style="display:flex; text-align: center; align-items: center; background:rgba(255, 255, 255, 0.86); overflow: visible; height:25vh; border-radius: 10px;">
            <div class="amount" style="flex: 1; font-size: 4rem; font-weight: 600; border-right: 10px grey double;">
              <span>Php</span>

              <?php 


          $sql = "SELECT SUM(total_cost) AS total FROM payment WHERE  payment_issued > DATE_SUB(NOW(), INTERVAL 1 DAY)";
          $result = mysqli_query($conn, $sql);
          while ($count_r = mysqli_fetch_assoc($result)) {
          $num_rows = $count_r['total'];
          //echo "<span class='count'>$num_rows</span>";
          }


               ?>

              <span class="count"><?php echo $num_rows; ?></span>
            </div>
            <div class="image" style="flex: 1;">
              <img src="images/money-bag.png" width="180" height="180" style="">
            </div>
          </div>


      </div>

      <div class="second-container" style="width:100%; height: 100vh ; margin: 30px auto;">

            <form method="POST">
      
   
    <div class="container" style="width: 100%;">  

            <div class="header-table">

              <div class="header-row">  
                      Start Date <input type='date' class='dateFilter' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
                </div>  


                <div class="header-row">  
                      End Date <input type='date' class='dateFilter' name='endDate' value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>
                </div>  


                <div class="header-row">
                        Payment Type<span><input list="types" name="paytype" id="paytype" value="<?php if(isset($_POST['paytype'])) echo $_POST['paytype']; ?>">
                <datalist id="types">
                  <option value="Fully-Paid">Fully-Paid</option>
                  <option value="Downpayment">Downpayment</option> 
                </datalist>
              </span> 
                </div>  


                <div class="header-row">  
                     <input type="submit" name="but_search" id="filter" value="Search" class="dateFilter"/>  
                </div>
                
            </div>

            <div class="body-table"></div>
                
                  
              

                <div class="title-body" style="margin: 30px auto; color:white;font-variant: small-caps; padding:10px;background:rgba(0, 0, 0, 0.49); width: auto;-webkit-clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%); clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%); width:60%;text-align: center;">
            <span><h1 style="">Transaction</h1></span>
          </div>                  
                    
           <div>
                <button type="button" class="btn btn-primary col-sm-3" style="margin-top:20px;border-radius:5px;cursor:pointer;" id="formButton">New Payment</button>
           </div>
                <div class="form1">
                  <form method="post" id="form1" style="">
                    <!-- label tong pangalan!!!!!  -->
                    <!--<label for="name" style="visibility:hidden;">Hey </label> <br>-->
                    <div></div>
                    

                    



                     
                    <label for="" >Payment</label>
                    <br>
                    <label for="">Client</label> 

                    <span><input list="clients" name="client" id="client">
                    <datalist id="clients">

                       <?php 
                     

                $sql_client = "SELECT * FROM user";

                $result=mysqli_query($conn, $sql_client);

                if ($result->num_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $clientF = $row['fname'];
                      $clientM = $row['mname'];
                      $clientL = $row['lname'];
                      $clientID = $row['UID'];

                      echo "
                      <option value='$clientID'>$clientF $clientM $clientL</option>
                      ";

                  }
                }
                 ?>

         
              </datalist>
            </span>


                    <br>
                    <label for="">Project Name</label> 

                    <span><input list="projects" name="project" id="project">
                    <datalist id="projects">

                       <?php 
                     

                $sql = "SELECT * FROM project";

                $result_p=mysqli_query($conn, $sql);

                if ($result_p->num_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result_p)) {
                    
                      $projname = $row['project_name'];
                      $PID = $row['PID'];

                      echo "
                      <option value='$projname'>$projname</option>
                      ";

                  }
                }
                 ?>

         
              </datalist>
            </span>


                    <br>
                    <label for="">Amount</label>
                    <input type="number" name="amount" id="" style="margin-top:10px;" min="1">
                    <br>
                    <label for="">reference number</label> <input type="number" min="8" maxlength="20" name="reference" id="" style="margin-top:10px;" >
                    <br>

                    <?php 

                    if (isset($_POST['request'])) {

                      $UID = $_POST['client'];
                      $project = $_POST['project'];
                      $amount = $_POST['amount'];
                      $refno = $_POST['reference'];
                      

                      $sql_paycheck ="INSERT INTO payment( UID, payment_issued, project_name, payment_type, reference_no, balance) VALUES ('$UID', current_timestamp(),'$project','Balance','$refno','$amount')";

                        $result_pay = mysqli_query($conn, $sql_paycheck);
                        if ($result_pay == true) {
                          echo "<script> alert('You have successfully inserted!') </script>";
  echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/sales-area.php' </script>";
                        }
                    }







                     ?>
                    
                    
                    <button type="submit" name="request" style="margin-bottom:10px; width:85px; background-color:#68BBE3;color:white;">Submit</button>
                  </form>
                </div>
                <div id="order_table">  
                     <table class="table table-bordered"> 

                     <thead>

                      <tr>  
                                
                               <th>Project</th>  
                               <th>Payment Type</th>  
                               <th>Downpayment</th>
                               <th>Total Cost</th>  
                               <th>Date Issued</th>    
                          </tr>
                       
                     </thead> 

                     <tbody>

                      <?php 
                       //$emp_query = "SELECT * FROM payment WHERE 1";

                        if(isset($_POST['but_search'])){
                          $fromDate = $_POST['fromDate'];
                          $endDate = $_POST['endDate'];
                          $paytype = $_POST['paytype'];
                
                          if(!empty($fromDate) && !empty($endDate)){
                            //$emp_query .= "AND payment_type = '".$paytype."' AND payment_issued BETWEEN '".$fromDate."' AND '".$endDate."' ";
                             $sql_pay ="SELECT * FROM payment WHERE payment_type = '$paytype' AND payment_issued BETWEEN '$fromDate' AND '$endDate' ORDER BY payment_issued DESC";
                          }
                        }
                        //$emp_query .= " ORDER BY payment_issued DESC";

                       

                        $result_r = mysqli_query($conn,$sql_pay);

                        if(mysqli_num_rows($result_r) > 0){
                          while($row = mysqli_fetch_assoc($result_r)){
                            $pname = $row['project_name'];
                            $payment = $row['payment_type'];
                            $downpayment = $row['downpayment'];
                            $totalcost = $row['total_cost'];
                            $paymentissued = $row['payment_issued'];  
                       
                          echo "<tr>";    
                          echo "<td>".$pname."</td>";
                          echo "<td>".$payment."</td>";
                          echo "<td>".$downpayment."</td>";
                          echo "<td>".$totalcost."</td>";
                          echo "<td>".$paymentissued."</td>";
                          echo "</tr>";    
                          }
                               
                       
                     }else{
                      echo "<tr>";
                      echo "<td colspan='4'>No record found.</td>";
                      echo "</tr>";
                    }  
                     ?>

                       
                     </tbody>
                            
                    </table>  
                </div>  
           </div>  


           <div>
             <a href='generatepdf.php' style='font-size: 13px; margin-right: auto; margin-left: auto; text-align: center; background: #131313; color: #E1E1E1; border-radius: 3px; cursor: pointer; text-decoration: none; line-height: 2.3; padding: 10px;'>DOWNLOAD PAYMENT DATA FILE</a>   
           </div>





                </div>

              </form>
          </div>

        </section>

      </div>



</body>
</html>
<script>

  $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });

     $('.count').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration:4000,
                easing:'swing',
                step: function(now){
                    $(this).text(Math.ceil(now));
                }
            });
        });
  
    const dayNumber = new Date().getDate();
    const year = new Date().getFullYear();
    const dayName = new Date().toLocaleString("default", {weekday: "long"});
    const monthName = new Date().toLocaleString("default", {month: "long"});

    document.querySelector(".month-name").innerHTML = monthName;
    document.querySelector(".day-name").innerHTML = dayName;
    document.querySelector(".date-number").innerHTML = dayNumber;
    document.querySelector(".year").innerHTML = year;
    
     
    
</script>
 

      
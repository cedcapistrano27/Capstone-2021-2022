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
section{
  
  width: 100% - 250px;
  height: 80vh;
  display: flex;
  align-items: center;
  
}


    
    footer{
    width: 60%;
    position: fixed;
    left: 20%;
    right: 20%;
    z-index: -1;
    background: rgba(0, 0, 0, 0.79);
    bottom: 0;
    border-radius: 5px 5px 0px 0px;

    }  
    footer span{
      color: white;
      text-align: center;
      font-size: 10px;

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



footer{
  display: block;
}

}
      
    </style>
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

   <!--- <div class="content">

      <section style="display: flex; flex-direction: column; padding: 10px;">
        
        <div class="first-container"  style=" margin: auto; width: 100%; border-radius: 5px; margin-bottom: 20px;">
          <div class="calendar" style="width:100%; padding:7px; margin-bottom:15px; font-size: 2rem; color:white; font-weight: 700;-webkit-text-stroke: 2px black;">
            <span><label class="day-name"></label></span>,
            <span><label class="month-name"></label></span>
            <span><label class="date-number"></label></span>
            <span><label class="year"></label></span>
            
          </div>

          <div class="header-total" style="display:flex; text-align: center; align-items: center; background:rgba(255, 255, 255, 0.86); overflow: visible; height:25vh;">
            <div class="amount" style="flex: 1; font-size: 4rem; font-weight: 600; border-right: 10px grey double;">
              <span>Php</span>
              <span class="count"> 17777</span>
            </div>
            <div class="image" style="flex: 1;">
              <img src="images/money-bag.png" width="180" height="180" style="">
            </div>
          </div>


      </div>

      <div class="second-container" style="width:100%; height: 80vh; ">

        <div class="date-area" style="width:100%; background: white; height:20vh; margin-top: 20px; display: flex; text-align:center; align-items:center; font-weight:600; border-radius: 10px;">


          <div class="date-old" style="flex:1;">
            <label>Select Old Transaction</label>
           <input type="date" name="selectOld" style="height: 5vh; width: 70%; font-size:1.20rem;">
          </div>



          <div class="mid" style="flex:.25;">TO</div>
        


          <div class="date-new" style="flex:1;">
            <label>Select Recent Transaction</label>
             <input type="date" name="selectNew" style="height: 5vh; width: 70%; font-size:1.20rem;">
          </div>

  

        <div class="totalAmount" style="flex:1;">
           <label>Total Amount Transaction:</label>
          <input type="text" name="totalAmount" style="height: 5vh; width: 70%; font-size:1.20rem;">
        </div>

        </div>

        <div class="header-table" style="color: white;">
          <h1>TRANSACTION</h1>
        </div>

        <div class="content-table" style="width:100%;">

          <table style="background: whitesmoke; width:100%; text-align: center;  border-collapse: collapse;">
            <thead style="background:black; color: white; font-size: 25px; font-family: monospace;">
              <tr>
                <th>Name</th>
                 <th>Date Issued</th>
                  <th>Amount</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Danielle Capistrano</td>
                <td>january 27, 2022</td>
                <td>Php 20,299.00</td>
              </tr>
              <tr>
                <td>Danielle Capistrano</td>
                <td>january 27, 2022</td>
                <td>Php 20,299.00</td>
              </tr>
            </tbody>
          </table>
          
        </div>


        
      </div>--->


<form method="POST">
      
      <br /><br />  
           <div class="container" style="width:900px; margin: auto; background: white;">  
                <h2 align="center">Ajax PHP MySQL Date Range Search using jQuery DatePicker</h2>  
                <h3 align="center">Order Data</h3><br />  
                <div class="col-md-3">  
                      Start Date <input type='text' class='dateFilter' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
                </div>  
                <div class="col-md-3">  
                      End Date <input type='text' class='dateFilter' name='endDate' value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>
                </div>  
                <div class="col-md-5">  
                     <input type="submit" name="but_search" id="filter" value="Search" class="dateFilter"/>  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                                
                               <th width="20%">Project</th>  
                               <th width="20%">Payment Type</th>  
                               <th width="20%">Downpayment</th>
                               <th width="20%">Total Cost</th>  
                               <th width="20%">Date Issued</th>    
                          </tr>  
                     <?php 
                        $emp_query = "SELECT * FROM payment WHERE 1 ";

                        if(isset($_POST['but_search'])){
                          $fromDate = $_POST['fromDate'];
                          $endDate = $_POST['endDate'];
                
                          if(!empty($fromDate) && !empty($endDate)){
                            $emp_query .= " and payment_issued between '".$fromDate."' and '".$endDate."' ";
                          }
                        }
                        $emp_query .= " ORDER BY payment_issued DESC";
                        $paymentRecords = mysqli_query($conn,$emp_query);

                        if(mysqli_num_rows($paymentRecords) > 0){
                          while($empRecord = mysqli_fetch_assoc($paymentRecords)){
                            $pname = $empRecord['project_name'];
                            $payment = $empRecord['payment_type'];
                            $downpayment = $empRecord['downpayment'];
                            $totalcost = $empRecord['total_cost'];
                            $paymentissued = $empRecord['payment_issued'];  
                       
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
                     </table>  
                </div>  
           </div>  





  </div>

</form>

</body>
</html>

 

      
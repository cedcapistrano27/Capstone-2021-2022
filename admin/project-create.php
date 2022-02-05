0
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV CONSTRUCTION | Administrators : Project Management</title>
    <link rel="icon" type="images/x-icon" href="images/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!---<link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">--->

<style>
    body{
      margin: 0;
      padding: 0;
      font-family: "Roboto", sans-serif;
      /* background: url(landing-page.jpg) no-repeat; */
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      background-color: lightgray;
    }

    header{
      z-index: 1;
      position: fixed;
      background: #293756;
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
      background: #293756;
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

    .content{
      /* max- width: 70%; */
      margin-top: 60px;
      padding: 20px;
      margin-left: 250px;
      height: 100vh;
      transition: 0.5s;
    }
    .form-input label{
      font-size: 18px;
      font-variant: small-caps;
    }

    .form-input .label{
      flex: 1;

    }


    .form-container{
      width: 90%; 
      height: auto;
      background: white; 
      color: black;
      margin: auto;
      border-radius: 10px;
      padding-bottom: 20px;
      box-shadow: 2px 2px 10px grey;
      padding: 10px;

    }


    .createBtn{
      
      width: 40%;
      float: right;
      text-align: center;
     margin-top: 20px;
    }

    input, select{
      width: 70%;
      text-align: center;
      font-size: 15px;
     


    }

    table #total{
      border-top: none;
      border-left: none;
      border-right: none;
      border-bottom: 1px black solid;
    }

  
   table tr td #input{
      height: 5vh;
    }
  table tr td #inputrow{
      height: 7vh;
    }

    .createBtn input[type=submit]{
      border-radius: 5px;
      text-decoration: none; 
      color:white;
      background: #293756; 
      padding: 10px; 
      width: 70% ; 
      height: 7vh; 
      margin:10px auto; 
      text-align: center;
      font-variant: small-caps;
      font-size: 1.1rem;

    }

    input[type=submit]:hover{
      cursor: pointer;
      
    } 

    table tr td {
      padding: 5px;
      text-align: center;
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
        <img src="../images/logologo.png" class="logo-image" alt="BV Logo" width="30">
        <h3>BV <span>Construction</span></h3>
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
        <a href="../admin-logout.php"><i class='fas fa-sign-out-alt'></i><span>LOGOUT</span> </a>

    </div>
    <!--sidebar end-->

    <div class="content">

      <form  method="POST">


          <?php 

          include_once 'connection.php';


      $ProjectName ="";
      $target ="";
      $scope ="";
      $Location ="";
      $clientName ="";
      $Paytype ="";

///GENERAL REQUIREMENTS

      $MD_quantity ="0";
      $MD_cost ="0";
      $MD_total ="0";
      $PM_quantity ="0";
      $PM_cost ="0";
      $PM_total ="0";
      $HK_quantity ="0";
      $HK_cost ="0";
      $HK_total ="0";
      $delivery_quantity ="0";
      $delivery_cost ="0";
      $delivery_total ="0";
      $Misc_quantity ="0";
      $Misc_cost ="0";
      $Misc_total ="0";
      $noteGR ="";

///CELING WORKS 

    $FC_quantity = "0";
    $FC_cost = "0";
    $FC_total = "0";

///PAINTING WORKS

    $PFC_quantity ="0";
    $PFC_cost ="0";
    $PFC_total ="0";

    $WALL_quantity ="0";
    $WALL_cost ="0";
    $WALL_total ="0";

    $notePW ="";

///ELECTRICAL WORKS

    $EW_quantity ="0";
    $EW_cost ="0";
    $EW_total ="0";
    $noteEW ="";

///TILE WORKS

    $TWD_quantity ="0";
    $TWD_cost ="0";
    $TWD_total ="0"; 

    $TWB_quantity ="0";
    $TWB_cost ="0";
    $TWB_total ="0";

    $noteTW ="";

///FLOORING WORKS

    $FWL_quantity ="0";
    $FWL_cost ="0";
    $FWL_total ="0";

///OTHERS

    $otherA_quantity ="0";
    $otherA_cost ="0";
    $otherA_total ="0";

    $otherB_quantity ="0";
    $otherB_cost ="0";
    $otherB_total ="0";

    $otherC_quantity ="0";
    $otherC_cost ="0";
    $otherC_total ="0";

    $otherD_quantity ="0";
    $otherD_cost ="0";
    $otherD_total ="0";

    $otherE_quantity ="0";
    $otherE_cost ="0";
    $otherE_total ="0";

    $totalGR="0";
    $totalPW ="0";
    $totalTW ="0";
    $totalOther ="0";
    $totalAmount="0";

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['calculate'])) {

       $ProjectName = $_POST['projname'];
       $target = $_POST['targetdate'];
       $scope = $_POST['scope'];
       $Location = $_POST['location'];
       $clientName = $_POST['client'];
       $Paytype = $_POST['paytype'];

       ///table 

///GENERAL REQUIREMENTS
      $MD_quantity = $_POST['MD_quantity'];
      $MD_cost = $_POST['MD_cost'];
      $MD_total = $MD_quantity * $MD_cost ;

      $PM_quantity = $_POST['PM_quantity'];
      $PM_cost = $_POST['PM_cost'];
      $PM_total = $PM_quantity * $PM_cost;

      $HK_quantity = $_POST['HK_quantity'];
      $HK_cost = $_POST['HK_cost'];
      $HK_total = $HK_quantity * $HK_cost;

      $delivery_quantity = $_POST['delivery_quantity'];
      $delivery_cost = $_POST['delivery_cost'];
      $delivery_total = $delivery_quantity * $delivery_cost;

      $Misc_quantity = $_POST['Mis_quantity'];
      $Misc_cost = $_POST['Mis_cost'];
      $Misc_total = $Misc_quantity * $Misc_cost;

      $noteGR = $_POST['noteA'];

      $totalGR = $MD_total + $PM_total + $HK_total + $delivery_total + $Misc_total;

///CEILING WORKS

    $FC_quantity = $_POST['FC_quantity'];
    $FC_cost = $_POST['FC_cost'];
    $FC_total = $FC_quantity * $FC_cost;

///PAINTING WORKS

      $PFC_quantity = $_POST['PFC_quantity'];
      $PFC_cost = $_POST['PFC_cost'];
      $PFC_total = $PFC_quantity * $PFC_cost;

      $WALL_quantity = $_POST['WALL_quantity'];
      $WALL_cost = $_POST['WALL_cost'];
      $WALL_total = $WALL_quantity * $WALL_cost;

      $notePW = $_POST['noteB'];

      $totalPW = $PFC_total + $WALL_total;


///ELECTRICAL WORKS

      $EW_quantity = $_POST['EW_quantity'];
      $EW_cost = $_POST['EW_cost'];
      $EW_total = $EW_quantity * $EW_cost;

      $noteEW = $_POST['noteC'];

///TILE WORKS

      $TWD_quantity = $_POST['TWD_quantity'];
      $TWD_cost = $_POST['TWD_cost'];
      $TWD_total = $TWD_quantity * $TWD_cost;

      $TWB_quantity = $_POST['TWB_quantity'];
      $TWB_cost = $_POST['TWB_cost'];
      $TWB_total = $TWB_quantity * $TWB_cost;

      $noteTW = $_POST['noteD'];

      $totalTW = $TWD_total + $TWB_total;
///FLOORING WORKS

      $FWL_quantity = $_POST['FWL_quantity'];
      $FWL_cost = $_POST['FWL_cost'];
      $FWL_total = $FWL_quantity * $FWL_cost;

///OTHERS

      $otherA_quantity = $_POST['otherA_quantity'];
      $otherA_cost = $_POST['otherA_cost'];
      $otherA_total = $otherA_quantity * $otherA_cost;

      $otherB_quantity = $_POST['otherB_quantity'];
      $otherB_cost = $_POST['otherB_cost'];
      $otherB_total = $otherB_quantity * $otherB_cost;

      $otherC_quantity = $_POST['otherC_quantity'];
      $otherC_cost = $_POST['otherC_cost'];
      $otherC_total = $otherC_quantity * $otherC_cost;

      $otherD_quantity = $_POST['otherD_quantity'];
      $otherD_cost = $_POST['otherD_cost'];
      $otherD_total = $otherD_quantity * $otherD_cost;

      $otherE_quantity = $_POST['otherE_quantity'];
      $otherE_cost = $_POST['otherE_cost'];
      $otherE_total = $otherE_quantity * $otherE_cost;

      $totalOther = $otherA_total + $otherB_total + $otherC_total + $otherD_total + $otherE_total;
//// TOTAL AMOUNT

      $totalAmount =  $totalGR + $FC_total + $totalPW + $EW_total + $totalTW + $FWL_total + $totalOther;


      
    }
    elseif (isset($_POST['create'])) {
 

       
       $ProjectName = $_POST['projname'];
       $target = $_POST['targetdate'];
       $scope = $_POST['scope'];
       $Location = $_POST['location'];
       $clientName = $_POST['client'];
         $Paytype = $_POST['paytype'];


       ///table 

///GENERAL REQUIREMENTS
      $MD_quantity = $_POST['MD_quantity'];
      $MD_cost = $_POST['MD_cost'];
      $MD_total = $_POST['MD_total'];

      $PM_quantity = $_POST['PM_quantity'];
      $PM_cost = $_POST['PM_cost'];
      $PM_total = $_POST['PM_total'];

      $HK_quantity = $_POST['HK_quantity'];
      $HK_cost = $_POST['HK_cost'];
      $HK_total = $_POST['HK_total'];

      $delivery_quantity = $_POST['delivery_quantity'];
      $delivery_cost = $_POST['delivery_cost'];
      $delivery_total = $_POST['delivery_total'];

      $Misc_quantity = $_POST['Mis_quantity'];
      $Misc_cost = $_POST['Mis_cost'];
      $Misc_total = $_POST['Mis_total'];

      $noteGR = $_POST['noteA'];

///CEILING WORKS

      $FC_quantity = $_POST['FC_quantity'];
      $FC_cost = $_POST['FC_cost'];
      $FC_total = $_POST['FC_total'];

///PAINTING WORKS

      $PFC_quantity = $_POST['PFC_quantity'];
      $PFC_cost = $_POST['PFC_cost'];
      $PFC_total = $_POST['PFC_total'];

      $WALL_quantity = $_POST['WALL_quantity'];
      $WALL_cost = $_POST['WALL_cost'];
      $WALL_total = $_POST['WALL_total'];

      $notePW = $_POST['noteB'];


///ELECTRICAL WORKS

      $EW_quantity = $_POST['EW_quantity'];
      $EW_cost = $_POST['EW_cost'];
      $EW_total = $_POST['EW_total'];

      $noteEW = $_POST['noteC'];

///TILE WORKS

      $TWD_quantity = $_POST['TWD_quantity'];
      $TWD_cost = $_POST['TWD_cost'];
      $TWD_total = $_POST['TWD_total'];

      $TWB_quantity = $_POST['TWB_quantity'];
      $TWB_cost = $_POST['TWB_cost'];
      $TWB_total = $_POST['TWB_total'];

      $noteTW = $_POST['noteD'];
///FLOORING WORKS

      $FWL_quantity = $_POST['FWL_quantity'];
      $FWL_cost = $_POST['FWL_cost'];
      $FWL_total = $_POST['FWL_total'];

///OTHERS

      $otherA_quantity = $_POST['otherA_quantity'];
      $otherA_cost = $_POST['otherA_cost'];
      $otherA_total = $_POST['otherA_total'];

      $otherB_quantity = $_POST['otherB_quantity'];
      $otherB_cost = $_POST['otherB_cost'];
      $otherB_total = $_POST['otherB_total'];

      $otherC_quantity = $_POST['otherC_quantity'];
      $otherC_cost = $_POST['otherC_cost'];
      $otherC_total = $_POST['otherC_total'];

      $otherD_quantity = $_POST['otherD_quantity'];
      $otherD_cost = $_POST['otherD_cost'];
      $otherD_total = $_POST['otherD_total'];

      $otherE_quantity = $_POST['otherE_quantity'];
      $otherE_cost = $_POST['otherE_cost'];
      $otherE_total = $_POST['otherE_total'];


///mga total ng sub totals
       $totalGR = $_POST['totalGR'];
       $totalCW = $_POST['totalCW'];
       $totalPW = $_POST['totalPW'];
       $totalEW = $_POST['totalEW'];
       $totalTW = $_POST['totalTW'];
       $totalFW = $_POST['totalFW'];
       $totalOther = $_POST['totalOther'];

       $totalAmount = $_POST['all'];

       $reference = rand(10000,100000000);
      

      $sql_create = "INSERT INTO project( UID, 
        project_name, 
        Location, 
        scope, 
        remarks, 
        TargetDate, 
        Pdate, 
        MD_quantity, 
        MD_cost, 
        MD_total, 
        PM_quantity, 
        PM_cost, 
        PM_total, 
        HK_quantity, 
        HK_cost, 
        HK_total, 
        delivery_quantity, 
        delivery_cost, 
        delivery_total, 
        MISC_quantity, 
        MISC_cost, 
        MISC_total, 
        noteGR, 
        totalGR, 
        FC_quanity, 
        FC_cost, 
        FC_total, 
        totalCW, 
        PFC_quantity, 
        PFC_cost, 
        PFC_total, 
        WALL_quantity, 
        WALL_cost, 
        WALL_total, 
        notePW, 
        totalPW, 
        EW_quantity, 
        EW_cost, 
        EW_total, 
        noteEW, 
        totalEW, 
        TWD_quantity, 
        TWD_cost, 
        TWD_total, 
        TWB_quantity, 
        TWB_cost, 
        TWB_total, 
        noteTW, 
        totalTW, 
        FWL_quantity, 
        FWL_cost, 
        FWL_total, 
        totalFW, 
        OtherA_quantity, 
        OtherA_cost, 
        OtherA_total, 
        OtherB_quantity, 
        OtherB_cost, 
        OtherB_total, 
        OtherC_quantity, 
        OtherC_cost, 
        OtherC_total, 
        OtherD_quantity, 
        OtherD_cost, 
        OtherD_total, 
        OtherE_quantity, 
        OtherE_cost, 
        OtherE_total, 
        totalOther, 
        totalAmount) VALUES (
        '$clientName',
        '$ProjectName',
        '$Location',
        '$scope',
        'Contract',
        '$target',
        current_timestamp(),
        '$MD_quantity',
        '$MD_cost',
        '$MD_total',
        '$PM_quantity',
        '$PM_cost',
        '$PM_total',
        '$HK_quantity',
        '$HK_cost',
        '$HK_total',
        '$delivery_quantity',
        '$delivery_cost',
        '$delivery_total',
        '$Misc_quantity',
        '$Misc_cost',
        '$Misc_total',
        '$noteGR',
        '$totalGR',
        '$FC_quantity',
        '$FC_cost',
        '$FC_total',
        '$totalCW',
        '$PFC_quantity',
        '$PFC_cost',
        '$PFC_total',
        '$WALL_quantity',
        '$WALL_cost',
        '$WALL_total',
        '$notePW',
        '$totalPW',
        '$EW_quantity',
        '$EW_cost',
        '$EW_total',
        '$noteEW',
        '$totalEW',
        '$TWD_quantity',
        '$TWD_cost',
        '$TWD_total',
        '$TWB_quantity',
        '$TWB_cost',
        '$TWB_total',
        '$noteTW',
        '$totalTW',
        '$FWL_quantity',
        '$FWL_cost',
        '$FWL_total',
        '$totalFW',
        '$otherA_quantity',
        '$otherA_cost',
        '$otherA_total',
        '$otherB_quantity',
        '$otherB_cost',
        '$otherB_total',
        '$otherC_quantity',
        '$otherC_cost',
        '$otherC_total',
        '$otherD_quantity',
        '$otherD_cost',
        '$otherD_total',
        '$otherE_quantity',
        '$otherE_cost',
        '$otherE_total',
        '$totalOther',
        '$totalAmount')";

      

    $sql_payment = "INSERT INTO payment(UID, payment_issued, project_name, payment_type, reference_no, amount) 
        VALUES (
      '$clientName', 
      current_timestamp(),
      '$ProjectName',
      '$Paytype',
      '$reference',
      '$totalAmount'
    )";

    if ($Paytype == "Downpayment") {
        

       mysqli_query($conn, "INSERT INTO invoice(UID, project_name, payment_type, reference_no, balance, remarks, targetdate) 
      VALUES('$clientName', '$ProjectName', '$Paytype','$reference', '$totalAmount', 'Ongoing', '$target')");

      }else{

        $sql_invoice2 = "INSERT INTO invoice(UID, project_name, payment_type, reference_no, balance, remarks, targetdate) 
      VALUES('$clientName', '$ProjectName', '$Paytype','$reference', '$totalAmount', 'Fully-Paid', '$target')";

        mysqli_query($conn, $sql_invoice2);

      }

      $result_insert = mysqli_query($conn, $sql_create);
      $result_pay = mysqli_query($conn, $sql_payment);
    

      if ($result_insert) {
        echo "<script> alert('You have Created a New Contract!') </script>";
        echo"<script> window.location.href='http://localhost/Capstone-2021-2022/admin/project-area.php' </script>";
 
      }



      if ($conn -> connect_errno) {
 echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

// Perform a query, check for error
//if (!$conn -> query($sql_create)) {
  //echo("Error description: " . $conn -> error);
//}

$conn -> close();

      

}

}
       ?>
        
     
      <div class="form-container">

       <div class="header-form" style="text-align: center; padding: 10px; font-variant: small-caps;">

        <h3>Create New Contract/Project</h3> 
       </div>


        <hr>
       <div class="body-form">

        <table border="1" width="100%">

            <tr>
              <td>Project Name :</td>
              <td colspan="4"><input type="text" name="projname" value="<?php echo $ProjectName;?>"></td>
            </tr>

           

             <tr>
              <td>Project Location :</td>
              <td colspan="4"><input type="text" name="location" value="<?php echo $Location; ?>"></td>
            </tr>

             <tr>
              <td>Client Name:</td>
              <td colspan="4">
                <select name="client" id="client" value="<?php echo $clientName; ?>" required="">
                  <optgroup label="Select Client">
                    
                  <?php 

                include 'connection.php';

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

               </optgroup>
                  
               </select>
                

              </td>
            </tr>

             <tr>
              <td>Project Scope :</td>
              <td colspan="4">
                <select name="scope" id="scope" value="<?php echo $scope; ?>">

              <option value="Design">Design</option>
              <option value="Build">Build</option>
              <option value="Design&Build">Design & Build</option>
        
            </select>
          </td>
            </tr>

             <tr>
              <td>Project Payment Type :</td>
              <td colspan="4">
                <select name="paytype" id="paytype" value="<?php echo $Paytype; ?>">

              <option value="Downpayment">Downpayment</option>
              <option value="Fully-Paid">Fully-Paid</option>
            
        
            </select>
          </td>
            </tr>

             <tr>
              <td>Project Target Date :</td>
              <td colspan="4"><input type="date" name="targetdate" value="<?php echo $target; ?>"></td>
            </tr>

         

            <tr>
              <th>SCOPE OF WORKS</th>
              <th>QUANTITY</th>
              <th>UOM</th>
              <th>UNIT COST</th>
              <th>TOTAL</th>
            </tr>


<!---A-------->
            <tr>
            <td colspan="5"><label>GENERAL REQUIREMENTS</label></td>
            </tr>

            <tr>

            <td><label>Mobilization/Demobilization</label></td>
            <td><input type="number" name="MD_quantity" min="0" value="<?php echo $MD_quantity; ?>"></td>
            <td><label>lot</label></td>
            <td><input type="number" name="MD_cost" min="0" value="<?php echo $MD_cost; ?>"></td>
            <td><input type="text" name="MD_total" id="total" value="<?php echo $MD_total; ?>" readonly=""></td>

            </tr>

            <tr>
              <td><label>Project Management/Supervision</label></td>
              <td><input type="number" name="PM_quantity" min="0" value="<?php echo $PM_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="PM_cost" min="0" value="<?php echo $PM_cost; ?>"></td>
              <td><input type="text" name="PM_total" id="total" value="<?php echo $PM_total; ?>" readonly=""></td>

            </tr>

            <tr>
              <td><label>Housekeeping</label></td>
              <td><input type="number" name="HK_quantity" min="0" value="<?php echo $HK_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="HK_cost" min="0" value="<?php echo $HK_cost; ?>"></td>
              <td><input type="text" name="HK_total" id="total" value="<?php echo $HK_total; ?>" readonly=""></td>
            </tr>

            <tr>
              <td><label>Material Delivery</label></td>
              <td><input type="number" name="delivery_quantity" min="0" value="<?php echo $delivery_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="delivery_cost" min="0" value="<?php echo $delivery_cost; ?>"></td>
              <td><input type="text" name="delivery_total" id="total" value="<?php echo $delivery_total; ?>" readonly=""></td>
            </tr>

            <tr>
              <td><label>Miscellaneous</label></td>
              <td><input type="number" name="Mis_quantity" min="0" value="<?php echo $Misc_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="Mis_cost" min="0" value="<?php echo $Misc_cost; ?>"></td>
              <td><input type="text" name="Mis_total" id="total" value="<?php echo $Misc_total; ?>" readonly=""></td>
            </tr>

            <tr>
              <td><label>Note :</label></td>
              <td colspan="4"><input type="text" name="noteA" value="<?php echo $noteGR; ?>"></td>
            </tr>

             <tr>
              <td colspan="3"><label>Sub Total(A) :</label></td>
              <td colspan="2"><input type="text" name="totalGR" value="<?php echo $totalGR; ?>" readonly></td>
            </tr>
<!---B-------->
            <tr>
            <td colspan="5"><label>CEILING WORKS</label></td>
            </tr>

            <tr>
              <td><label>False Ceiling</label></td>
              <td><input type="number" name="FC_quantity" min="0" value="<?php echo $FC_quantity; ?>"></td>
              <td><label>sq. m</label></td>
              <td><input type="number" name="FC_cost" min="0" value="<?php echo $FC_cost; ?>"></td>
              <td><input type="text" name="FC_total" id="total" value="<?php echo $FC_total; ?>" readonly></td>

            </tr>

            <tr>
              <td colspan="3"><label>Sub Total(B) :</label></td>
              <td colspan="2"><input type="text" name="totalCW" value="<?php echo $FC_total; ?>" readonly></td>
            </tr>
<!---C-------->
            <tr>
            <td colspan="5"><label>PAINTING WORKS</label></td>
            </tr>


            <tr>
              <td><label>False Ceiling</label></td>
              <td><input type="number" name="PFC_quantity" min="0" value="<?php echo $PFC_quantity; ?>"></td>
              <td><label>sq. m</label></td>
              <td><input type="number" name="PFC_cost" min="0" value="<?php echo $PFC_cost; ?>"></td>
              <td><input type="text" name="PFC_total" id="total" value="<?php echo $PFC_total; ?>"> </td>

            </tr>
            <tr>
              <td><label>Interior Wall</label></td>
              <td><input type="number" name="WALL_quantity" min="0" value="<?php echo $WALL_quantity; ?>"></td>
              <td><label>sq. m</label></td>
              <td><input type="number" name="WALL_cost" min="0" value="<?php echo $WALL_cost; ?>"></td>
              <td><input type="text" name="WALL_total" id="total" value="<?php echo $WALL_total; ?>"></td>

            </tr>
           
            <tr>
              <td colspan="1"><label>Note :</label></td>
              <td colspan="4"><input type="text" name="noteB" value="<?php echo $notePW; ?>"></td>
            </tr>

             <tr>
              <td colspan="3"><label>Sub Total(C) :</label></td>
              <td colspan="2"><input type="text" name="totalPW" value="<?php echo $totalPW; ?>" readonly></td>
            </tr>
<!---D-------->

<tr>
            <td colspan="5"><label>ELECTRICAL WORKS</label></td>
            </tr>

            <tr>
              <td><label>Electrical Conduiting</label></td>
              <td rowspan="3"><input type="number" name="EW_quantity" min="0" id="inputrow" value="<?php echo $EW_quantity; ?>"></td>
              <td rowspan="3"><label>lot</label></td>
              <td rowspan="3"><input type="number" name="EW_cost" min="0" id="inputrow" value="<?php echo $EW_cost; ?>"></td>
              <td rowspan="3"><input type="text" name="EW_total" id="total" value="<?php echo $EW_total; ?>" readonly></td>

            </tr>
            <tr>
              <td><label>Wire Installation</label></td>
            </tr>
            <tr>
              <td><label>Lighting Installation</label></td>
            </tr>

            <tr>
              <td><label>Note :</label></td>
              <td colspan="4"><input type="text" name="noteC" value="<?php echo $noteEW; ?>"></td>
            </tr>

             <tr>
              <td colspan="3"><label>Sub Total(D) :</label></td>
              <td colspan="2"><input type="text" name="totalEW" value="<?php echo $EW_total; ?>" readonly></td>
            </tr>

<!---E-------->

<tr>
            <td colspan="5"><label>TILE WORKS</label></td>
            </tr>

            <tr>
              <td><label>Demolition of Existing Tiles</label></td>
              <td rowspan="2"><input type="number" name="TWD_quantity" min="0" id="input" value="<?php echo $TWD_quantity; ?>"></td>
              <td rowspan="2"><label>lot</label></td>
              <td rowspan="2"><input type="number" name="TWD_cost" min="0" id="input" value="<?php echo $TWD_cost; ?>"></td>
              <td rowspan="2"><input type="text" name="TWD_total" id="total" value="<?php echo $TWD_total; ?>" readonly></td>

            </tr>
            <tr>
              <td><label>Installation of Tiles. 60 cm x 60 cm</label></td>
            </tr>
            <tr>
              <td><label>Backsplash Installation</label></td>
              <td><input type="number" name="TWB_quantity" min="0" value="<?php echo $TWB_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="TWB_cost" min="0" value="<?php echo $TWB_cost; ?>"></td>
              <td><input type="text" name="TWB_total" id="total" value="<?php echo $TWB_total; ?>" readonly></td>
            </tr>

            <tr>
              <td colspan="1"><label>Note :</label></td>
              <td colspan="4"><input type="text" name="noteD" value="<?php echo $noteTW; ?>"></td>
            </tr>

             <tr>
              <td colspan="3"><label>Sub Total(E) :</label></td>
              <td colspan="2"><input type="text" name="totalTW" value="<?php echo $totalTW; ?>" readonly></td>
            </tr>
<!-----F---->

 <tr>
            <td colspan="5"><label>FLOORING WORKS</label></td>
            </tr>


            <tr>
              <td><label>Laminated Planks Installation. 20cm x 120cm x 8 mm</label></td>
              <td><input type="number" name="FWL_quantity" min="0" value="<?php echo $FWL_quantity; ?>"></td>
              <td><label>sq. m</label></td>
              <td><input type="number" name="FWL_cost" min="0" value="<?php echo $FWL_cost; ?>"></td>
              <td><input type="text" name="FWL_total" id="total" value="<?php echo $FWL_total; ?>" readonly></td>

            </tr>

             <tr>
              <td colspan="3"><label>Sub Total(F) :</label></td>
              <td colspan="2"><input type="text" name="totalFW" value="<?php echo $FWL_total; ?>" readonly></td>
            </tr>

<!-----G---->

 <tr>
            <td colspan="5"><label>OTHERS</label></td>
            </tr>

            <tr>
              <td><label>Baluster and Handrail Repaint</label></td>
              <td><input type="number" name="otherA_quantity" min="0" value="<?php echo $otherA_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="otherA_cost" min="0" value="<?php echo $otherA_cost; ?>"></td>
              <td><input type="text" name="otherA_total" id="total" value="<?php echo $otherA_total; ?>" readonly></td>

            </tr>

            <tr>
              <td><label>Demolition and Installation of 40x40 tiles (In balcony)</label></td>
              <td><input type="number" name="otherB_quantity" min="0" value="<?php echo $otherB_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="otherB_cost" min="0" value="<?php echo $otherB_cost; ?>"></td>
              <td><input type="text" name="otherB_total" id="total" value="<?php echo $otherB_total; ?>" readonly></td>

            </tr>

            <tr>
              <td><label>Aluminum Screen Door Installation 2100 mm x 900 mm</label></td>
              <td><input type="number" name="otherC_quantity" min="0" value="<?php echo $otherC_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="otherC_cost" min="0" value="<?php echo $otherC_cost; ?>"></td>
              <td><input type="text" name="otherC_total" id="total" value="<?php echo $otherC_total; ?>" readonly></td>

            </tr>

            <tr>
              <td><label>False Wall, Modular Cabinet, Fabrication and Installation</label></td>
              <td><input type="number" name="otherD_quantity" min="0" value="<?php echo $otherD_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="otherD_cost" min="0" value="<?php echo $otherD_cost; ?>"></td>
              <td><input type="text" name="otherD_total" id="total" value="<?php echo $otherD_total; ?>" readonly></td>

            </tr>

            <tr>
              <td><label>Installation of Shower Enclosure</label></td>
              <td><input type="number" name="otherE_quantity" min="0" value="<?php echo $otherE_quantity; ?>"></td>
              <td><label>lot</label></td>
              <td><input type="number" name="otherE_cost" min="0" value="<?php echo $otherE_cost; ?>"></td>
              <td><input type="text" name="otherE_total" id="total" value="<?php echo $otherE_total; ?>" readonly></td>

            </tr>

             <tr>
              <td colspan="3"><label>Sub Total(G) :</label></td>
              <td colspan="2"><input type="text" name="totalOther" value="<?php echo $totalOther; ?>" readonly></td>
            </tr>

             <tr>
              <td colspan="3"><label>Total Amount(A + B + C + D + E + F + G) :</label></td>
              <td colspan="2"><input type="text" name="all" value="<?php echo $totalAmount; ?>" readonly></td>
            </tr>
          
          
        </table>

      
        <div class="createBtn">
          <input type="submit" name="calculate" value="Calculate">
        </div>


        <div class="createBtn">
          <input type="submit" name="create" value="Create New Contract">
        </div>
            
                  
      <!---End body-Container ---->
        </div>
       
      
      <!---End Form-Container ---->
        </div>
      

                

       </form>

        </div>
        
       

</body>
</html>

 <script type="text/javascript">
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
    
    

      
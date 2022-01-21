
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
  max-width: 100%;
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  height: 100vh;
  transition: 0.5s;
}

.btn:hover{
      background: white;
      color: black;
      border: 2px black solid;
      font-weight: bolder;
    }

    .form-container{
      width: 60%; 
      height: auto;
      background: rgba(0, 0, 0, 0.6); 
      margin: auto;
      color: white;
      border-radius: 10px;
      padding: 10px;
      border: 4px white solid;
    }
.header-form{
  text-align: center; 
  padding: 10px;
  font-variant: small-caps;
  font-size: 1.25rem;
}
.form-input{
  display: flex; 
  text-align: center;
  padding: 10px;
  margin-top: 10px;
  align-items: center;


}
.form-input .label{
  flex: 1;
  display: block;

}

textarea{
  margin: 10px;
  display: block;
}
.form-input .label label{
  font-variant: small-caps;
}
.form-input .label input{
  width: 90%;
  height: 5vh;
  font-size: 16px;
  text-align: center;
  font-weight: 600;
}
input[type=submit]{
  border-radius: 5px;
  text-decoration: none; 
  color:white; 
  display: block; 
  background: black; 
  padding: 10px; 
  width: 50% ; 
  margin:20px auto; 
  text-align: center;
  cursor: pointer;
  font-size: 18px;
  font-variant: small-caps;
}

.createBtn a{
  border-radius: 5px;
  text-decoration: none; 
  color:white; display: 
  block; background: black; 
  padding: 10px; width: 50% ; 
  margin:20px auto; 
  text-align: center;
}

input[type=submit]:hover, .createBtn a:hover{
  background: white;
  color: black;
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

      <form method="POST">
        <?php 

        include 'connection.php';

         $time = $_GET['time'];
        $status_sql = "SELECT * FROM project WHERE PID = '$time'";

        $res_p = mysqli_query($conn, $status_sql);

        if ($res_p->num_rows > 0) {
        
        while ($row = mysqli_fetch_assoc($res_p)) {
          $ProjectID = $row['PID'];
          $ClientID = $row['UID'];
          $ProjectName = $row['project_name'];
          $ProjectInfo = $row['project_info'];
          $Remarks = $row['remarks'];
          $DateIssue = $row['Pdate'];

        }

        
        }
        ?>
        
     
      <div class="form-container" >
       <div class="header-form" >

        <h3>Project Progress</h3> 
       </div>
<hr>
       <div class="body-form">

        <div class="form-input">
            
            <div class="label" >
              <span><label>Project Name</label></span> 
            </div>

            <div class="label">
              <span>:</span> 
            </div>

             <div class="label" >
              <span><input type="text" name="projname" value="<?php echo $ProjectName; ?>" readonly></span> 
            </div>

        </div>

         <div class="form-input">
            
            <div class="label" >
              <span><label>Client ID</label></span> 
            </div>

            <div class="label" >
              <span>:</span> 
            </div>

             <div class="label" >
              <span><input type="text" name="client" value="<?php echo $ClientID; ?>" readonly></span> 
            </div>

        </div>

        <?php 

        if (isset($_POST['update'])) {
          $CID = $_POST['client'];
          $proj = $_POST['projname'];
          $info = $_POST['info'];

            $sql_time ="INSERT INTO timeline(UID, ProjectName, ProjectInfo, DateIssued) VALUES ('$CID','$proj','$info',current_timestamp())"; 

            $res_time = mysqli_query($conn, $sql_time);

            if ($res_time == true) {
               echo "<script> alert('You have Created a New Update in Timeline!') </script>";
                echo "<script> window.location.href='http://localhost/Capstone-2021-2022/admin/project-area.php' </script>";
            }
        }

      





        ?>


      <div class="form-input">
            
            <div class="label">
              <span><label>Progress And Accomplishments</label></span> 
            </div>

             <div class="label" >
              <textarea name="info" cols="40" rows="10" style="resize: none;"></textarea>
            </div>

        
      </div>

         <div class="createBtn">
                <input type="submit" name="update" value="Proceed Update">
                
                <a href="project-area.php">Cancel</a>
                
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


  function myFunction() {
  // Get the checkbox

  var checkBox = document.getElementById("downpayment");


  // Get the output text
  var text = document.getElementById("dpayment");
  

  //If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "flex";
   
  } else {
    text.style.display = "none";
  }
}
    </script>

      
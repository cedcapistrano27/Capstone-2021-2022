S<?php 
  session_start()
 





 ?>
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
  max- width: 70%;
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
  width: 80%; 
  height: 100vh;
  background: rgba(0, 0, 0, 0.57); 
  color: white;
  margin: auto;
  border-radius: 10px;

}

.form-input{

  display: flex; 
  text-align: center;
  padding: 5px;
  margin-top: 10px;
}

.form-textarea{
  text-align: center;
  padding: 5px;
  margin: 10px 20px;
  width: 50%;
 float: left;
}

.createBtn{
  width: 40%;
  float: left;
  text-align: center;
 margin: 10px auto;
}

input, select{
  width: 80%;
  height: 5vh;
  text-align: center;
  font-size: 15px;

}

.createBtn input[type=submit]{
  border-radius: 5px;
  text-decoration: none; 
  color:white;
  background: black; 
  padding: 10px; 
  width: 70% ; 
  height: 7vh; 
  margin:10px auto; 
  text-align: center;
  font-variant: small-caps;
  font-size: 1.1rem;

}

input[type=submit]:hover{
  background: white;
  color: black;
  border:5px black solid ;
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

      if (isset($_POST['create'])) {
       
       $ProjectName = $_POST['projname'];
       $target = $_POST['target'];
       $scope = $_POST['scope'];
       $Location = $_POST['location'];
       $clientName = $_POST['client'];
       $Paytype = $_POST['paymenttype'];
       $downpaid = $_POST['downpaid'];
       $TotalAmount = $_POST['fullpaid'];

       $reference = rand(10000,100000000);
      

      $sql_create = "INSERT INTO project(UID, project_name,Location,scope, remarks,TargetDate, Pdate) VALUES (
      '$clientName',
      '$ProjectName',
      '$Location',
      '$scope',
      'Ongoing','$target', current_timestamp())";

      

      $sql_payment = "INSERT INTO payment(UID, payment_issued, project_name, payment_type, reference_no, amount) 
      VALUES (
      '$clientName', current_timestamp(),'$ProjectName','$Paytype','$reference', '$TotalAmount')";

      $result_insert = mysqli_query($conn, $sql_create);
      $result_pay = mysqli_query($conn, $sql_payment);
    

      if ($result_insert == true) {
        echo "<script> alert('You have Created a New Contract!') </script>";
  echo "<script> window.location.href='project-area.php' </script>";
      }

      if ($Paytype == "Downpayment") {
        

        mysqli_query($conn, "INSERT INTO invoice(UID, project_name, payment_type, reference_no, balance, remarks, targetdate) 
      VALUES('$clientName', '$ProjectName', '$Paytype','$reference', '$TotalAmount', 'Ongoing', '$target')");

      }else{

        $sql_invoice2 = "INSERT INTO invoice(UID, PID, project_name, payment_type, reference_no balance, remarks, targetdate) 
      VALUES('$clientName', '$ProjectName', '$Paytype','$reference', '$TotalAmount', 'Fully-Paid', '$target')";

        mysqli_query($conn, $sql_invoice2);

      }



      }

       ?>
        
     
      <div class="form-container" style="">
       <div class="header-form" style="text-align: center; padding: 10px; font-variant: small-caps;">

        <h3>Create New Contract/Project Form</h3> 
       </div>
<hr>
       <div class="body-form">

        <div class="form-input">
            
            <div class="label" style="flex: 1;">
              <span><label>Project Name</label></span> 
            </div>

            <div class="label" style="flex:.5;">
              <span>:</span> 
            </div>

             <div class="label" style="flex: 1.5;">
              <span><input type="text" name="projname"></span> 
            </div>

        </div>


        <div class="form-input">
            
            <div class="label" style="flex: 1;">
              <span><label>Scope</label></span> 
            </div>

            <div class="label" style="flex:.5;">
              <span>:</span> 
            </div>

             <div class="label" style="flex: 1.5;">
              <span><input list="scopes" name="scope" id="scope">
                <datalist id="scopes">
                  <option value="Design">Design </option>
                  <option value="Build">Build</option>
                  <option value="Design & Build">Design & Build</option>
                </datalist>



              </span> 
            </div>

        </div>


        <div class="form-input">
            
            <div class="label" style="flex: 1;">
              <span><label>Project Location</label></span> 
            </div>

            <div class="label" style="flex:.5;">
              <span>:</span> 
            </div>

             <div class="label" style="flex: 1.5;">
              <span><input type="text" name="location"></span> 
            </div>

        </div>

        <div class="form-input">
            
            <div class="label" style="flex: 1;">
              <span><label for="client">Client's ID</label></span> 
            </div>

            <div class="label" style="flex:.5;">
              <span>:</span> 
            </div>

             <div class="label" style="flex: 1.5;">
              <span><input list="clients" name="client" id="client">
              <datalist id="clients">

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

         
              </datalist>
            </span>
            </div>

        </div>

         <div class="form-input">
            <div class="label">
              <span><label for="payment">Payment Type</label></span> 
            </div>

            <div class="label">
              <span>:</span> 
            </div>

             <div class="label">

            <select name="paymenttype" id="payment">
              <option value="Downpayment">Downpayment</option>
              <option value="Fully-Paid">Fully-Paid</option>
            </select>
            </div>

        </div>

        <div class="form-input">
            
            <div class="label">
              <span><label>Downpayment</label></span> 
            </div>

            <div class="label">
              <span>:</span> 
            </div>

             <div class="label">
              <span><input type="number" name="downpaid" min="0" value="0"></span> 
            </div>

        </div>


        <div class="form-input">
            
            <div class="label">
              <span><label>Total Payment</label></span> 
            </div>

            <div class="label">
              <span>:</span> 
            </div>

             <div class="label">
              <span><input type="number" name="fullpaid" min="0" value="0"></span> 
            </div>

        </div>

        <div class="form-input">
            
            <div class="label">
              <span><label>Target Date</label></span> 
            </div>

            <div class="label">
              <span>:</span> 
            </div>

             <div class="label">
              <span><input type="date" name="target" min="0" value="0"></span> 
            </div>

        </div>

        <div class="form-input">
            
            <div class="label">
              <span><label>Scope of Work</label></span> 
            </div>

            <div class="label">
              <span>:</span> 
            </div>

            <div class="label">
                <div id="survey_options">
                  <select name="survey_options[]" class="survey_options" id="list">
                    <optgroup label="A. General Requirements">
                      <option value="Mobilization/Demobilization">Mobilization/Demobilization</option>
                      <option value="Project Management/Supervision">Project Management/Supervision</option>
                      <option value="Housekeeping">Housekeeping</option>
                      <option value="Material Delivery">Material Delivery</option>
                      <option value="Miscellaneous">Miscellaneous</option>
                    </optgroup>
                  </select>
                </div>
                <div class="oten">
                  <input type="text" name="survey_options[]" id="txtresults">
                </div>
            </div>
                
            <div class="controls" style="width:294px; margin:15px auto;">
              <a href="#" id="add_more_fields" class=""><i class="fa fa-plus"></i>Add</a>
              <a href="#" id="remove_fields" style="float:right;"><i class="fa fa-minus" style="margin-right:5px;"></i>Remove</a>
            </div>

        </div>

        

      

        <div class="createBtn">
          <input type="submit" name="create" value="Create New Contract">
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
    
    <script>
      var survey_options = document.getElementById('survey_options');
      var add_more_fields = document.getElementById('add_more_fields');
      var remove_fields = document.getElementById('remove_fields');

      add_more_fields.onclick = function(){
        var newField = document.createElement('input');
        newField.setAttribute('type','text');
        newField.setAttribute('id','txtresults');
        newField.setAttribute('name','survey_options[]');
        newField.setAttribute('class','survey_options');
        newField.setAttribute('size',50);
        newField.setAttribute('placeholder','Another field');
        survey_options.appendChild(newField);
      }

      remove_fields.onclick = function(){
        var input_tags = survey_options.getElementsByTagName('input');
        if(input_tags.length > 0){
          survey_options.removeChild(input_tags[(input_tags.length) - 1]);
        }
      }

      $(function(){
        $('#list').change(function(){
          var displaybeach=$('#list option:selected').text();
          $('#txtresults').val(displaybeach);
        })
      })

    </script>

      
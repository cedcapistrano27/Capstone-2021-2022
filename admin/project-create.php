<?php 


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
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    

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
  width: 80%; 
  height: auto;
  background: white; 
  color: black;
  margin: auto;
  border-radius: 10px;
  padding-bottom: 20px;
  box-shadow: 2px 2px 10px grey;

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
  float: right;
  text-align: center;
 margin-top: 20px;
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
       $checkbox1 = $_POST['chkl'] ;

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

        $sql_invoice2 = "INSERT INTO invoice(UID, project_name, payment_type, reference_no, balance, remarks, targetdate) 
      VALUES('$clientName', '$ProjectName', '$Paytype','$reference', '$TotalAmount', 'Fully-Paid', '$target')";

        mysqli_query($conn, $sql_invoice2);

      }

      for ($i=0; $i<sizeof ($checkbox1);$i++) {  
        $query="INSERT INTO scopeofwork (UID,project_name, scope_of_work) VALUES ('$clientName','$ProjectName','".$checkbox1[$i]. "')";  
        mysqli_query($conn,$query);  
        }  
       
      
    
      }

       ?>
        
     
      <div class="form-container" style="">
       <div class="header-form" style="text-align: center; padding: 10px; font-variant: small-caps;">

        <h3>Create New Contract/Project</h3> 
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

        <div class="" style="border:1px solid; width:80%; margin-left:30px" >
          <div class="label">
              <span><label>Scope of Work</label></span> 
            </div>
              <!-- <div class="controls col-sm-12" style="width:auto;">
            <button id="addMore" style="padding:10px;background-color:#293756;color:white;border-radius:20px; ">Add more fields</button> 
            <button id="deleteField" style="padding:10px;background-color:#293756;color:white;border-radius:20px; ">Delete fields</button> -->
              <!-- <a href="#" id="add_more_fields" class=""><i class="fa fa-plus"></i>Add</a>
              <a href="#" id="remove_fields" style="float:right;"><i class="fa fa-minus" style="margin-right:5px;"></i>Remove</a> -->
              <label for="">A. General Requirements</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Mobilization/Demobilization" style="width:25px; "><span><label>  Mobilization/Demobilization</label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Project Management/Supervision" style="width:25px; "><span><label>  Project Management/Supervision</label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Housekeeping" style="width:25px; "><span><label>  Housekeeping</label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Material Delivery" style="width:25px; "><span><label>  Material Delivery</label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Miscellaneous" style="width:25px; "><span><label>  Miscellaneous</label></span> 
              </div>
              <label for="">B. Ceiling Works</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="False Ceiling" style="width:25px; "><span><label>False Ceiling </label></span> 
              </div>

              <label for="">C. Painting Works</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="False Ceiling" style="width:25px; "><span><label>False Ceiling </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Interior Wall" style="width:25px; "><span><label>Interior Wall </label></span> 
              </div>

              <label for=""> D. Electrical Works</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Electrical Conduiting" style="width:25px; "><span><label>Electrical Conduiting </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Wire Installation" style="width:25px; "><span><label>Wire Installation</label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Lighting Installation" style="width:25px; "><span><label>Lighting Installation </label></span> 
              </div>

              <label for="">E. Tile Works</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Demolition of Existing Tiles" style="width:25px; "><span><label>Demolition of Existing Tiles </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Installation of Tile. 60cm x 60cm" style="width:25px; "><span><label>Installation of Tile. 60cm x 60cm </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Backplash Installation" style="width:25px; "><span><label>Backplash Installation </label></span> 
              </div>

              <label for="">F. Flooring Works</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Laminated Planks Installation. 20cm x 120cm x 8mm" style="width:25px; "><span><label>Laminated Planks Installation. 20cm x 120cm x 8mm </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Installation of Laminated Planks including foam" style="width:25px; "><span><label>Installation of Laminated Planks including foam </label></span> 
              </div>

              <label for="">G. Others</label>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Baluster and Handrail Repaint" style="width:25px; "><span><label>Baluster and Handrail Repaint </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Demolition and Installation of 40x40 tiles @ balcony" style="width:25px; "><span><label>Demolition and Installation of 40x40 tiles @ balcony </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Aluminum Screen Door Installation. 2100mm x 900mm" style="width:25px; "><span><label>Aluminum Screen Door Installation. 2100mm x 900mm </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="False Wall,Modular Cabinet(Hanging and Under sink) Fabrication and Installation" style="width:25px; "><span><label>False Wall,Modular Cabinet(Hanging and Under sink) Fabrication and Installation </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]"  value="Installation of Shower Enclosure" style="width:25px; "><span><label>Installation of Shower Enclosure </label></span> 
              </div>
              <div class="">
                <input type="checkbox" name="chkl[ ]" value="Laminated finish for Cabinet and Shelves" style="width:25px; "><span><label>Laminated finish for Cabinet and Shelves </label></span> 
              </div>
          </div>

            <div class="col-sm-12" style="text-align: center;">
            
                <!-- <ul id="fieldList" style="">
                  <li style="list-style:none;" id="list">
                  <select name="survey_options[]" class="survey_options" >
                    <optgroup label="A. General Requirements">
                      <option value="Mobilization/Demobilization">Mobilization/Demobilization</option>
                      <option value="Project Management/Supervision">Project Management/Supervision</option>
                      <option value="Housekeeping">Housekeeping</option>
                      <option value="Material Delivery">Material Delivery</option>
                      <option value="Miscellaneous">Miscellaneous</option>
                    </optgroup>
                    <optgroup label="B. Ceiling Works">
                      <option value="False Ceiling">False Ceiling</option>
                    </optgroup>
                    <optgroup label="C. Painting Works">
                      <option value="False Ceiling">False Ceiling</option>
                      <option value="Interior Wall"> Interior Wall</option>
                    </optgroup>
                    <optgroup label="D. Electrical Works">
                      <option value="Electrical Conduiting">Electrical Conduiting</option>
                      <option value="Wire Installation">Wire Installation</option>
                      <option value="Lighting Installation">Lighting Installation</option>
                    </optgroup>
                    <optgroup label="E. Tile Works">
                      <option value="Demolition of Existing Tiles">Demolition of Existing Tiles</option>
                      <option value="Installation of Tile. 60cm x 60cm">Installation of Tile. 60cm x 60cm</option>
                      <option value="Backplash Installation">Backplash Installation</option>
                    </optgroup>
                    <optgroup label="F. Flooring Works">
                      <option value="Laminated Planks Installation. 20cm x 120cm x 8mm">Laminated Planks Installation. 20cm x 120cm x 8mm</option>
                      <option value="Installation of Laminated Planks including foam">Installation of Laminated Planks including foam</option>
                    </optgroup>
                    <optgroup label="G. Others">
                      <option value="Baluster and Handrail Repaint">Baluster and Handrail Repaint</option>
                      <option value="Demolition and Installation of 40x40 tiles @ balcony">Demolition and Installation of 40x40 tiles @ balcony</option>
                      <option value="Aluminum Screen Door Installation. 2100mm x 900mm">Aluminum Screen Door Installation. 2100mm x 900mm</option>
                      <option value="False Wall,Modular Cabinet(Hanging and Under sink) Fabrication and Installation">False Wall,Modular Cabinet(Hanging and Under sink) Fabrication and Installation</option>
                      <option value="Installation of Shower Enclosure">Installation of Shower Enclosure</option>
                      <option value="Laminated finish for Cabinet and Shelves">Laminated finish for Cabinet and Shelves</option>
                    </optgroup>
                  </select>
                  </li>
                  <li style="list-style:none;" id="list">
                    <input name="qty[]" type="number" placeholder="QTY" id="qty"  />
                  </li>
                  <li style="list-style:none;" id="list">
                    <input name="cost[]" type="number" placeholder="PRICE" id="price"  />
                  </li>
              </ul> -->
            </div>
                
            
                  
        
        </div>
        <div class="createBtn">
          <input type="submit" name="create" value="Create New Contract">
        </div>
        </div>
        
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
          
      $(function() {
      $("#addMore").click(function(e) {
        e.preventDefault();
        $("#fieldList").append("<li style='list-style:none;'>&nbsp;</li>");
        $("#fieldList").append(`<li style="list-style:none;"><select name="survey_options[]" class="survey_options" id="list">
                    <optgroup label="A. General Requirements">
                      <option value="Mobilization/Demobilization">Mobilization/Demobilization</option>
                      <option value="Project Management/Supervision">Project Management/Supervision</option>
                      <option value="Housekeeping">Housekeeping</option>
                      <option value="Material Delivery">Material Delivery</option>
                      <option value="Miscellaneous">Miscellaneous</option>
                    </optgroup>
                    <optgroup label="B. Ceiling Works">
                      <option value="False Ceiling">False Ceiling</option>
                    </optgroup>
                    <optgroup label="C. Painting Works">
                      <option value="False Ceiling">False Ceiling</option>
                      <option value="Interior Wall"> Interior Wall</option>
                    </optgroup>
                    <optgroup label="D. Electrical Works">
                      <option value="Electrical Conduiting">Electrical Conduiting</option>
                      <option value="Wire Installation">Wire Installation</option>
                      <option value="Lighting Installation">Lighting Installation</option>
                    </optgroup>
                    <optgroup label="E. Tile Works">
                      <option value="Demolition of Existing Tiles">Demolition of Existing Tiles</option>
                      <option value="Installation of Tile. 60cm x 60cm">Installation of Tile. 60cm x 60cm</option>
                      <option value="Backplash Installation">Backplash Installation</option>
                    </optgroup>
                    <optgroup label="F. Flooring Works">
                      <option value="Laminated Planks Installation. 20cm x 120cm x 8mm">Laminated Planks Installation. 20cm x 120cm x 8mm</option>
                      <option value="Installation of Laminated Planks including foam">Installation of Laminated Planks including foam</option>
                    </optgroup>
                    <optgroup label="G. Others">
                      <option value="Baluster and Handrail Repaint">Baluster and Handrail Repaint</option>
                      <option value="Demolition and Installation of 40x40 tiles @ balcony">Demolition and Installation of 40x40 tiles @ balcony</option>
                      <option value="Aluminum Screen Door Installation. 2100mm x 900mm">Aluminum Screen Door Installation. 2100mm x 900mm</option>
                      <option value="False Wall,Modular Cabinet(Hanging and Under sink) Fabrication and Installation">False Wall,Modular Cabinet(Hanging and Under sink) Fabrication and Installation</option>
                      <option value="Installation of Shower Enclosure">Installation of Shower Enclosure</option>
                      <option value="Laminated finish for Cabinet and Shelves">Laminated finish for Cabinet and Shelves</option>
                    </optgroup>
                  </select></li>`);
        
        $("#fieldList").append("<li style='list-style:none;'><input name='qty[]' type='number' placeholder='QTY' id='qty' onkeyup='total()'/></li>");
        $("#fieldList").append("<li style='list-style:none;'><input name='cost[]' type='number' placeholder='PRICE' id='price' onkeyup='total()'/></li>");
        $("#fieldList").append("<li style='list-style:none;'><input class='form-control' type='number' id='show_result' placeholder='TOTAL' readonly/> </li>");
        
      });
    });
        var survey_options = document.getElementById('list');
        var remove_fields = document.getElementById('deleteFields');
        remove_fields.onclick = function(){
        var input_tags = survey_options.getElementsByTagName('select');
        if(input_tags.length > 1){
          survey_options.removeChild(input_tags[(input_tags.length) - 1]);
        }
      }

    //   function total() {
    //   var quantity = parseInt(document.getElementById('qty').value);

    //   var price = parseInt(document.getElementById('price').value);

    //   var total = price * quantity;

    //   document.getElementById('show_result').value = total;
    //   document.getElementById('result').value = total;
    // }

      // var add_more_fields = document.getElementById('add_more_fields');
   

      // add_more_fields.onclick = function(){
      //   var newField = document.createElement('input');
      //   newField.setAttribute('type','text');
      //   newField.setAttribute('id','txtresults');
      //   newField.setAttribute('name','survey_options[]');
      //   newField.setAttribute('class','survey_options');
      //   newField.setAttribute('size',50);
      //   newField.setAttribute('placeholder','Another field');
      //   survey_options.appendChild(newField);
      // }

      // remove_fields.onclick = function(){
      //   var input_tags = survey_options.getElementsByTagName('input');
      //   if(input_tags.length > 0){
      //     survey_options.removeChild(input_tags[(input_tags.length) - 1]);
      //   }
      // }

      // $(function(){
      //   $('#list').change(function(){
      //     var displaybeach=$('#list option:selected').text();
      //     $('#txtresults').val(displaybeach);
      //   })
      // })










    const dayNumber = new Date().getDate();
    const year = new Date().getFullYear();
    const dayName = new Date().toLocaleString("default", {weekday: "long"});
    const monthName = new Date().toLocaleString("default", {month: "long"});

    document.querySelector(".month-name").innerHTML = monthName;
    document.querySelector(".day-name").innerHTML = dayName;
    document.querySelector(".date-number").innerHTML = dayNumber;
    document.querySelector(".year").innerHTML = year;
    </script>
    
    

      
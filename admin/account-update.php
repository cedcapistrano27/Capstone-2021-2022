
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV CONSTRUCTION | Administrators : Account</title>
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
  /* background: url(landing-page.jpg) no-repeat; */
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  background-color: whitesmoke;
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
  
.form-container{
  width: 70%; 
  background: white; 
  height: auto; 
  padding: 10px; 
  margin: auto;
  color: black;
  border: 3px white solid;
  border-radius: 10px;
  box-shadow: 2px 2px 10px grey;

}

.input-form{
  width:100%;
  margin-top: 20px;
  padding: 10px 0px 10px 0px;
  display: flex; 
  text-align: center;
}

.input-form .label{
  flex: 1;
  padding: 3px;

}
.input-form label{
  font-size: 16px;
  font-weight: 600;
}

.input-form .label input{
  width: 90%;
  height: 5vh;
  text-align: center;
  font-size: 15px;
  font-weight: 600;
}

.header-form{
  text-align: center;
  font-size: 1.5rem;
  font-variant: small-caps;
}

.createBtn{
  display: flex;
}

.createBtn a {

  border-radius: 5px;
  text-decoration: none; 
  color:white; 
  display: block; 
  background: #055C9D; 
  padding: 10px; 
  width: 30% ; 
  margin:20px auto; 
  text-align: center;
  font-weight: bold;
  font-variant: small-caps;
 

}

.createBtn a:hover{
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

  section{
    max-width: 90%;
    margin-top: 40px;
    margin-left: auto;
    margin-right: auto;
    height: auto;
    display: flex;
    flex-direction: column-reverse;
  }

  .calendar, .widget{
    width: 100%;
    padding-bottom: 20px;
  }
/*widget*/
  .color1{
    grid-area: first;
  }
  .color2{
    grid-area: second;
  }
  .color3{
    grid-area: third;
  }
  .color4{
    grid-area: fourth;
  }
  .color5{
    grid-area: fifth;
  }
  .color6{
    grid-area: sixth;
  }

  .widget{
    display: grid;
    grid-template-areas: 'first second' 'third fourth' 'fifth sixth';
  }



  /*calendar*/


.calendar .calendar-body{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(15px);
  border-bottom: 6px solid #4285F4;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 8px;
  box-shadow: 0 5px 25px rgb(1 1 1 / 15%);
  width: 50%;
}

.calendar .calendar-body .month-name{
  color: #fff;
  background: #4285F4;
  width: 100%;
  font-size: 1.2em;
  text-align: center;
  font-weight: 400;
  padding: 5px 0;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
}

.calendar .calendar-body .day-name{
  color: #fff;
  font-size: 1em;
  font-weight: 400;
  margin-top: 10px;
}

.calendar .calendar-body .date-number{
  color: #fff;
  font-size: 4em;
  font-weight: 600;
  line-height: 1.2em;
}

.calendar .calendar-body .year{
  color: #fff;
  font-size: 1.2em;
  font-weight: 400;
  margin-bottom: 20px;
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

      <section>

      	<form method="POST"> 

            <?php 
        include 'connection.php'; 

        $project = $_GET['id'];
        $status_sql = "SELECT * FROM user WHERE UID = '$project'";

        $res_p = mysqli_query($conn, $status_sql);

        if ($res_p->num_rows > 0) {
        
        while ($row = mysqli_fetch_assoc($res_p)) {
          $ClientID = $row['UID'];
          $fname = $row['fname'];
          $mname = $row['mname'];
          $lname = $row['lname'];
          $full = "$lname, $fname $mname";
          $address = $row['address'];
          $email = $row['email'];
          $contact = $row['cnumber'];
          $Proof = $row['ID_proof'];
          $uname = $row['username'];

        }

        
        }

        ?>


      		<div class="form-container" style="">
      			<div class="header-form">

      				<span>
      					<h3>Client's Profile</h3>
      				</span>
      				
      			</div>

      			<div class="input-form">

      				<div class="label">
      					<label>Client's Name </label>
      				</div>
      				<div class="label" >
      					<span>:</span>
      				</div>
      			
      				<div class="label">
      					<input type="text" name="clientname" value="<?php echo $full; ?>" readonly>
      				</div>
      			
      	
      					
      			
      				
      			</div>
      			<div class="input-form">
      				<div class="label">
      					<label>Client's Address</label>
      				</div>
      			<div class="label">
      					<span>:</span>
      				</div>
      			
      				<div class="label">
      					<input type="text" name="address" value="<?php echo $address; ?>" readonly>
      				</div>
      				
      			</div>
      			<div class="input-form">
      			<div class="label">
      					<label>Client's E-mail</label>
      				</div>
      			
      				<div class="label">
      					<span>:</span>
      				</div>
      			
      				<div class="label">
      					<input type="text" name="email" value="<?php echo $email; ?>" readonly>
      				</div>
      				
      			</div>
      			<div class="input-form">
      				<div class="label">
      					<label>Client's Contact</label>
      				</div>
      			
      				<div class="label">
      					<span>:</span>
      				</div>
      			
      				<div class="label">
      					<input type="text" name="contact" value="<?php echo $contact; ?>" readonly>
      				</div>
      				
      			</div>

      			<div class="input-form">
      				<div class="label">
      					<label>Client's Username</label>
      				</div>
      			
      				<div class="label">
      					<span>:</span>
      				</div>
      			
      				<div class="label">
      					<input type="text" name="uname" value="<?php echo $uname; ?>" readonly>
      				</div>
      				
      			</div>

      			<div class="createBtn">
                <a href="delete-account.php?id=<?php echo  $ClientID; ?>">Delete Account</a>

                <a href="account-area.php">Cancel</a>
                
              </div>

      		</div>


      		
      	</form>

        


      </section>




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

      
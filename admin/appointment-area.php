<?php 

session_start();
include 'connection.php';




 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV CONSTRUCTION | Administrators : Appointments</title>
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


/*content area*/

.content{
  max-width: 100% - 250px;
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  height: 100vh;
  transition: 0.5s;

}

.calendar{
  background: rgba(0, 0, 0, 0.7);
  font-size: 1.5rem;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
  color: white;
  padding: 10px;
  border-radius: 10px;
  text-align: center;
  font-variant: small-caps;
  width: 50%;
  border: 2px white solid;

}
.appointment-area{
  margin: 20px auto;
  height: 90vh;
  overflow: hidden; 
  border-radius: 10px;
  width: 90%;

}
.appointment-area .header{
  background: rgba(0, 0, 0, 0.62);
  font-weight: bold;
  color: white;
  text-align: center;
  border-radius: 5px;
  padding: 4px;
  font-variant: small-caps;
  width: 50%;
  margin-top:10px;
  margin-left: 20px;
  border: 2px white solid;
  


}
.appointments{
  width: 80% - 250px;
  display: flex;
  padding: 10px 10px;


}


.appointment-col{
  flex: 1.5;
   border: 3px white solid;
   display: flex;
   flex-direction: column;
   overflow: scroll;
   height: 60vh;
   overflow-x: hidden;
  padding: 20px 10px;
   background: rgba(5, 5, 5, 0.68);
   border-radius: 5px;
   margin-top: 20px;

}
.appointment-col::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.appointment-col::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.appointment-col::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.appointment-col::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.single-appointment{
  border: 3px white double;
  height: 15vh - 100%;
  width: 80% - 50px;
  margin-top: 20px;
  padding: 10px;
  border-radius: 10px;
  background: white;


}

details{
  border-top: 3px black dashed;
  padding: 5px 10px;
  margin-bottom: 20px;


}
summary, p{
  font-size: 16px;

}

.title h4{
  background: rgba(3, 2, 2, 0.68);
  padding: 10px 20px;
  text-align: left;
  color: white;
  clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
  width: 50%;
  
}

.appointment-col-1{
  flex: .5;
  display: flex;
  align-content: center;
  align-items: center;
  margin-left: 10px;
  margin-top: 10px;

}
/*----widgdet----*/

.card-body{
    margin: 10px;
    padding: 20px;
    width: 270px;
    height: 60vh;
    color: #fff;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    align-content: center;
    text-align: center;
    border: 3px white double;
}

.card-body h3{
    margin-top: 15px;
    margin-bottom: 5px;
}
.currency, .count{
    font-size: 40px;
    font-weight: 500;
}
.card-body .info p{
    font-size: 25px;
    margin-top: 5px;
    font-variant: small-caps;
    text-decoration-line: underline;
    text-decoration-style: double;

}
.card-body .icon{
    font-size: 95px;
    opacity: 1;
}




/* Responsive CSS */

@media screen and (max-width: 600px){
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

  .table-section{
    max-width: 90%;
    margin-top: 40px;
    margin-left: auto;
    margin-right: auto;
    height: auto;
    
  }
  
  /* Start*/


  /*content area*/

.content{
  max-width: 100%;
  margin-top: 60px;
  padding: 20px;
}

.calendar{
  width: 80%;
  margin: auto;
  font-size: 1.5rem;

}
.appointment-area{
  margin: 20px auto;
  height: 90vh;
  overflow: hidden; 
  border-radius: 10px;
  width: 90%;

}
.appointment-area .header{
  background: rgba(0, 0, 0, 0.62);
  color: white;
  text-align: center;
  border-radius: 5px;
  padding: 4px;
  font-variant: small-caps;
  width: 50%;
  margin: auto;
  border: 2px white solid;
  


}
.appointments{
  width: 100%;
  display: flex;
  padding: 10px 10px;


}


.appointment-col{
  flex: 2;
   border: 3px white solid;
   display: flex;
   flex-direction: column;
   overflow: scroll;
   height: 60vh;
   overflow-x: hidden;
  padding: 20px 10px;
   background: rgba(5, 5, 5, 0.68);
   border-radius: 5px;
   margin-top: 20px;

}
.appointment-col::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.appointment-col::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.appointment-col::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.appointment-col::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.single-appointment{
  border: 3px white double;
  height: 15vh - 100%;
  width: 80% - 50px;
  margin-top: 20px;
  padding: 10px;
  border-radius: 10px;
  background: white;


}

details{
  border-top: 3px black dashed;
  padding: 5px 10px;
  margin-bottom: 20px;


}
summary, p{
  font-size: 16px;

}

.title h4{
  background: rgba(3, 2, 2, 0.68);
  padding: 10px 20px;
  text-align: left;
  color: white;
  clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
  width: 80%;
  font-size: 1rem;
  
}

.appointment-col-1{
  flex: .5;
  display: flex;
  align-content: center;
  align-items: center;
  margin-left: 10px;
  margin-top: 10px;

}
/*----widgdet----*/

.card-body{
    margin: 10px;
    padding: 20px;
    width: 70%;
    height: 20vh;
    color: #fff;
    border-radius: 5px;
    background: rgba(0, 0, 0, 0.7);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    align-content: center;
    text-align: center;
    border: 3px white double;
}

.card-body h3{
    margin-top: 15px;
    margin-bottom: 5px;
}
.currency, .count{
    font-size: 1rem;
    font-weight: 500;
}
.card-body .info p{
    font-size: 1.5rem;
    margin-top: 5px;
    font-variant: small-caps;
    text-decoration-line: underline;
    text-decoration-style: double;

}
.card-body .icon{
    font-size: 3rem;
    opacity: 1;
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
        <a href="account-area.php"><i class="fas fa-user"></i><span>ACCOUNT</span></a>
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
        <a href="account-area.php"><i class="fas fa-user"></i><span>ACCOUNT</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">

      <div class="calendar">
      <div class="calendar-body">
        <span class="day-name">Day</span>,
        <span class="month-name">Month</span>
        <span class="date-number">00</span>,
        <span class="year">0000</span>
      </div>
    </div>

    <div class="appointment-area">

        <div class="header">
        <span><h2>Appointments</h2></span>
        </div>

      <div class="appointments">

        <section class="appointment-col">

          <div class="single-appointment">
          <div class="title">
            <span><h4>Appointment Date</h4></span>
             
          </div>
          <div class="information">
            <details>
            <summary>clientID : clients name</summary>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="" style="background:black; text-decoration: none; padding: 10px; border-radius:5px;color:white; margin-top: 10px; float: right;">Accept Appointment</a>
            </details>
          </div>  
        </div>

        <div class="single-appointment">
          <div class="title">
            <span><h4>Appointment Date</h4></span>
             
          </div>
          <div class="information">
            <details>
            <summary>clientID : clients name</summary>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="" style="background:black; text-decoration: none; padding: 10px; border-radius:5px;color:white; margin-top: 10px; float: right;">Accept Appointment</a>
            </details>
          </div>  
        </div>

       <div class="single-appointment">
          <div class="title">
            <span><h4>Appointment Date</h4></span>
             
          </div>
          <div class="information">
            <details>
            <summary>clientID : clients name</summary>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="" style="background:black; text-decoration: none; padding: 10px; border-radius:5px;color:white; margin-top: 10px; float: right;">Accept Appointment</a>
            </details>
          </div>  
        </div>
        
      </section>

        <div class="appointment-col-1">

           <!--Widget Start-->

        <div class="card-body">

          <div class="icon">
                <i class="fas fa-handshake"></i>
            </div>

            <div class="info">
                <h3>
                    <span class="count">23</span>
                </h3>
                <p>Appointments</p>
            </div>
            
        </div>
        <!--Widget End-->
          
        </div>
          
     
        
        
      </div>

     
        
   
 
    </div>

         

      </div>
<!----- Content Area end----->



 

 

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

      
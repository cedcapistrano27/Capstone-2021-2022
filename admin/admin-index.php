<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV CONSTRUCTION | Administrators : Home</title>
    <link rel="icon" type="images/x-icon" href="images/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Finish TasK', 'In a Month'],
          ['Success Project',  210],
          ['Ongoing',      52],
          ['Cancelled',  14]
        ]);

        var options = {
          title: 'Summary In Projects',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
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
  height: 100vh;
  align-items: center;


  
}

section .widget{
  display: flex;
  flex-direction: row;
  margin-top: 20px;
}
section .calendar{
  max-width: 100% - 250px;

}

/*widget css*/

.color1{
    background: #00C292;
}
.color2{
    background: #03A9F3;
}
.color3{
    background: #FB7146;
}

.color4{
    background: #07D052;
}
.color5{
    background: #FF3AC6;
}
.color6{
    background: #FF526D;
}
.card-body{
    display: inline-block;
    font-family: "Roboto", sans-serif;
    margin: 10px;
    padding: 20px;
    width: 25%;
    height: 90px;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
.float-left{
    float: left;
}
.float-right{
    float: right;
}
.card-body h3{
    margin-top: 15px;
    margin-bottom: 5px;
}
.currency, .count{
    font-size: 25px;
    font-weight: 500;
}
.card-body p{
    font-size: 16px;
    margin-top: 0;
}
.card-body i{
    font-size: 4rem;
    opacity: 0.5;
}

/*Calendar*/



.calendar:before{
  content: '';
  border-radius: 50%;
}

.calendar .calendar-body{
  width: 50%;
  background: rgba(141, 140, 140, 0.8);
  margin-top: 20px;
  margin-left: 20px;
  margin-bottom: 10px;
  padding: 10px;
  color: white;
  font-family: monospace;
  border-radius: 10px;
}

.calendar .calendar-body .month-name{
  font-size: 1.2rem;
  margin-left: 10px;
  font-weight: 600;
  
}

.calendar .calendar-body .day-name{
  font-size: 1.5rem;
  
 
 
}

.calendar .calendar-body .date-number{
  font-size: 1.2rem;
  font-weight: 600;
  
 
}

.calendar .calendar-body .year{
  font-size: 1.2rem;
  font-weight: 600;
  
  
}

.bot-content{
  display: flex;
  max-width: 100%;
  padding: 10px;
}
.top-content{
  width: 600px;
  flex: 1;
  padding: 10px;
  background: rgba(0, 5, 52, 0.7);
  margin-right: 10px;
  border-radius: 10px;
}
.header-content{
  display: flex;
  align-items: center;
  justify-self: center;
  background: rgba(60, 60, 60, 0.8);
  color: white;
  width: 100%;
  font-family: monospace;
   border-radius: 10px;
}

.header-left{

  width: auto;
  padding: 10px;
  flex: 1.25;
  font-size: 1.2rem;
}

table{
  margin-top: 10px;
  width: 100%;
  text-align: center;
  background: white;
  border-collapse: collapse;
}

table thead, table thead tr th{
  background: black;
  color: white;
}
th, td{
  padding: 10px;
}

.see-all{
 
  width: 25%;
  flex: .75;
  text-align: center;
  padding: 10px;
  height: auto;

}

.see-all a{
  font-size: 20px;
  background: black;
  padding:10px;
  text-decoration: none;
  border-radius: 5px;
  color: white;
 

}

.sale-content{
  flex: .75;
  padding: 10px;
  display: flex;
  flex-direction: column;
  background: rgba(0, 5, 52, 0.7);
  border-radius: 10px;

}

.sale-content .donut{
  width: 350px;
  border: 5px black double;
  border-radius: 15px;
  overflow: hidden;
  background: white;
  display: block;
  margin-top: 10px;
  text-align: center;
  position: relative;
margin-left: auto;
margin-right: auto;

}

    
  

/* Responsive CSS 

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

 .widget{
    width: 100%;
    border: 2px red solid;
    padding-bottom: 20px;
  }

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
    display: flex;
    
  }






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

*/

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
        <a href="../index_agency.html" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../images/profic1.jpg" class="mobile_profile_image" alt="">
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
        <img src="../images/profic1.jpg" class="profile_image" alt="">
        <h4>Danielle</h4>
      </div>
      <a href="admin-index.php"><i class="fas fa-home"></i><span>HOME</span></a>
        <a href="appointment-area.php"><i class="fas fa-calendar-check"></i><span>APPOINTMENTS</span></a>
        <a href="project-area.php"><i class="fas fa-tasks"></i><span>PROJECTS</span></a>
        <a href="sales-area.php"><i class="fas fa-dollar-sign"></i><span>SALES</span></a>
        <a href="account-area.php"><i class="fas fa-user"></i><span>ACCOUNT</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">

      <section id="dashboard">
        
        <div class="widget">
        <!--Widget Start-->
        <div class="card-body color1">
            <div class="float-left">
                <h3>
                    <span class="currency">₱</span>
                    <span class="count">20000</span>
                </h3>
                <p>Revenue</p>
            </div>
            <div class="float-right">
                <i class="fas fa-money-bill-wave"></i>
            </div>
        </div>
        <!--Widget End-->

        <!--Widget Start-->
        <div class="card-body color2">
            <div class="float-left">
                <h3>
                    <span class="count">345</span>
                </h3>
                <p>Customers</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-users"></i>
            </div>
        </div>
        <!--Widget End-->

        <!--Widget Start
        <div class="card-body color3">
            <div class="float-left">
                <h3>
                    <span class="count">523</span>
                </h3>
                <p>Feedback Reports</p>
            </div>
            <div class="float-right">
                <i class="fas fa-comment-dots"></i>
            </div>
        </div>---->

         <!--Widget End-->
        
        <!--Widget Start-->

        <div class="card-body color4">
            <div class="float-left">
                <h3>
                    <span class="count">191</span>
                </h3>
                <p>Appointments</p>
            </div>
            <div class="float-right">
                <i class="fas fa-handshake"></i>
            </div>
        </div>
        <!--Widget End-->

        <!--Widget Start-->

        <div class="card-body color5">
            <div class="float-left">
                <h3>
                    <span class="count"> 225 </span>
                </h3>
                <p>Tasks</p>
            </div>
            <div class="float-right">
                <i class="fas fa-pencil-ruler"></i>
            </div>
        </div>
        <!--Widget End-->

        <!--Widget Start

        <div class="card-body color6">
            <div class="float-left">
                <h3>
                    <span class="count"> 225 </span>
                </h3>
                <p>Staffs</p>
            </div>
            <div class="float-right">
                <i class="fas fa-user-tie"></i>
            </div>
        </div>-->
      </div>
        <!--Widget End-->

        

<!-----Calendar Area----->

    <div class="calendar">
      <div class="calendar-body">
        <label class="day-name">Day</label>,
        <label class="month-name">Month</label>
        <label class="date-number">00</label>,
        <label class="year">0000</label>
      </div>
    </div>
<!----- Calendar Area end----->

<!-----Top Selling Project and Top Sale Area--->
<div class="bot-content">
<div class="top-content">

  <div class="header-content">
     <div class="header-left">
    <span><h3>Top Selling Project</h3></span>   
   </div>

   <div class="see-all">
      <span>
        <a href="">See all</a>
      </span>     
   </div>
  </div>

  

  <div class="top-sell-content">

    <table>
      <thead>
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sample</td>
          <td>Sample</td>
          <td>Sample</td>
        </tr>
      </tbody>
    </table>

    
  </div>
  
</div>

<div class="sale-content">

 <div class="header-content">
     <div class="header-left">
    <span><h3>Projects</h3></span>   
   </div>

   <div class="see-all">
      <span>
        <a href="">See all</a>
      </span>     
   </div>


  </div>
   <div id="donutchart" class="donut"></div>
 </div>


  
</div>

</div>



      </section>
<!----- Dashboard Area end----->



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

      
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

legend{
  font-size: 2rem;
  font-variant: small-caps;
  color: white;
}
fieldset{
  margin-top: 30px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  height: 50vh;
  padding: 15px;
  overflow: hidden;
  overflow-y: scroll;
  background: rgba(0, 0, 0, 0.6);
}

table{
  border-collapse: collapse;
  font-variant: small-caps;
  margin-top: 20px;
  height: auto;


}
table thead{
  background: black;
  color: white;
}

th,td{
  padding: 10px;
  text-align: center;
}

table .actionbtn{

  border-radius: 5px;
  text-decoration: none; 
  color:white;  
  background: black; 
  padding: 10px; 
  width: 30% ; 
  margin:auto; 
  text-align: center;
  font-variant: small-caps;
  display: inline-block;
  margin-top: 10px;


}

.insert-area{
              background: rgba(0, 0, 0, .40);
              border: 2px white solid;
              margin-top: 20px;
              margin-bottom: 20px;
              height: auto;
              width: 45%;
              display: flex;
              flex-direction: column;
              border-radius: 10px;

            }

            .header-label{
              font-size: 1rem;
              font-variant: small-caps;
              text-align: center;
              

            }

            input[type="file"], input[type="submit"],select{
              display: block;
              margin: 10px auto;
              width: 50%;
              height: 5vh;
              font-size: 1rem;
              text-align: center;
              font-weight: 500;
              font-variant: small-caps;
              border-radius: 5px;
            }
            


    
  

/*Responsive CSS */

@media screen and (max-width: 600px){
        .sidebar{
          display: none;
        }

        #sidebar_btn{
          display: none;
        }
      body{
        max-width: 100%;
        height: auto;
      }
      header{
        width: 100%;
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
          max-width: 100%;
        }

        .nav_bar{
          background: #222;
          max-width: calc(100% - 0%);
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
        <a href="../index_agency.html" class="logout_btn">Logout</a>
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

          <div class="header-table" style="
          color:white;
          font-variant: small-caps; 
          background:rgba(0, 0, 0, 0.49); 
          width: 25%;
          padding: 5px;
          -webkit-clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
          clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
">
            <span><h1><i class="fas fa-cogs"></i> Setting</h1></span>
          </div>


      <div class="container">


        <div class="account-area" style="
        background: rgba(0, 0, 0, .4); 
        padding:10px; 
        margin-top: 20px; 
        color:white; 
        width: 40%;
        display: flex;
        flex-direction: column;
        text-align: center;
        border-radius: 10px;
        border:2px white solid;
        ">

          <div class="header-label" style="
          font-size: 1.25rem; 
          font-variant: small-caps;
          flex: 1;


          ">

            <span><label><h3>Check Accounts</h4></label></span>
            
          </div>

          <div class="actionBtn">
            CLICK HERE :
            <a href='account-area.php' style='
            font-size: 1rem; 
            flex: 1;
            display: inline-block;
            margin-top: 20px;
            text-align: center; 
            background: #131313; 
            color: #E1E1E1; 
            border-radius: 3px; 
            cursor: pointer; 
            text-decoration: none; 
            padding: 10px;
            border: 2px white solid;
            '>ACCOUNTS</a>

           
          </div>
          
        </div>


        <div class="insert-area">

        

            <div class="header-label" style="color:white;">

            <span><label><h3>Upload And Set Image</h4></label></span>
            
          </div>

          <form method="POST" enctype="multipart/form-data" action="insert_image.php">

            <?php 

            include("connection.php");


             ?>

            <input type="file" name="file">
            <select name="section">
              <optgroup label="Section">
                <option>Carousel</option>
                <option>Background</option>
              </optgroup>
            </select>
            


            <input type="submit" name="insert" value="Upload">

</form>

    
        </div>
        
      </div>

            <fieldset>
              <legend> Edit: Front-End Images</legend>

              <table style="background: white; width: 100%;">
                <thead>
                  <tr>
                    <th>Filename</th>
                    <th>Image Section</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
            

                <tbody>
                  <?php 

                  $sql_set ="SELECT * FROM web_images";

                  $result_set = mysqli_query($conn, $sql_set);

                  if ($result_set->num_rows > 0) {
                     while ($row = mysqli_fetch_assoc($result_set)) {
                       
                       $filename = $row['filename'];
                        $image_info = $row['image_info'];
                        $picpath = $row['picpath'];
                        $status = $row['status'];
                        $ImgID = $row['ImgID'];

                        echo "
                            <tr row_id='".$row["ImgID"]. "'> 
                            <td>$filename</td>" 
                            ."<td>$image_info</td>" 
                            ."<td>$status</td>"
                            ."<td><a href='status.php?ID=$ImgID' class='actionbtn' > SET</a> 
                                  <a href='unset.php?UnsetID=$ImgID' class='actionbtn'> UNSET</a></td>"
                            ."</tr>";

                        
                     }
                        
                  }





                   ?>
                </tbody>
              </table>

              </fieldset>



      



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

      
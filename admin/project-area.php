
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
  /* background: url(landing-page.jpg) no-repeat; */
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
  /* max-width: 70%; */
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  height: 100vh;
  transition: 0.5s;
}



section{
 width: 100%;
 scroll-snap-align: center;
 /* box-shadow: -8px -10px 57px 3px rgba(0,0,0,0.56); */
/* -webkit-box-shadow: -8px -10px 57px 3px rgba(0,0,0,0.56); */
-moz-box-shadow: -8px -10px 57px 3px rgba(0,0,0,0.56);
display: flex;
flex-direction: column;

    
}
table{

  border-collapse: collapse;


}
td, th{
  padding: 10px;
  width: 20%;
}

    .btn:hover{
      background: white;
      color: black;
      border: 2px black solid;
      font-weight: bolder;
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


    <script>
  $(document).ready(function(){
    $('table tr').click(function(){
      var id = $(this).attr('row_id');
      window.location.replace("admin/project-info.php?id="+ id);
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
          <div class="header-table" style="margin: auto; color:black;font-variant: small-caps; padding:10px; width: auto; width:60%;text-align: center;">
            <span><h1 style="">Projects</h1></span>
          </div>

          <div class="body-table" style="height: 80vh; padding: 10px; display: flex; flex-direction: column;">  
            <div class="search-bar" style="margin: 20px 10px;">
                
              <span><label style="color: white; font-weight: bold; font-size:15px;">Search : </label></span>
              <input type="text" name="search" style="height: 5vh;" id="search" onkeyup="myFunction()">
                <div class="createBtn">
                  <a href="project-create.php" style="border-radius: 5px;text-decoration: none; color:white; display: block; background: black; padding: 10px; width:20% ; margin:20px auto; text-align: center;">Create New Project</a>
                  
                </div>
            </div>

            <div class="table-area" style=" height: 70vh; background:white; overflow-y: scroll;">

              <table style="width: 100%; background: white; text-align:center;">
                <thead style="background: black; color: white; font-size: 1.2rem;">
                  <tr>
                    <th>Project ID</th>
                    <th>Client ID</th>
                    <th>Project Name</th>
                    <th>Status</th>
                  </tr>
                </thead>

                <tbody>
                    <?php 

      include 'connection.php';

      

      
 
      $result = mysqli_query($conn, "SELECT * FROM project");

      if ($result->num_rows > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {

          echo "<tr row_id='".$row['PID']. "'> 
          <td data-label='Project ID :'>" .$row["PID"]. "</td>" 
          ."<td data-label='Client ID :'>" .$row["UID"]. "</td>" 
          ."<td data-label='Project Name :'>" .$row["project_name"]. "</td>"
          ."<td data-label='Remarks :'>" .$row["remarks"]. "</td>"
          ."</tr>";
        }
        echo "</table>";
        

      }else{
    
      }

      $conn->close();


       ?>

                </tbody>
              </table>

             
            </div>

             


            
          </div>
          
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


    function myFunction() {
  var input, filter, table, table_row, table_data, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("searcharea");
  table_row = document.getElementsByTagName("tr");
  for (i = 0; i < table_row.length; i++) {
    table_data = table_row[i].getElementsByTagName("td")[1];
    if (table_data) {
      txtValue = table_data.textContent || table_data.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        table_row[i].style.display = "";
      } else {
        table_row[i].style.display = "none";
      }
    }       
  }
}
    </script>

      
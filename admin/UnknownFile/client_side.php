<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BV Construction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="client_side.css">
    
</head>
<body>
    
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <img src="images/logo.jpg" class="logo-image" alt="BV Logo" width="30">
        <h3>BV <span>Construction</span></h3>
      </div>
      <div class="right_area">
        <a href="landing.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="images/profic1.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Appointments</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Account Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="images/avatar.png" class="profile_image" alt="">
        <h4>Username</h4>
      </div>
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Appointments</span></a>
        <a href="client_update.php"><i class="fas fa-sliders-h"></i><span>Account Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <h2>Create an appointment</h2>
        <button class="modal-btn">Create</button>
    </div>

    <div class="modal-bg">
        <form method="post" class="modal">
            <label for="name">Name: </label>
            <input type="text" name="" id="">
            <label for="email">Email: </label>
            <input type="email" name="" id="">
            <label for="Date">Date of Appointment: </label>
            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                <input class="form-control" type="text" name="">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
            <button type="submit">OK</button>
            <span class="modal-close">X</span>
        </form>

    </div>
    <script src="client-side.js"></script>

    


    <!-- footer -->
  <footer>
     <span><p><b>&copy; 2020 Copyrights Reserved</b> By <i>BV Construction Industries.</i></p></span>
  </footer>

</body>
</html>
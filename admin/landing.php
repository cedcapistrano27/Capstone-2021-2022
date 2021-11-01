<<<<<<< HEAD:admin/landing.html
<?php
include 'connection.php';


if(isset($_POST["login-btn"]))
{
$username = $_POST["uname"];
$password = $_POST["psw"];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
  {
    while ($row = $result->fetch_assoc())
    {
      if($row["usertype"] == 'admin')
      {
        echo "<script> window.location.href='http://localhost/THESIS/Capstone-2021-2022/admin/admin-index.php' </script>  ";
        header("Location: {$url}");
        exit;
      }
      else if($row["usertype"] == 'common')
      {
        echo "<script> window.location.href='http://localhost/THESIS/Capstone-2021-2022/admin/client_side.php' </script>  ";
        header("Location: {$url}");
        exit;
      }
      else
      {
        echo "<script>alert('Invalid user account. Contact your Administrator!')</script>";
        exit;
      }
    }
  $conn->close();
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome To BV Construction</title>
	<link rel="icon" type="images/x-icon" href="images/logo.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100;1,200;1,300;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<style>
  *{
    font-family: 'Poppins', sans-serif;

  }
  body{
      background: url(landing-page.jpg);
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      max-width: 100%;
      height: 100vh;
      overflow: hidden;

      

    }

    .container-fluid{
      width: 100%;
      height: 100%;
      overflow-y: scroll;
      scroll-behavior: smooth;
      scroll-snap-type: y mandatory;



    }

    .container-fluid .container nav{
      position: fixed;
      top: 0;
      z-index: 1;
      display: flex;
      width: 86.7%;
      height: 60px;
      background: rgba(0, 0, 0,0.7);
      border-radius: 5px;
      

    }

    section{
      width: 100%;
      height: 100vh;
      display: flex;
      flex-direction: column;
      text-align: center;
      justify-content: center;
      align-items: center;
      color: white;
      scroll-snap-align: center;
    
    }
    section h1{
      font-size: 3rem;
    }
    section p{
      font-size: 1.2rem;
      width: 100%;
      
      margin: auto;
    }

    .home #carouselExampleIndicators{
    width: 55%;

    }
    .home #carouselExampleIndicators img{
      border-radius: 10px;
      border: 2px white solid;
     }


    

  .home{
      background: rgba(0, 0, 0, 0.7);
    }
    .event{
      background: rgba(247, 204, 77, 0.38);
    }
    .gallery{
    background: rgba(57, 255, 0, 0.38);
    color: black;font-family: monospace;
    font-weight: 600;


    }
    .gallery .image-grid{
     display: grid;
      grid-template-columns: auto auto auto;
      padding: 5px;
      width: 90%;
      grid-column-gap: 40px;
      grid-row-gap: 20px;
    }

    .gallery .image-grid .image-item{
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 5px;
      text-align: center;
      border-radius: 5px;
    }
    .gallery .image-grid .image-item img{
      width: 100%;
    }
    
    .contact{
       background-color: rgba(0, 0, 0, 0.7);
        text-align: unset;
        justify-content: center;
        align-items: center;
       

    }
    .contact .container{
      display: grid;
      grid-template-columns: auto auto auto;
    
    }

    .contact .container .row{
      width: 100%;
    }
    .contact .container .row ul{
      list-style: none;

    }
    .feature{
      background-color: rgba(242, 255, 106, 0.4);

    }
 
 

	</style>
  </head>
  <body>

  <div class="container-fluid">

    <div class="container">

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="landing.html"><img src="images/logo.jpg" width="30" height="30" alt="" style="border-radius: 10px;"> BV Corps</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projects</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#event">Events</a>
          <a class="dropdown-item" href="#feature">Features</a>
          <a class="dropdown-item" href="#gallery">Galleries</a>
           <a class="dropdown-item" href="#blog">Sign-In / Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#contact">Contact Us</a>
          <a class="dropdown-item" href="#">Visit Our <img src="images/fbicon.png" width="20" height="20" style="border-radius: 5px;"></a>
          <a class="dropdown-item" href="#">Visit Our <img src="images/insticon.png" width="20" height="20" style="border-radius: 5px;"></a>
        </div>
      </li>
    </ul>
<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal for login -->
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <img src="avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" name="login-btn">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id02').style.display='block'" id="signup">SignUp</button>

<!-- The Modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal for signing up baby -->
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <img src="avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw"><b>Confirm password</b></label>
      <input type="password" placeholder="Enter Password" name="psw2" required>

    </div>

     

      <div class="clearfix">
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtnsignup">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
  </form>
</div>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

      
      
 



    <section id="home" class="home">
 <br><br>
 

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/home1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home4.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home5.jpg" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
        <h1 style="font-size: 4rem; color: white;font-variant: small-caps;">Welcome To BV WEBSITE</h1>

      </section>

      <section id="event" class="event">
        
        <h1>Events</h1>
         <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
      </section>

      <section id="feature" class="feature">
        
        <h1>Features</h1>
        <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
      </section>

      <section id="gallery" class="gallery">

          <br>
         <h1>Galleries</h1>
          
          <div class="image-grid">

            <div class="image-item">
              <img src="images/home1.jpg">
            </div>

            <div class="image-item">
              <img src="images/home2.jpg">
            </div>

            <div class="image-item">
              <img src="images/home3.jpg">
            </div>

            <div class="image-item">
              <img src="images/home4.jpg">
            </div>

            <div class="image-item">
              <img src="images/home5.jpg">
            </div>
            
          </div>

  
           
       

       
        

       
       
      </section>
      


    <section id="contact" class="contact">
        
        <h1>Contact Us</h1>

        <div class="container">
          <div class="row">

          <ul>
            <li>
              <label>Address : Molino III, Bacoor City, Cavite</label>
            </li>
            <li>
              <label>Email Address : BVCorps@gmail.com</label>
            </li>
            <li>
              <label>Contact Number / Telephone # : +639211675598 / +023-1223-112</label>
            </li>
          </ul>
          
        </div>
         <div class="row">

          <ul>
            <li>
              <label>Address : Molino III, Bacoor City, Cavite</label>
            </li>
            <li>
              <label>Email Address : BVCorps@gmail.com</label>
            </li>
            <li>
              <label>Contact Number / Telephone # : +639211675598 / +023-1223-112</label>
            </li>
          </ul>
          
        </div>
        </div>
        
        
      </section>


    </div>

 
  </div>

	
  <script src="modal.js"></script>

</body>


=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome To BV Construction</title>
	<link rel="icon" type="images/x-icon" href="images/logo.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100;1,200;1,300;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="modal.css"> 
  
	<style>
  *{
    font-family: 'Poppins', sans-serif;

  }
  body{
      background: url(landing-page.jpg);
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      max-width: 100%;
      height: 100vh;
      overflow: hidden;

      

    }

    .container-fluid{
      width: 100%;
      height: 100%;
      overflow-y: scroll;
      scroll-behavior: smooth;
      scroll-snap-type: y mandatory;



    }

    .container-fluid .container nav{
      position: fixed;
      top: 0;
      z-index: 1;
      display: flex;
      width: 86.7%;
      height: 60px;
      background: rgba(0, 0, 0,0.7);
      border-radius: 5px;
      

    }

    section{
      width: 100%;
      height: 100vh;
      display: flex;
      flex-direction: column;
      text-align: center;
      justify-content: center;
      align-items: center;
      color: white;
      scroll-snap-align: center;
    
    }
    section h1{
      font-size: 3rem;
    }
    section p{
      font-size: 1.2rem;
      width: 100%;
      
      margin: auto;
    }

    .home #carouselExampleIndicators{
    width: 55%;

    }
    .home #carouselExampleIndicators img{
      border-radius: 10px;
      border: 2px white solid;
     }


    

  .home{
      background: rgba(0, 0, 0, 0.7);
    }
    .event{
      background: rgba(247, 204, 77, 0.38);
    }
    .gallery{
    background: rgba(57, 255, 0, 0.38);
    color: black;font-family: monospace;
    font-weight: 600;


    }
    .gallery .image-grid{
     display: grid;
      grid-template-columns: auto auto auto;
      padding: 5px;
      width: 90%;
      grid-column-gap: 40px;
      grid-row-gap: 20px;
    }

    .gallery .image-grid .image-item{
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 5px;
      text-align: center;
      border-radius: 5px;
    }
    .gallery .image-grid .image-item img{
      width: 100%;
    }
    
    .contact{
       background-color: rgba(0, 0, 0, 0.7);
        text-align: unset;
        justify-content: center;
        align-items: center;
       

    }
    .contact .container{
      display: grid;
      grid-template-columns: auto auto auto;
    
    }

    .contact .container .row{
      width: 100%;
    }
    .contact .container .row ul{
      list-style: none;

    }
    .feature{
      background-color: rgba(242, 255, 106, 0.4);

    }
 
 

	</style>
  </head>
  <body>

  <div class="container-fluid">

    <div class="container">

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="landing.html"><img src="images/logo.jpg" width="30" height="30" alt="" style="border-radius: 10px;"> BV Corps</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Projects</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#event">Events</a>
          <a class="dropdown-item" href="#feature">Features</a>
          <a class="dropdown-item" href="#gallery">Galleries</a>
           <a class="dropdown-item" href="#blog">Sign-In / Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#contact">Contact Us</a>
          <a class="dropdown-item" href="#">Visit Our <img src="images/fbicon.png" width="20" height="20" style="border-radius: 5px;"></a>
          <a class="dropdown-item" href="#">Visit Our <img src="images/insticon.png" width="20" height="20" style="border-radius: 5px;"></a>
        </div>
      </li>
    </ul>
<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <img src="avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" name="login-btn">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id02').style.display='block'" id="signup">SignUp</button>

<!-- The Modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <img src="avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>First name</b></label>
      <input type="text" placeholder="" name="uname" required>

      <label for="uname"><b>Last name</b></label>
      <input type="text" placeholder="" name="uname" required>

      <label for="uname"><b>Email address </b></label>
      <input type="text" placeholder="" name="uname" required>

      <label for="uname"><b>Contact Number</b></label>
      <input type="text" placeholder="" name="uname" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw"><b>Confirm password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

    </div>

     

      <div class="clearfix">
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtnsignup">Cancel</button>
        <button type="submit" class="signupbtn2">Sign Up</button>
      </div>
  </form>
</div>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

      
      
 



    <section id="home" class="home">
 <br><br>
 

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/home1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home4.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home5.jpg" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
        <h1 style="font-size: 4rem; color: white;font-variant: small-caps;">Welcome To BV WEBSITE</h1>

      </section>

      <section id="event" class="event">
        
        <h1>Events</h1>
         <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
      </section>

      <section id="feature" class="feature">
        
        <h1>Features</h1>
        <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
      </section>

      <section id="gallery" class="gallery">

          <br>
         <h1>Galleries</h1>
          
          <div class="image-grid">

            <div class="image-item">
              <img src="images/home1.jpg">
            </div>

            <div class="image-item">
              <img src="images/home2.jpg">
            </div>

            <div class="image-item">
              <img src="images/home3.jpg">
            </div>

            <div class="image-item">
              <img src="images/home4.jpg">
            </div>

            <div class="image-item">
              <img src="images/home5.jpg">
            </div>
            
          </div>

  
           
       

       
        

       
       
      </section>
      


    <section id="contact" class="contact">
        
        <h1>Contact Us</h1>

        <div class="container">
          <div class="row">

          <ul>
            <li>
              <label>Address : Molino III, Bacoor City, Cavite</label>
            </li>
            <li>
              <label>Email Address : BVCorps@gmail.com</label>
            </li>
            <li>
              <label>Contact Number / Telephone # : +639211675598 / +023-1223-112</label>
            </li>
          </ul>
          
        </div>
         <div class="row">

          <ul>
            <li>
              <label>Address : Molino III, Bacoor City, Cavite</label>
            </li>
            <li>
              <label>Email Address : BVCorps@gmail.com</label>
            </li>
            <li>
              <label>Contact Number / Telephone # : +639211675598 / +023-1223-112</label>
            </li>
          </ul>
          
        </div>
        </div>
        
        
      </section>


    </div>

 
  </div>

	


</body>
<script>
  // Get the modal
  var modal = document.getElementById('id01');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }


  var modal2 = document.getElementById('id02');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal2) {
      modal2.style.display = "none";
    }
  }

  </script>
>>>>>>> 90db563adcfb61789f541773471577af33b39491:landing.html
</html>
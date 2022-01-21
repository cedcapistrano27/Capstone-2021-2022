<?php

$connect = new PDO("mysql:host=localhost;dbname=bvconstruction", "root", "");

$query = "SELECT * FROM timeline";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();


 include 'connection.php'; 

$project = $_GET['timeId'];
$status_sql = "SELECT * FROM timeline WHERE PID = '$project'";

        $res_p = mysqli_query($conn, $status_sql);

         if ($res_p->num_rows > 0) {
        
        while ($row = mysqli_fetch_assoc($res_p)) {
          $timeID = $row['TimeID'];
          $ClientID = $row['UID'];
          $ProjectName = $row['PID'];
          $Scope = $row['Uscope'];
          $ProjectInfo = $row['ProjectInfo'];
          $date = $row['DateIssued'];

         
        

        }
        }


         

?>

<html>  
    <head>  
        <title>Preview</title>
        <link rel="icon" type="images/x-icon" href="images/logo.jpg">
        <script src="js/jquery.js"></script>
        <script src="js/timeline.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/timeline.min.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
                
    
 
 
    </head>  
    <body>  
        <div class="container">
			<br />
			<h3 align="center">Project Timeline :</h3>

			<div class="panel panel-default">
				<div class="panel-heading">
                    <h3 class="panel-title">Project's Accomplishments</h3>

                </div>
                <div class="panel-body">
                	<div class="timeline">
                        <div class="timeline__wrap">
                            <div class="timeline__items">
                            <?php
                            foreach($res_p as $row)
                            {
                            ?>
                            	<div class="timeline__item">
                                    <div class="timeline__content">
                                    	<h2>Date : <?php echo $row["DateIssued"]; ?></h2>
                                        <h4>Project Name : <?php echo $row['Uscope']; ?></h4>
                                    	<p>Information : <?php echo $row["ProjectInfo"]; ?></p>

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>


			</div>

            <span><a href="project-area.php"  style="font-size: 3vh; border-radius: 5px;text-decoration: none; color:white; display: block; background: black; padding: 10px; width: 20% ;text-align: center;"><i class="far fa-arrow-alt-circle-left"></i>  Go Back  </a></span>
		</div>
    </body>  
</html>

<script>
$(document).ready(function(){
    jQuery('.timeline').timeline();
});
</script>
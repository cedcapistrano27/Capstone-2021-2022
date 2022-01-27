<?php    

session_start();
     include 'connection.php';
     
          
   

  


 function fetch_data()    
 {    
      $output = '';    
      $conn = mysqli_connect("localhost", "root", "", "bvconstruction");    
      $sql = "SELECT * FROM appointment WHERE 1";    
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result))    
      {         
      $output .= '<tr>    
                          <td>'.$row["APPID"].'</td>    
                          <td>'.$row["UID"].'</td>     
                          <td>'.$row["atype"].'</td>
                          <td>'.$row["a_details"].'</td>
                          <td>'.$row["date"].'</td>
                          <td>'.$row["status"].'</td>
                     </tr>    
                          ';    
      }  
      return $output;    
          }    
     
        
 }    
 if(isset($_POST["generate_pdf"]))    
 {    
      require_once('tcpdf/tcpdf.php');    
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
      $obj_pdf->SetCreator(PDF_CREATOR);    
      $obj_pdf->SetTitle("PAYMENT TRANSACTION SUMMARY PDF");    
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);    
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));    
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));    
      $obj_pdf->SetDefaultMonospacedFont('helvetica');    
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);    
      $obj_pdf->setPrintHeader(false);    
      $obj_pdf->setPrintFooter(false);    
      $obj_pdf->SetAutoPageBreak(TRUE, 10);    
      $obj_pdf->SetFont('helvetica', '', 9);    
      $obj_pdf->AddPage();    
      $obj_pdf->Image('images/coco.jpg', 15, 5, 25, 25, 'JPG', '', '', true, 150, '', false, false, 0, false, false, false);
      $obj_pdf->Cell(30,5,'','','0','');
      $obj_pdf->Cell(60,5,'BV Construction','','1','');
      $obj_pdf->Cell(30,5,'','','0','');
      $obj_pdf->Cell(60,5,'Quezon City, National Capital Region, Philippines','','1','');
      $obj_pdf->Cell(30,5,'','','0','');
      $obj_pdf->Cell(60,5,'Phone: PH (+63)958596092','','1','');
      $obj_pdf->Line(10, 33, 200, 33);
      $obj_pdf->Ln(20);

      $content = '';    
      $content .= '  


      <h4 align="center">BV CONSTRUNCTION REPORT FILE: PAYMENT TRANSACTION</h4><br/>  
    
     <table border="1" cellspacing="0" cellpadding="3" >    
           <tr>    
                <th width="10%">TRANSACTION ID</th>    
                <th width="10%">CLIENT ID</th>       
                <th width="20%">PROJECT NAME</th>
                <th width="20%">PAYMENT TYPE</th>
                <th width="15%">DOWNPAYMENT</th>       
                <th width="10%">TOTAL COST</th>
                <th width="15%">TRANSACTION DATE ISSUE</th>     
           </tr>    
      ';    
      $content .= fetch_data();    
      $content .= '</table>';     
      $obj_pdf->writeHTML($content);    
      /// footer

 $obj_pdf->Ln(25);

 $obj_pdf->Cell(95,5,'Prepared by :','','','L');
 $obj_pdf->Cell(90,5,'Conformed by :','','','L');
 $obj_pdf->Ln(10);
     
 
 
 $obj_pdf->Cell(95,5,'Gen-Con. - PCE.BVC','','','C');
 $obj_pdf->Cell(90,5,'Client','','','C');
 
 
 
 $obj_pdf->Output('file.pdf', 'I');  
        
 }    
 ?>    
 <!DOCTYPE html>    
 <html>    
      <head>    
           <title>Admin Area | Database : Order Detail Table</title>    
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <style>
                table tr td p{
                    white-space: pre-wrap;
                    width: 80%;
                    margin: auto;
                }
                table th{
                    text-align: center;
                }
           </style>             
      </head>    
      <body>    
           <br />  
           <div class="container">    
                <h4 align="center">Transaction Report</h4><br />    
                <div class="table-responsive">    
                    <div class="col-md-12" align="right">  
                     <form method="post">    
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />    
                     </form>  
                     

                     
                     </div>  
                     <br>  
                     <br>  
                     <table class="table table-bordered" style="border: 1px red solid; width: 90%; margin:auto; font-size: 15px;">    

                          <tr>    
                               <th width="">APPOINTMENT ID</th>    
                               <th width="">CLIENT ID</th>       
                               <th width="">APPOINTMENT TYPE</th>
                               <th width="">APPOINTMENT DETAILS</th>
                               <th width="">DATE</th>       
                               <th width="">STATUS</th> 
                          </tr>    
                     <?php    
                     echo fetch_data();    
                     ?>    
                     </table>    
                </div>    
           </div>  

           <br><br>
           <center>
           <a href="appointment-area.php" style="height: 35px; width: 150; margin-right: auto; margin-left: auto; text-align: center; background: #131313; color: #A7F5A3; border-radius: 3px; cursor: pointer; text-decoration: none; line-height: 2.3; padding: 10px;">Appointment Page</a> </center>

           <br><br><br>

      </body>    
</html>    
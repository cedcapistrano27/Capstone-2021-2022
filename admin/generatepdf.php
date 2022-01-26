<?php    

session_start();
     include 'connection.php';

 function fetch_data()    
 {    
      $output = '';    
      $conn = mysqli_connect("localhost", "root", "", "bvconstruction");    
      $sql = "SELECT * FROM payment WHERE 1";    
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result))    
      {         
      $output .= '<tr>    
                          <td>'.$row["PayID"].'</td>    
                          <td>'.$row["UID"].'</td>     
                          <td>'.$row["project_name"].'</td>
                          <td>'.$row["payment_type"].'</td>
                          <td>'.$row["downpayment"].'</td>
                          <td>'.$row["total_cost"].'</td>
                          <td>'.$row["payment_issued"].'</td>  
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
      $obj_pdf->Output('file.pdf', 'I');    
 }    
 ?>    
 <!DOCTYPE html>    
 <html>    
      <head>    
           <title>Admin Area | Database : Transaction Table</title>    
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
                               <th width="">TRANSACTION ID</th>    
                               <th width="">CLIENT ID</th>       
                               <th width="">PROJECT NAME</th>
                               <th width="">PAYMENT TYPE</th>
                               <th width="">DOWNPAYMENT</th>       
                               <th width="">TOTAL COST</th>
                               <th width="">TRANSACTION DATE ISSUE</th>      
                          </tr>    
                     <?php    
                     echo fetch_data();    
                     ?>    
                     </table>    
                </div>    
           </div>  

           <br><br>
           <center>
           <a href="sales-area.php" style="height: 35px; width: 150; margin-right: auto; margin-left: auto; text-align: center; background: #131313; color: #A7F5A3; border-radius: 3px; cursor: pointer; text-decoration: none; line-height: 2.3; padding: 10px;">Admin Page</a> </center>

           <br><br><br>

      </body>    
</html>    
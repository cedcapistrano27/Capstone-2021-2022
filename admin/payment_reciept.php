<?php 
session_start();
//library
include 'tcpdf/tcpdf.php';
include 'connection.php';

$sql_user = "SELECT * FROM user";
date_default_timezone_set("Asia/Manila");
$date = date("Y/m/d h:ia");
$randnum = rand(100000,1000000);

$result = mysqli_query($conn, $sql_user);

if ($result->num_rows > 0) {
      while ($row=mysqli_fetch_assoc($result)) {
           $UID = $row['UID'];
           $fname = $row['fname'];
           $lname = $row['lname'];
           $mname = $row['mname'];
           $fullname = "$fname $mname. $lname";
           $address = $row['address'];
           $email = $row['email'];
           $phone =$row['cnumber'];

      }
}

 $sql = "SELECT SUM(total_cost) AS total FROM payment WHERE  payment_issued > DATE_SUB(NOW(), INTERVAL 1 DAY)";
          $result = mysqli_query($conn, $sql);
          while ($count_r = mysqli_fetch_assoc($result)) {
          $num_rows = $count_r['total'];
          //echo "<span class='count'>$num_rows</span>";
          }


     
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
                          <td>'.$row["project_name"].'</td>
                          <td>'.$row["reference_no"].'</td>
                          <td>'.$row["balance"].'</td>
                          
                           
                     </tr>    
                          ';    
      }  
      return $output;    
          }    
     
        
 }    


     require_once('tcpdf/tcpdf.php');    
      $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
      $pdf->SetCreator(PDF_CREATOR);    
      $pdf->SetTitle("PAYMENT INVOICE SUMMARY PDF");    
      $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);    
      $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));    
      $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));    
      $pdf->SetDefaultMonospacedFont('helvetica');    
      $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
      $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);    
      $pdf->setPrintHeader(false);    
      $pdf->setPrintFooter(false);    
      $pdf->SetAutoPageBreak(TRUE, 10);    
      $pdf->SetFont('helvetica', '', 12);    
      $pdf->AddPage();  

     $pdf->Cell('90','5','BV Consturction','','0','');
     $pdf->Cell('50','5','INVOICE No.','','0','');
     $pdf->Cell('45','5',": $randnum",'','1','');


     $pdf->Cell('90','5','Quezon City, NCR, Philippines','','0','');
     $pdf->Cell('50','5','Date & Time','','0','');
     $pdf->Cell('45','5',": $date",'','1','');

     $pdf->Cell('30','5','Contact #','','0','');
     $pdf->Cell('40','5',': 0917 318 4810','','1','');


     $pdf->Line(10, 30, 200, 30);
     $pdf->Ln(15);

     $pdf->Cell('30','5','Bill To','','1','');
     $pdf->Line(10, 46, 50, 46);
     $pdf->Ln(5);

     $pdf->Cell('100','5',$UID,'','1','');
     $pdf->Cell('100','5',$fullname,'','1','');
     $pdf->Cell('100','5',$address,'','1','');
     $pdf->Cell('100','5',$email,'','1','');
     $pdf->Cell('100','5', "+63$phone",'','1','');

     $pdf->Line(10, 85, 200, 85);
     $pdf->Ln(10);


  
      $content = '';    
      $content .= '  


      <h4 align="center">Payment Invoice</h4><br/>  
    
     <table cellspacing="0" cellpadding="3" align="center">    
           <tr>    
                <th width="10%">ID</th>
                <th width="35%">Project Name</th>    
                <th width="25%">Reference #</th>       
                <th width="30%">Amount</th>
                
                    
           </tr>

           <style>
           table{
               border-collapse:collapse;

           }

           table tr th{
               background-color:red;
               color:white;
               font-weight:bold;

           }
           th,td{
               border:1px grey solid;
           }
           </style>

      ';    
      $content .= fetch_data();    
      $content .= '</table>';     
      $pdf->writeHTML($content); 

     $pdf->Cell('40','10',"",'','0','R');
     $pdf->Cell('90','10',"Sub Total : ",'','0','R');
     $pdf->Cell('50','10'," $num_rows.00",'','1','R');

     $pdf->Cell('40','10',"",'','0','R');
     $pdf->Cell('90','10',"Discount : ",'','0','R');
     $pdf->Cell('50','10'," 0.00",'','1','R');

     $pdf->Cell('40','10',"",'','0','R');
     $pdf->Cell('90','10',"Tax Rate : ",'','0','R');
     $pdf->Cell('50','10'," 0.00",'','1','R');

     $pdf->Cell('40','10',"",'','0','R');
     $pdf->Cell('90','10',"Total Tax : ",'','0','R');
     $pdf->Cell('50','10'," 0.00",'','1','R');

     $pdf->Cell('40','10',"",'','0','R');
     $pdf->Cell('90','10',"Amount to pay : ",'','0','R');
     $pdf->Cell('50','10'," $num_rows.00",'','1','R');
     
     $pdf->Ln(85);
     

     
     $pdf->Cell('190','10','Thank you for your Business!','','1','C');
     $pdf->Cell('190','10',"If you have any questions about this reciept, Please contact us.",'','1','C');
     $pdf->Cell('190','10',"Contact # : 0917-318-4810 / E-mail : bvconstrak@gmail.com",'','1','C');

     

     

     





      $pdf->Output('BVConstruction_PaymentInvoice.pdf', 'I'); 

  
 ?>    

 

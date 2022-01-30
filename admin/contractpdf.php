<?php    

session_start();
include 'connection.php';


$clientID = $_GET['clientID'];
$projectID = $_GET['projectID'];

   $sql_client = "SELECT * FROM user WHERE UID='$clientID'";

                $result=mysqli_query($conn, $sql_client);

                if ($result->num_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $clientF = $row['fname'];
                      $clientM = $row['mname'];
                      $clientL = $row['lname'];
                      $clientID = $row['UID'];

                      $fullname = "$clientL, $clientF $clientM";
                    

                  }
                }



 $sql_select = "SELECT * FROM project WHERE UID ='$clientID' AND PID = '$projectID'";
 $result_select = mysqli_query($conn, $sql_select);

 if ($result_select->num_rows > 0) {
        
        while ($row = mysqli_fetch_assoc($result_select)) {
              $projID = $row['PID'];
              $UID = $row['UID'];
              $projName = $row['project_name'];
              $projLocation = $row['Location'];
              $scope = $row['scope'];
              $remarks = $row['remarks'];
              $target = $row['TargetDate'];
              $Date = $row['Pdate'];

              $MD_quantity = $row['MD_quantity'];
             $MD_cost = $row['MD_cost'];
             $MD_total = $row['MD_total'];

             $PM_quantity = $row['PM_quantity'];
             $PM_cost = $row['PM_cost'];
             $PM_total = $row['PM_total'];

             $HK_quantity = $row['HK_quantity'];
             $HK_cost = $row['HK_cost'];
             $HK_total = $row['HK_total'];

             $delivery_quantity = $row['delivery_quantity'];
             $delivery_cost = $row['delivery_cost'];
             $delivery_total = $row['delivery_total'];

             $Misc_quantity = $row['MISC_quantity'];
             $Misc_cost = $row['MISC_cost'];
             $Misc_total = $row['MISC_total'];

             $noteGR = $row['noteGR'];

       ///CEILING WORKS

             $FC_quantity = $row['FC_quanity'];
             $FC_cost = $row['FC_cost'];
             $FC_total = $row['FC_total'];

       ///PAINTING WORKS

             $PFC_quantity = $row['PFC_quantity'];
             $PFC_cost = $row['PFC_cost'];
             $PFC_total = $row['PFC_total'];

             $WALL_quantity = $row['WALL_quantity'];
             $WALL_cost = $row['WALL_cost'];
             $WALL_total = $row['WALL_total'];

             $notePW = $row['notePW'];



       ///ELECTRICAL WORKS

             $EW_quantity = $row['EW_quantity'];
             $EW_cost = $row['EW_cost'];
             $EW_total = $row['EW_total'];

             $noteEW = $row['noteEW'];

       ///TILE WORKS

             $TWD_quantity = $row['TWD_quantity'];
             $TWD_cost = $row['TWD_cost'];
             $TWD_total = $row['TWD_total'];

             $TWB_quantity = $row['TWB_quantity'];
             $TWB_cost = $row['TWB_cost'];
             $TWB_total = $row['TWB_total'];

             $noteTW = $row['noteTW'];
       ///FLOORING WORKS

             $FWL_quantity = $row['FWL_quantity'];
             $FWL_cost = $row['FWL_cost'];
             $FWL_total = $row['FWL_total'];

       ///OTHERS

             $otherA_quantity = $row['OtherA_quantity'];
             $otherA_cost = $row['OtherA_cost'];
             $otherA_total = $row['OtherA_total'];

             $otherB_quantity = $row['OtherB_quantity'];
             $otherB_cost = $row['OtherB_cost'];
             $otherB_total = $row['OtherB_total'];

             $otherC_quantity = $row['OtherC_quantity'];
             $otherC_cost = $row['OtherC_cost'];
             $otherC_total = $row['OtherC_total'];

             $otherD_quantity = $row['OtherD_quantity'];
             $otherD_cost = $row['OtherD_cost'];
             $otherD_total = $row['OtherD_total'];

             $otherE_quantity = $row['OtherE_quantity'];
             $otherE_cost = $row['OtherE_cost'];
             $otherE_total = $row['OtherE_total'];


       ///mga total ng sub totals
              $totalGR = number_format($row['totalGR'],2);
              $totalCW = number_format($row['totalCW'],2);
              $totalPW = number_format($row['totalPW'],2);
              $totalEW = number_format($row['totalEW'],2);
              $totalTW = number_format($row['totalTW'],2);
              $totalFW = number_format($row['totalFW'],2);
              $totalOther = number_format($row['totalOther'],2);

              $totalAmount = number_format($row['totalAmount'],2);

        }
 }
   
      require_once('tcpdf/tcpdf.php');    
      $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
      $pdf->SetCreator(PDF_CREATOR);    
      $pdf->SetTitle("BVC CONTRACT FORM");    
      $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);    
      $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));    
      $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));    
      $pdf->SetDefaultMonospacedFont('helvetica');    
      $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
      $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);    
      $pdf->setPrintHeader(false);    
      $pdf->setPrintFooter(false);    
      $pdf->SetAutoPageBreak(TRUE, 10);    
      $pdf->SetFont('helvetica', '', 9);    
      $pdf->AddPage();

      $pdf->Image('images/coco.jpg', 15, 5, 25, 25, 'JPG', '', '', true, 150, '', false, false, 0, false, false, false);
      $pdf->Cell(30,5,'','','0','');
      $pdf->Cell(60,5,'BV Construction','','1','');
      $pdf->Cell(30,5,'','','0','');
      $pdf->Cell(60,5,'Quezon City, National Capital Region, Philippines','','1','');
      $pdf->Cell(30,5,'','','0','');
      $pdf->Cell(60,5,'Phone: PH (+63)958596092','','1','');
      $pdf->Line(10, 33, 200, 33);


      $pdf->Ln(20);
      $pdf->Cell(30,5,'Project Name','','0','');
      $pdf->Cell(60,5,": $projName",'','1','');

      $pdf->Cell(30,5,'Project Location','','0','');
      $pdf->Cell(60,5,": $projLocation",'','1','');

      $pdf->Cell(30,5,'Subject','','0','');
      $pdf->Cell(60,5,": $scope",'','1','');

      $pdf->Cell(30,5,'Client','','0','');
      $pdf->Cell(60,5,": $fullname",'','1','');

      $pdf->Cell(30,5,'Date','','0','');
      $pdf->Cell(60,5,": $target",'','1','');

      /// table
      $pdf->Ln(5);

      $pdf->Cell(15,5,'ITEM','1','0','C');
      $pdf->Cell(90,5,'SCOPE OF WORKS','1','0','C');
      $pdf->Cell(20,5,'QUANTITY','1','0','C');
      $pdf->Cell(20,5,'UOM','1','0','C');
      $pdf->Cell(20,5,'UNIT COST','1','0','C');
      $pdf->Cell(20,5,'TOTAL','1','1','C');

      $pdf->Cell(15,5,'A.','1','0','C');
      $pdf->Cell(170,5,'GENERAL REQUIREMENTS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Mobilization/Demobilization','1','0','');
      $pdf->Cell(20,5,"$MD_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$MD_cost",'1','0','C');
      $pdf->Cell(20,5,"$MD_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Project Management/Supervision','1','0','');
      $pdf->Cell(20,5,"$PM_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$PM_cost",'1','0','C');
      $pdf->Cell(20,5,"$PM_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Housekeeping','1','0','');
      $pdf->Cell(20,5,"$HK_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$HK_cost",'1','0','C');
      $pdf->Cell(20,5,"$HK_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Material Delivery','1','0','');
      $pdf->Cell(20,5,"$delivery_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$delivery_cost",'1','0','C');
      $pdf->Cell(20,5,"$delivery_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Miscellaneous','1','0','');
      $pdf->Cell(20,5,"$Misc_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$Misc_cost",'1','0','C');
      $pdf->Cell(20,5,"$Misc_total",'1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note :','1','0','C');
      $pdf->Cell(80,5,"$noteGR",'1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(A)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalGR",'1','1','C');
///b
      $pdf->Cell(15,5,'B.','1','0','C');
      $pdf->Cell(170,5,'CEILING WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'False Ceilng','1','0','');
      $pdf->Cell(20,5,"$FC_quantity",'1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,"$FC_cost",'1','0','C');
      $pdf->Cell(20,5,"$FC_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(B)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalCW",'1','1','C');

///c

       $pdf->Cell(15,5,'C.','1','0','C');
      $pdf->Cell(170,5,'PAINTING WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'	False Ceilng','1','0','');
      $pdf->Cell(20,5,"$PFC_quantity",'1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,"$PFC_cost",'1','0','C');
      $pdf->Cell(20,5,"$PFC_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'	Interior Wall','1','0','');
      $pdf->Cell(20,5,"$WALL_quantity",'1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,"$WALL_cost",'1','0','C');
      $pdf->Cell(20,5,"$WALL_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(C)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalPW",'1','1','C');

///d
       $pdf->Cell(15,5,'D.','1','0','C');
      $pdf->Cell(170,5,'ELECTRICAL WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Electrical Conduiting','1','0','');
      $pdf->Cell(20,15,"$EW_quantity",'1','0','C');
      $pdf->Cell(20,15,'lot','1','0','C');
      $pdf->Cell(20,15,"$EW_cost",'1','0','C');
      $pdf->Cell(20,15,"$EW_total",'1','0','C');

      $pdf->Cell(0,5,'','0','1','');



      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Wire Installation','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Lighting Installation','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note :','1','0','');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(D)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalEW",'1','1','C');


///e
       $pdf->Cell(15,5,'E.','1','0','C');
      $pdf->Cell(170,5,'TILE WORKS','1','1','');


       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Demolition of Existing Tiles','1','0','');
      $pdf->Cell(20,10,"$TWD_quantity",'1','0','C');
      $pdf->Cell(20,10,'lot','1','0','C');
      $pdf->Cell(20,10,"$TWD_cost",'1','0','C');
      $pdf->Cell(20,10,"$TWD_total",'1','','C');

       $pdf->Cell(0,5,'','0','1','');

        $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Installation of Tiles. 60 cm x 60 cm','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Backsplash Installation','1','0','');
      $pdf->Cell(20,5,"$TWB_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$TWB_cost",'1','0','C');
      $pdf->Cell(20,5,"$TWB_total",'1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note :','1','0','');
      $pdf->Cell(80,5,"$noteTW",'1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(D)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalTW",'1','1','C');


///f
       $pdf->Cell(15,5,'F.','1','0','C');
      $pdf->Cell(170,5,'FLOORING WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Laminated Planks Installation. 20cm x 120cm x 8 mm','1','0','');
      $pdf->Cell(20,5,"$FWL_quantity",'1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,"$FWL_cost",'1','0','C');
      $pdf->Cell(20,5,"$FWL_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note : Installation of Laminated Planks including Foam','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(F)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalFW",'1','1','C');
     
///g
       $pdf->Cell(15,5,'G.','1','0','C');
      $pdf->Cell(170,5,'OTHERS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Baluster and Handrail Repaint','1','0','');
      $pdf->Cell(20,5,"$otherA_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$otherA_cost",'1','0','C');
      $pdf->Cell(20,5,"$otherA_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Demolition and Installation of 40x40 tiles @ balcony','1','0','');
      $pdf->Cell(20,5,"$otherB_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$otherB_cost",'1','0','C');
      $pdf->Cell(20,5,"$otherB_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Aluminum Screen Door Installation 2100 mm x 900 mm','1','0','');
      $pdf->Cell(20,5,"$otherC_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$otherC_cost",'1','0','C');
      $pdf->Cell(20,5,"$otherC_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,"False Wall, Modular Cabinet, Fabrication and Installation",'1','0','');
      $pdf->Cell(20,5,"$otherD_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$otherD_cost",'1','0','C');
      $pdf->Cell(20,5,"$otherD_total",'1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Installation of Shower Enclosure','1','0','');
      $pdf->Cell(20,5,"$otherE_quantity",'1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,"$otherE_cost",'1','0','C');
      $pdf->Cell(20,5,"$otherE_total",'1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');
      

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note : Laminated Finish For Cabinet and Shelves','1','','');
      $pdf->Cell(80,5,'','1','1','');


      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(110,5,'Sub Total(G)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalOther",'1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');

       $pdf->Cell(125,5,'GRAND TOTAL (A)+(B)+(C)+(D)+(E)+(F)+(G)','1','0','C');
      $pdf->Cell(60,5,"PHP $totalAmount",'1','1','C');


      /// footer

      $pdf->Ln(20);

 	$pdf->Cell(185,5,'TERMS AND CONDITION','1','1','C');
$pdf->Ln(5);

      $pdf->Cell(185,5,'1.0. Coverage: 60 Calendar days from the start of manpower/equipment mobilization,','','1','C');
      $pdf->Cell(185,5,'without consideration of delay by environmental sources','','1','C');

      $pdf->Ln(5);
      $pdf->Cell(185,5,'TERMS AND PAYMENT','1','1','C');
 	  $pdf->Ln(5);
      $pdf->Cell(185,5,'1.0 Atleast 30% advanced payment prior to mobilization of manpower and materials','','1','L');
      $pdf->Cell(185,5,'2.0 70% of reamining contract will be charge under weekly progress billing','','1','L');

       $pdf->Ln(25);

      $pdf->Cell(95,5,'Prepared by :','','','L');
      $pdf->Cell(90,5,'Conformed by :','','','L');
$pdf->Ln(10);
		

	$pdf->Line(130,185,180,185);
	$pdf->Line(30,185,100,185);
      $pdf->Cell(95,5,'Gen-Con. - PCE.BVC','','','C');
      $pdf->Cell(90,5,'Client','','','C');
    






      
     
      $pdf->Output('file.pdf', 'I');    
  
 ?>    
 











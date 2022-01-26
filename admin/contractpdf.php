<?php    


  

 
   
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
      $pdf->Cell(60,5,': Restoration Restroom','','1','');

      $pdf->Cell(30,5,'Project Location','','0','');
      $pdf->Cell(60,5,': Makati, Manila','','1','');

      $pdf->Cell(30,5,'Subject','','0','');
      $pdf->Cell(60,5,': Design Interior & Exterior','','1','');

      $pdf->Cell(30,5,'Client','','0','');
      $pdf->Cell(60,5,': Danielle Capistrano','','1','');

      $pdf->Cell(30,5,'Date','','0','');
      $pdf->Cell(60,5,': January 26, 2022','','1','');

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
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Project Management/Supervision','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'25,000.00','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Housekeeping','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Material Delivery','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Miscellaneous','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note :','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(150,5,'Sub Total(A)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');
///b
      $pdf->Cell(15,5,'B.','1','0','C');
      $pdf->Cell(170,5,'CEILING WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'	False Ceilng','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(150,5,'Sub Total(B)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

///c

       $pdf->Cell(15,5,'C.','1','0','C');
      $pdf->Cell(170,5,'PAINTING WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'	False Ceilng','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'	Interior Wall','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(150,5,'Sub Total(C)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

///d
       $pdf->Cell(15,5,'D.','1','0','C');
      $pdf->Cell(170,5,'ELECTRICAL WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Electrical Conduiting','1','0','');
      $pdf->Cell(20,15,'-','1','0','C');
      $pdf->Cell(20,15,'lot','1','0','C');
      $pdf->Cell(20,15,'-','1','0','C');
      $pdf->Cell(20,15,'-','1','0','C');

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
      $pdf->Cell(150,5,'Sub Total(D)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');


///e
       $pdf->Cell(15,5,'E.','1','0','C');
      $pdf->Cell(170,5,'TILE WORKS','1','1','');


       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Demolition of Existing Tiles','1','0','');
      $pdf->Cell(20,10,'-','1','0','C');
      $pdf->Cell(20,10,'lot','1','0','C');
      $pdf->Cell(20,10,'-','1','0','C');
      $pdf->Cell(20,10,'-','1','','C');

       $pdf->Cell(0,5,'','0','1','');

        $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Installation of Tiles. 60 cm x 60 cm','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Backsplash Installation','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note :','1','0','');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(150,5,'Sub Total(D)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');


///f
       $pdf->Cell(15,5,'F.','1','0','C');
      $pdf->Cell(170,5,'FLOORING WORKS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Laminated Planks Installation. 20cm x 120cm x 8 mm','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'sq.m','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note : Installation of Laminated Planks including Foam','1','0','C');
      $pdf->Cell(80,5,'','1','1','');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(150,5,'Sub Total(F)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');
     
///g
       $pdf->Cell(15,5,'G.','1','0','C');
      $pdf->Cell(170,5,'OTHERS','1','1','');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Baluster and Handrail Repaint','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Demolition and Installation of 40x40 tiles @ balcony','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Aluminum Screen Door Installation 2100 mm x 900 mm','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,"False Wall, Modular Cabinet, Fabrication and Installation",'1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Installation of Shower Enclosure','1','0','');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'lot','1','0','C');
      $pdf->Cell(20,5,'-','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');
      

      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(90,5,'Note : Laminated Finish For Cabinet and Shelves','1','','');
      $pdf->Cell(80,5,'','1','1','');


      $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(150,5,'Sub Total(G)','1','0','C');
      $pdf->Cell(20,5,'-','1','1','C');

       $pdf->Cell(15,5,'','1','0','C');
      $pdf->Cell(170,5,'','1','1','C');

       $pdf->Cell(145,5,'GRAND TOTAL (A)+(B)+(C)+(D)+(E)+(F)+(G)','1','0','C');
      $pdf->Cell(40,5,'-','1','1','C');


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
 











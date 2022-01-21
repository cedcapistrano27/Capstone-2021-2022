<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $conn = mysqli_connect("localhost", "root", "", "bvconstruction");  
      $output = '';  
      $query = "  
           SELECT * FROM payment  
           WHERE payment_issued BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">Customer Name</th>  
                     <th width="43%">Item</th>  
                     <th width="10%">Value</th>  
                     <th width="12%">Order Date</th>
                      <th width="43%">Item</th>  
                     <th width="10%">Value</th>  
                     <th width="12%">Order Date</th>    
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["PayID"] .'</td>  
                          <td>'. $row["UID"] .'</td>  
                          <td>'. $row["total_amount"] .'</td>  
                          <td>$ '. $row["payment_issued"] .'</td>  
                          <td>'. $row["project_name"] .'</td>
                          <td>'. $row["payment_type"] .'</td>
                          <td>'. $row["downpayment"] .'</td>
                          <td>'. $row["total_cost"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
<?php  
//db connection
include 'link.php';
 //filter.php  
if(isset($_POST["from_date"], $_POST["to_date"]))  
{
    $output = '';  
    $filterquery = "  
        SELECT * FROM booking  
        WHERE order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
    ";  
    $filterresult = mysqli_query($connect, $filterquery);  
    $output .= '  
        <table class="table table-bordered">  
            <tr>
                <th>Booking ID</th>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Appointment</th>
                <th>Registered By</th>
                <th>Registered On</th>
            </tr>  
    ';  
    if(mysqli_num_rows($filterresult) > 0)  
    {  
        while($filterrow = mysqli_fetch_array($filterresult))  
        {  
            $output .= '  
                <tr>
                <td>'. $row["order_id"] .'</td>
                <td>'. $row["ousername"] .'</td>  
                <td>'. $row["fname"] .'</td>  
                <td>'. $row["lname"] .'</td>  
                          <td>'. $row["order_date"] .'</td>  
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
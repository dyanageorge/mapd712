<?php  
//
$output = '';  
//
$connect = mysqli_connect("localhost", "root", "root", "Flawless");
//check to see if the action was prompted
if(isset($_POST["action"]))  
{  //create table 
    $procedure = 
            "CREATE PROCEDURE users()
            BEGIN 
            SELECT * FROM users ORDER BY id DESC; 
            END;
            ";
    if(mysqli_query($connect, $procedure))
        {  
            $query = "CALL selectUser()";  
            $result = mysqli_query($connect, $query);  
            $output .= '  
            <table class="table table-bordered">
                <tr>  
                    <th width="35%">Display Picture</th>
                    <th width="">User Name</tr>
                    <th width="35%">First Name</th>
                    <th width="35%">Last Name</th>
                    <th width="35%">Email</th>
                    <th width="35%">Date of Birth</th>
                    <th width="35%">Address</th>
                    <th width="35%">Primary Contract</th>
                    <th width="35%">Secondary Contact</th>
                    <th width="35%">Car Type</th>
                    <th width="35%">Registeration Date</th>
                    <th width="15%">Update</th>
                    <th width="15%">Delete</th>  
                          </tr>  
                ';  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                        $output .= '  
                            <tr>
                                <td>'.$row["image_id"].'</td>
                                <td>'.$row["username"].'</td>
                                <td>'.$row["fname"].'</td> 
                                <td>'.$row["lname"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["dob"].'</td>
                                <td>'.$row["areaAddress"].'</td>
                                <td>'.$row["primContact"].'</td>
                                <td>'.$row["secContact"].'</td>
                                <td>'.$row["carType"].'</td>
                                <td>'.$row["dateRegistered"].'</td>
                                <td><button type="button" name="update" id="'.$row["id"].'" class="update btn btn-success btn-xs">Update</button></td>  
                                <td><button type="button" name="delete" id="'.$row["id"].'" class="delete btn btn-danger btn-xs">Delete</button></td>  
                            </tr>  
                        ';  
                    }  
                }  
                else  
                {  
                     $output .= '  
                          <tr>  
                               <td colspan="4">Data not Found</td>  
                          </tr>  
                     ';  
                }  
                $output .= '</table>';  
                echo $output;  
           }  
      }  
   
 ?>  
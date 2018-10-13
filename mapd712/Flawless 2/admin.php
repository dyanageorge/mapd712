<?php
    //load looad connection
    include 'link.php';
    include 'header.php';
?>
<!--for user search-->
<?php 
    $userquery ="SELECT * FROM users ORDER BY DESC";
    $userresult = mysqli_query($connect, $userquery);
?>
<div id = "content_area">
    <h2><center>Admin Page</center></h2>
    <br><br>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Add User</a></li>
        <li><a data-toggle="tab" href="#menu2">User Listing</a></li>
        <li><a data-toggle="tab" href="#menu3">Bookings</a></li>
        <li><a data-toggle="tab" href="#menu4">Messages</a></li>
        <li><a data-toggle="tab" href="#menu5">Forum</a></li>
    </ul>
    
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>HOME</h3>  
        </div>
        <div id="menu1" class="tab-pane fade">
            <!--Make subheader-->
            <div class="container box">  
                <h3 align="center">Add User</h3>  
                <br /><br />  
                <br /><br />
                <h4>Add New User</h4>
                <br /><br />  
                <label>Enter First Name</label>
                <input type="text" name="fname" id="fname" class=".form-inline" /> 
                <br /> 
                <label>Enter Last Name</label> 
                <input type="text" name="lname" id="lname" class=".form-inline" /> 
                <br /> 
                <label>Enter Email</label>  
                <input type="email" name="email" id="email" class=".form-inline" />
                <br /> 
                <label>Enter Date of Birth</label>
                <input type="date" name="bday">
                <br /> 
                <label>Enter Gender</label>
                <input type="checkbox" name="male" value="male" class=".form-inline"> Male</input>
                <input type="checkbox" name="female" value="female"> Female</input>
                <br /> 
                <label>Enter Area</label> 
                <select id="area" name="area">
                    <!--connect to address table in db-->
                    <?php 
                    //mysql select query
                    $addressquery = "SELECT * FROM 'areaAddress'";
                    
                    $addressresult = mysqli_query($connect, $addressquery);
                    
                    $options = "";
                    
                    while($address_row = mysqli_fetch_array($addressresult)):;?>
                    <option value="<?php echo $address_row[0];?>"</option>
                    <?php endwhile;?>
                    
                </select>
                <br /> 
                <label>Enter Primary Contact Number</label>
                <input type="tel" name="primContact" id="primContact" class=".form-inline" />
                <br /> 
                <label>Enter Secondary Contact Number</label>  
                <input type="text" name="secContact" id="secContact" class=".form-inline" /> 
                <br />
                <label>Car Type</label>
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form> 
                <div align="center">  
                    <input type="hidden" name="id" id="user_id" />  
                    <button type="button" name="action" id="action" class="btn btn-warning">Add</button>
                </div>
                <br>
                <br>
                <!--insert image-->
            </div>  
            <script>  
                $(document).ready(function(){  
                     fetchUser();  
                     function fetchUser()  
                     {  
                        //name variable and set it 
                        var action = "select"; 
                        //when variable is selected
                          $.ajax({  
                               url : "select.php",  
                               method:"POST",  
                               data:{action:action},  
                               success:function(data){  
                                    $('#fname').val('');  
                                    $('#lname').val('');  
                                    $('#action').text("Add");  
                                    $('#result').html(data);  
                               }  
                          });  
                     }  
                     $('#action').click(function(){  
                          var firstName = $('#first_name').val();  
                          var lastName = $('#last_name').val();  
                          var id = $('#user_id').val();  
                          var action = $('#action').text();  
                          if(firstName != '' && lastName != '')  
                          {  
                               $.ajax({  
                                    url : "action.php",  
                                    method:"POST",  
                                    data:{firstName:firstName, lastName:lastName, id:id, action:action},  
                                    success:function(data){  
                                         alert(data);  
                                         fetchUser();  
                                    }  
                               });  
                          }  
                          else  
                          {  
                               alert("Both Fields are Required");  
                          }  
                     });  
                     $(document).on('click', '.update', function(){  
                          var id = $(this).attr("id");  
                          $.ajax({  
                               url:"fetch.php",  
                               method:"POST",  
                               data:{id:id},  
                               dataType:"json",  
                               success:function(data){  
                                    $('#action').text("Edit");  
                                    $('#user_id').val(id);  
                                    $('#first_name').val(data.first_name);  
                                    $('#last_name').val(data.last_name);  
                               }  
                          })  
                     });  
                     $(document).on('click', '.delete', function(){  
                          var id = $(this).attr("id");  
                          if(confirm("Are you sure you want to remove this data?"))  
                          {  
                               var action = "Delete";  
                               $.ajax({  
                                    url:"action.php",  
                                    method:"POST",  
                                    data:{id:id, action:action},  
                                    success:function(data)  
                                    {  
                                         fetchUser();  
                                         alert(data);  
                                    }  
                               })  
                          }  
                          else  
                          {  
                               return false;  
                          }  
                     });  
                });  
                </script>  
        </div>
        <div id="menu2" class="tab-pane fade">
            <header>
                <h1>User Listing</h1>
                    <!--close container-->
            </header>
            
            <!-- user table-->
            <div class="table-responsive">
                <table id="user_data" class="table table-striped table-bordered">
                    <!--open user table header-->
                    <thead>
                        <!--open table header row-->
                        <tr>
                            <!--table header columns-->
                            <td>Display Image</td>
                            <td>User Name</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email Name</td>
                            <td>Date of Birth</td>
                            <td>Gender</td>
                            <td>Address Area</td>
                            <td>Primary Contact</td>
                            <td>Secondary Contact</td>
                            <td>Car Type</td>
                            <td>Date of Registration</td>
                            <td>Registered By</td>
                            <td>User Type</td>
                            <!--close table header row-->
                        </tr>
                        <!--close table header-->
                    </thead>
                    <!--call user info from data-->
                    <?php
                        while($userrow = mysqli_fetch_array($userresult))
                        {
                    ?>
                    <tr>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["fname"]; ?></td>
                                    
                                </tr>
                            <?php
                        }?>
                </table>
            </div>
            <!--close menu two-->    
        </div>
        <!--open menu one-->
        <div id="menu3" class="tab-pane fade">
            <h3>Booking Listing</h3>
            <br>
            <div>
                <div class="col-md-3">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>
                <div class="col-md-3">  
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                    <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
            </div>
            <!--open booking display table-->
            <!-- user table-->
            <div class="table-responsive">
                <table id="booking_data" class="table table-striped table-bordered">
                    <!--open booking table header-->
                    <thead>
                        <!--open table header row-->
                        <tr>
                            <!--table header columns-->
                            <td>Booking ID</td>
                            <td>User Name</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email Name</td>
                            <td>Address Area</td>
                            <td>Primary Contact</td>
                            <td>Secondary Contact</td>
                            <td>Car Type</td>
                            <td>Date For Booking</td>
                            <td>Registered By</td>
                            <td>Registered On</td>
                            <td>Rep Assigned</td>
                            <!--close table header row-->
                        </tr>
                        <!--close table header-->
                    </thead>
                    <!--call user info from data-->
                    <?php
                        while($userrow = mysqli_fetch_array($userresult))
                        {
                    ?>
                    <tr>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["fname"]; ?></td>
                                    
                                </tr>
                            <?php
                        }?>
                </table>
            </div>
            <!--close menu three-->
        </div>
    </div>
</div>
<!--script to run function-->
<script th:inline="javascript">
    $(document).ready(function(){
        $('#user_data').DataTable();
        $('#booking_data').DataTable();
    });
</script>
<?php 
    include 'footer.php';
?>

    
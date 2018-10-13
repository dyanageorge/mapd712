<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>  
    </head>
    <body>
        <br />  
           <div class="container" style="width:100%; margin-left: 5%; margin-right: 5%;">  
                <!--make title for page-->
                <h1 align="center" style="padding: 2%;">Members Page</h1>
                <!--sep the container into two -->
                <!--open div for login side-->
                <div class="contentleft" style="width: 50%; float: left;">
                    <h3 align="center" style="padding: 2%;">LOGIN</h3>
                    <p style="padding-top: 10%;">Are you a returning member?</p>
                    <br />  
                    <br />  
                    <br />  
                    <br />  
                    <br />  
                    <br />  
                    <?php  
                    if(isset($_SESSION['username']))  
                    {  
                    ?>  
                    <div align="center">  
                         <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />  
                         <a href="#" id="logout">Logout</a>  
                    </div>  
                    <?php  
                    }  
                    else  
                    /*if user not enterred into system them prompt login*/
                    {  
                    ?>  
                    <div align="center">  
                         <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>  
                    </div>  
                    <?php  
                    }  
                    ?>  
                </div>
                <!--div to hold reg info-->
                <div class="contentright" style="width: 50%; float: left;">
                    <h3 align="center" style="padding: 2%;">REGISTER</h3><br />  
                    <br />  
                    <br />  
                    <br />  
                    <br />  
                    <br />  
                    <?php  
                    if(isset($_SESSION['username']))  
                    {  
                    ?>  
                    <div align="center">  
                         <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />  
                         <a href="#" id="logout">Logout</a>  
                    </div>  
                    <?php  
                    }  
                    else  
                    {  
                    ?>  
                    <div align="center">  
                         <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Register</button>  
                    </div>  
                    <?php  
                    }  
                    ?>  
                </div>
            </div>  
           <br />  
      </body>  
 </html>  
 <div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
               <!--make modal header-->
                <div class="modal-header">  
                    <!--make close button-->
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <!--make title-->
                     <h4 class="modal-title">Login</h4>  
                     <!--close header-->
                </div>  
               <!--open modal body-->
                <div class="modal-body">  
                    <!--define information-->
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                <!--close div-->
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
          //define the var
           var username = $('#username').val();  
           var password = $('#password').val();  
           //make if statement where if username and password is not blank
           if(username != '' && password != '')  
           {  
                $.ajax({  
                    /*send request to page*/
                     url:"action.php",  
                     /*to send request to server*/
                     method:"POST",  
                     /*data that would be sent to the server*/
                     data: {username:username, password:password}, 
                     /*sucess call back function from server*/
                     success:function(data)  
                     {  
                          /*if data recieved from action.php is no then print */  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          /*if data recieved from action.php is yes then go to new page*/
                          {  
                               $('#loginModal').hide();  
                               /*open new page*/
                               window.location.href = "admin.php";  
                          }  
                     }  
                });  
           }  
           //if both or one of the var is blank then prompt an alert
           else  
           {  
               /*print an alert statment*/
                alert("Both Fields are required");  
           }  
      });  
      /*when logout button is clicked*/
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
               /*go to page*/
                url:"action.php",  
                method:"POST",  
                /*on sucess*/
                data:{action:action},  
                success:function()  
                {  
                    /*reload page*/
                     location.reload();  
                }  
           });  
      });  
 });  
 </script>  


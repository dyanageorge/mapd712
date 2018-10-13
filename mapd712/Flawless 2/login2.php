<?php
include 'header.php';
?>
<div>
    <form action="" method="post" id="login_form">
        <div class="form-group">
            <!--define information-->
            <label for="login">Username</label>
            <input type="text" name="username" id="username" value="<?php if(isset($_COOKIE["user_login"])) {echo $_COOKIE["user_login"]; } ?>" class="form-control" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php if(isset($_COOKIE["user_password"])) {echo $_COOKIE["user_password"]; } ?>" class="form-control" />
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />  
            <label for="remember-me">Remember me</label>
        </div>
        <div class="form-group">
            <button type="submit" name="login_button" value="login_button" class="btn btn-warning">Login</span></button>
        </div>
    </form>
</div>
<script>
        $('#login_button').click(function(){
            //define the var
            var user = $('#username').val();
            var pass = $('#password').val();

            var data_string = "user="+user+"&pass="+pass;
            //make if statement where if username and password is not blank

            $.ajax({
                /*send request to page*/
                url:"process_login2.php",
                /*to send request to server*/
                method:"POST",
                /*data that would be sent to the server*/
                data: data_string,
                /*success call back function from server*/
                success:function(data){
                    alert(data);/*switch (data){
                        case 'general':
                            window.location.href="contactus.php"
                            break;
                            
                        case 'admin':
                            break;
                            
                        case 'employee':
                            break;
                            
                        case 'superuser':
                            break;
                    }*/
                }
            });
        });
    </script>




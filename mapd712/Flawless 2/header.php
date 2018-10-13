<?php
        session_start();
        //connect to db
        include 'link.php';
        //check to see if user already logged in
        if(isset($_SESSION['user_info']))
        {   //reload index page with user information
            header("location:login2.php");
        }
        
        //if user tries logging in
        if(isset($_POST["login"]))
            {
            //if the username and password is not empty then
            if(!empty($_POST["username"]) && !empty($_POST["password"]))
                {
                    //store data in varibles
                    $name = mysqli_real_escape_string($connect, $_POST["username"]);
                    $pass = md5(mysqli_real_escape_string($connect, $_POST["password"]));
                    //search db table
                    $loginsql = "SELECT * from users where username = '".$name . "' and password = '" . $pass . "'";
                    //store info
                    $loginRes = mysqli_query($connect, $loginsql);
                    //store result
                    $user = mysqli_fetch_array($loginRes);
                    
                    if($user)
                    {
                        //if the user wants to remember login info
                        if(!empty($_post["remember"]))
                        {
                            setcookie("user_login", $name,time()+ (10 * 365 * 24 * 60 * 60));
                            setcookie("user_password", $password,time()+ (10 * 365 * 24 * 60 * 60));
                            $_SESSION["user_name"] = $name;
                        }
                        else 
                        {
                            if(isset($_COOKIE["user_login"]))
                            {
                                setcookie("user_login","");
                            }
                            if(isset($_COOKIE["user_password"]))
                            {
                                setcookie("user_password","");
                            }
                        }
                        header("location:home.php");
                    }
                    else 
                    {
                        $message = "Invaild Login";
                    }
                }
            }
            else
            {
                $message = "Both are Required ";
            }
        ?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="refresh" content="text/html" charset="UTF-8">
        <meta http-equiv="Cache-control" content="public">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <!--online boot strap css library-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--css library for data tables-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <!--google hosted ajax library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
        <!--to use the javascript of data tables functionality-->
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
        <!--to use bootstrap of data tables for functionality-->
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--for date dropdown library-->
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        
    </head>
    <body>
        
        <!--to hold the header and the nav bar on the background image-->
        <div id="header-wrap">
            <!--to hold the header alone-->
            <div id="header">
                <!-- the header is then spilt in three-->
                <div id="header-left">
                    <div id="header-cart">
                        <a href="bookings.php" title="Bookings"> Make Bookings </a>
                    </div><br><br>
                    <div id="display_search">
                        <form action="" method="get" name="SearchBoxForm">
                            <input type="text" name="search" id="search_input" value="Search" data-bl-defaulttext="Search" data-bl-defaultclass="search_empty" onblur="inputTextBlurred(this, '#000000');" onfocus="inputTextClicked(this, '#000000');" style="color:#000000;" autocomplete="off">
                            <div class="search-results-container" style="display: none">
                                <div class="search-results-loading">
                                    <img src="#">
                                </div>	
                                <div class="search-results-items"></div>      
                            </div>
                            <input type="submit" name="Submit" id="search_submit" value="">
                        </form>
                    </div>
                    <!--close header left-->
                </div>
                <div id="header-center">
                    <img src="images/flawless_logo.png" alt="logo" height="150px" width="80%" style="opacity:0.4;filter:alpha(opacity=40);">
                    <!--close header center-->
                </div>
                <div id="header-right">
                    <!--div to hold social media links-->
                    <div id="header-socialmedia">
                        <!--link to facebook-->
                        <a href="https://www.facebook.com/KleenKar1/?fref=ts" title="Follow Flawless Auto Detailing on Facebook" target="_blank"><img src="images/facebooklogo.png" width="20" height="20" alt="Facebook logo"></a>
                        <!--link to twitter page-->
                        <a href="#" title="Follow Flawless Auto Detailing on Twitter" target="_blank"><img src="images/twitterlogo.png" width="20" height="20" alt="Twitter logo"></a>
                        <!--link to youtube page-->
                        <a href="#" title="Follow Flawless Auto Detailing on YouTube" target="_blank"><img src="images/youtubelogo.png" width="20" height="20" alt="YouTube logo"></a>
                        <!--link to instagram page-->
                        <a href="#" title="Follow Flawless Auto Detailing on Instagram" target="_blank"><img src="images/instagramlogo.png" width="20" height="20" alt="Instagram logo"></a>
                        <!--link to newsletter subscribation-->
                        <a href="#" title="Sign up for the Flawless Auto Detailing newsletter"><img src="images/email.png" width="20" height="20" alt="Email Signup"></a>
                        <!--div to close social media-->
                    </div>
                    <div id="header-sitetools">
                        <a href="aboutus.php">About Us</a>
                        <span>|</span><a href="gift-cert.php">Gift Certificates</a><span>|</span><a href="#" data-toggle="modal" data-target="#LoginModal">My Account</a><span>|</span><a href="contactus.php">Contact Us</a>
                    </div>
                    <!--contact info-->
                    <a target="_blank" href="contactus.php" title="Contact Us" id="header-contact"><span>Call Us: 1.868.298.2096</span><br>Mon-Sat 8:00am-5:00pm</a>
                <!--close header right-->
                </div>
                <!-- close header-->
            </div>
            <!--div for nav-->
            <div id="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a>
                        <ul id="subnav">
                            <li><a href="#">Internal</a></li>
                            <li><a href="#">External</a></li>
                            <li><a href="#">Company</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Learning Center</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
        <!--close header wrap-->  
        </div>
        <!--wrapper-->
        <div id="header-wrapper">
            <!--content-->
            <marquee>
                <p>Welcome to Flawless Auto Detailing Website.  Stay tune for more information</p>
            </marquee>
        </div>
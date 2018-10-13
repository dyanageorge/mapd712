<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div id="content-area">
            <div id="home-image">
                <img src="images/exterior_car_8.jpg" alt="opening image">
            </div>
            <div id="home-newsletter">
                <a href="contactus.php" id="newsletter" onclick="document.location=this.id+'.html';return false;">
                    <img src="images/email.png" alt="newsletter">
                    <h6> SIGN UP FOR FLAWLESS AUTO DETAILING EMAIL</h6>
                    <p>Be the first to know about the latest products, exclusives and offers from Flawless Auto Detailing</p>
                </a>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>

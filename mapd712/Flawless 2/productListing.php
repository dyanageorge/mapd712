<?php
include 'link.php';
include 'header.php';

$productQuery = "SELECT * FROM product ORDER BY product_price desc";  
$productResult = mysqli_query($connect, $productQuery);  
?> 
<div id="content">
    <!--put header-->
    <h3>Booking</h3>
    <!--prompt user to select a car type-->
    <div id="carRadioGroup">
    <label for="vehicle_type">Select Vehicle Type<span>*</span>: <br><br>
        <input type="radio" name="carType" checked="checked" class="vehicletype" value="coupe"><img src="https://www.ricksautodetailing.com/images/coupe.png"> Coupe or Convertible</input> <br>
        <input type="radio" name="carType" class="vehicletype" value="sedan"><img src="https://www.ricksautodetailing.com/images/sedan.png"> Sedan or Wagon</input> <br>
        <input type="radio" name="carType" class="vehicletype" value="crossover"><img src="https://www.ricksautodetailing.com/images/small-suv.png"> Small SUV or Crossover</input> <br>
        <input type="radio" name="carType" class="vehicletype" value="suv"><img src="https://www.ricksautodetailing.com/images/minivan.png">Large SUV or Mini Van</input> <br>
        <input type="radio" name="carType" class="vehicletype" value="2door"><img src="https://www.ricksautodetailing.com/images/truck.png">2 Door Pick-Up <br> 
        <input type="radio" name="carType" class="vehicletype" value="4door"><img src="https://www.ricksautodetailing.com/images/truck.png">4 Door Pick-Up <br>
    </label>
    <!--options for car types-->
    <div id="coupe" class="desc">
        <p>test1</p>
    </div>
    <div id="sedan" class="desc">
        <p>test2</p>
    </div>
    <div id="crossover" class="desc">
        <p>test3</p>
    </div>
    <div id="suv" class="desc">
        <p>test4</p>
    </div>
    <div id="2door" class="desc">
        <p>test5</p>
    </div>
    <div id="4door" class="desc">
        <p>test6</p>
    </div>
    </div>
</div> 
    <script>
    $(document).ready(function(){
        $("div.desc").hide();
        $("input[name$='carType']").click(function() {
            var test = $(this).val();
            $("div.desc").hide();
            $("#" + test).show();
        });
    });
    </script>

<?php
    $title = "Gift Certificates";
    
    include 'template.php';
?> 
<div id="content">
    <hr>
        <h1> <center> Gift Certificates<center></center></h1>
    <hr>
    <div id='content_left'>
        <img src="images/Gift_Certificate.jpg" alt="Gift Certificate Image" width="500px">
    </div>
    <div id="content_right">
        <center>
        <p>Choose one of our gift certificate options below.</p> 
        <p>Your payment will be processed through Authorize.net. </p>
        <p>A printable gift certificate will be emailed to the address provided.</p>
        <p>Gift cards are good for 1 year after purchase date. </p>
        <p><b>No exceptions. </b></p>
        <p><b>It cannot be combined with any other offers.</b> </p>
        <p>Pickup and delivery is only available for a 'complete detail' in certain areas. </p>
        <p>Note that pet hair, odor or stain removal or other special situations may increase the prices quoted in this form.</p>
        </center><br>
        <form action="authenticate_gift_card.php" method="POST">
            <br><br><h2><center>Select Your Gift Options</center></h2>    <br><br>
            <table width="1125px" border="0" align="center">
                <tbody>
                    <tr>
                        <td>
                            <label for="service_type">Select Service Type<span>*</span>: <br> <br>
                                <input type="radio" name="service type 1" value="service_type_1">Complete Detail</input> &ensp;&ensp;
                                <input type="radio" name="service type 2" value="service_type_2">Full Exterior</input> &ensp;&ensp;
                                <input type="radio" name="service type 3" value="service_type_3">Full Interior</input> &ensp;&ensp;
                                <input type="radio" name="service type 4" value="service_type_4">Wash and Wax</input> &ensp;&ensp; 
                                Custom $$ Amount: <input type="text" name="service type 5" value="400" class="styletxtfield">
                        </label>         
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="vehicle_type">Select Vehicle Type<span>*</span>: <br><br>
                                <input type="radio" name="vehicle type 1" value="vehicle_type_1"><img src="https://www.ricksautodetailing.com/images/coupe.png"> Coupe or Convertible</input> <br>
                                <input type="radio" name="vehicle type 2" value="vehicle_type_2"><img src="https://www.ricksautodetailing.com/images/sedan.png"> Sedan or Wagon</input> <br>
                                <input type="radio" name="vehicle type 3" value="vehicle_type_3"><img src="https://www.ricksautodetailing.com/images/small-suv.png"> Small SUV or Crossover</input> <br>
                                <input type="radio" name="vehicle type 4" value="vehicle_type_4"><img src="https://www.ricksautodetailing.com/images/minivan.png">Large SUV or Mini Van</input> <br>
                                <input type="radio" name="vehicle type 5" value="vehicle_type_5"><img src="https://www.ricksautodetailing.com/images/truck.png">2 Door Pick-Up <br> 
                                <input type="radio" name="vehicle type 5" value="vehicle_type_5"><img src="https://www.ricksautodetailing.com/images/truck.png">4 Door Pick-Up <br>
                                Other Vehicle Type: &ensp;<input type="text" name="vehicle type 5" value="Maxi Taxi/ Limo etc" class="styletxtfield" >
                        </label>         
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    &nbsp;
                    &nbsp;
                    <h2> <center> Information to be Placed on the Gift Certificate<center></center></h2>
                    &nbsp;
                    <tr>
                        <td>
                            <label for="sender_fnamename">Your First Name<span>*</span>: <br><br>
                                <input type="text" name="Sender First Name" value="John" class="styletxtfield">
                            </label>         
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sender_lnamename">Your Last Name<span>*</span>: <br><br>
                                    <input type="text" name="Sender Last Name" value="Doe" class="styletxtfield">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="your_email">Your email Address<span>*</span>: <br><br>
                                <input type="text" name="sender email" value="janedoe@hotmail.com" class="styletxtfield">
                            </label> 
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="recipient_fname">Recipient's First Name<span>*</span>: <br><br>
                                <input type="text" name="Recipient First Name" value="Jane" class="styletxtfield">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="recipient_lname">Recipient's Last Name<span>*</span>: <br><br>
                               <input type="text" name="Recipient Last Name" value="Doe" class="styletxtfield">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="recipient_email">Recipient's email Address<span>*</span>: <br><br>
                                <input type="text" name="Recipient email" value="janedoe@hotmail.com" class="styletxtfield">
                            </label>  
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td id="Submit_button">
                            <input name="Submit" type="submit" id="submit" value="submit">
                        </td>
                    </tr>
                </tbody>
            </table> 
        </form>
    </div>
</div>>
<?php

    include 'footerTemplate.php';
?>
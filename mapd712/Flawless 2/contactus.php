<?php
    include 'header.php';
?>
<div id="content_area">
    <hr>
    <h1><center>Contact Us</center></h1>
    <hr>
    <div id="content_left">
        <center>
        <p>Don't want to want to leave a message?</p>
        <p>We have other options for you to use!</p>
        <p>You can use our <a href="#">live chat option</a></p>
        <p>You can even contact us at the number located both at the top and bottom of the screen</p>
        </center>
    </div>
    <div id="content_right">
        <form action="http://www.SnapHost.com/captcha/send.aspx" method="post" id="myform">
            <input type="hidden" id="skip_WhereToSend" name="skip_WhereToSend" value="01.flawless.detailing@gmail.com" />
            <input type="hidden" id="skip_Subject" name="skip_Subject" value="Customer Quesion" />
            <input type="hidden" id="skip_WhereToReturn" name="skip_WhereToReturn" value="Flawless/thankyou.php" />
            <input type="hidden" id="skip_SnapHostID" name="skip_SnapHostID" value="7XN7R9H5Q6HR" />
            <table width="400" border="0" align="center">
                <tbody>
                    <tr>
                        <td>
                            <label for="fname">First Name: <input name="fname" type="text" class="styletxtfield" id="fname">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lname">Last Name: <input name="lname" type="text" class="styletxtfield" id="lname">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="emailaddress">Email:&emsp; &emsp; <input name="emailaddress" type="text" class="styletxtfield" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="subject">Subject:   &emsp; <input name="subject" type="text" class="styletxtfield" id="subject">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="message_label">Message:<br>
                            </label>                  
                            <textarea id="message" class="form-input"  placeholder="Message (required)" ></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <table cellspacing="0" border="0" cellpadding="8" style="background-color:#66cccc;"> <!-- for captca-->
                            <tr>    
                                <td colspan="2" style="padding-bottom:1px;">
                                    <a href="http://www.snaphost.com/captcha" alt="send form to email" title="send form to email" >send form to email</a>
                                </td>
                            </tr>
                            <tr valign="bottom">
                                <td>
                                    <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');">
                                        <span style="font-size:12px;">reload image</span>
                                    </a>
                                    <br/>
                                    <a href="http://www.snaphost.com/captcha/ProCaptchaOverview.aspx">
                                        <img id="CaptchaImage" alt="protection against spam bots" style="border-width:0px;" title="protection against spam bots" src="http://www.SnapHost.com/captcha/CaptchaImage.aspx?id=7XN7R9H5Q6HR" />
                                    </a>
                                </td>
                                <td>  
                                    <br />
                                    <i>Enter Captcha code</i>
                                    <br />
                                    <input id="skip_CaptchaCode" name="skip_CaptchaCode" type="text" style="width:130px; height:48px; font-size:38px;" maxlength="6" />
                                    <br />
                                </td>
                            </tr>
                        </table>
                        <script type="text/javascript">
                        function ReloadCaptchaImage(captchaImageId) {
                        var obj = document.getElementById(captchaImageId);
                        var src = obj.src;
                        var date = new Date();
                        var pos = src.indexOf('&rad=');
                        if (pos >= 0) { src = src.substr(0, pos); }
                        obj.src = src + '&rad=' + date.getTime();
                        return false; }
                        </script>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <br>
                    <tr><center>
                        <td id="Register_button">
                            <input name="Submit" type="submit" id="Submit" value="Submit">
                        </td></center>
                    </tr><br><br>
                </tbody>
            </table>
        </form>
    </div>
</div>
<?php

    include 'footer.php';
?>
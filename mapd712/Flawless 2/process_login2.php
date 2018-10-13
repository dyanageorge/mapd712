<?php
session_start();
//include connection
include 'link.php';
/*include your database connection here */
$user = mysqli_real_escape_string($connect, $_POST['user']);
$pass = mysqli_real_escape_string($connect, $_POST['pass']);
$pass = md5($pass);

$output ="";

//$err_chck = 2;

//check to see if there is an empty field
if (empty($_POST['user']) || empty($_POST['pass'])){
    //
    $output = "fields empty";
    //
    //$err_chck = 1;
}

//use empty function check if the var has anything in it
if (empty($output)){
//runs sql and store insert info
$loginQuery = "SELECT * FROM users WHERE username= '$user' AND password = '$pass'";
//gives value to result
if ($loginRes = mysqli_query($connect, $loginQuery)){
    //count number of rows returned
    //if equal to one then get result
    if (mysqli_num_rows($loginRes) == 1){
	//stores result in another variable
        $data = mysqli_fetch_array($loginRes);
        // store the data from the result setfor the session
        $info = array(
            "username" => $data['username'],//change to the username column in your database
            "firstname" => $data['fname'],//change to the firstname column in your database
            "lastname" => $data['lname'],//change to the lastname column in your database
            "level" => $data['userType_fk']//change to the usertype column in your database
	);
	//store user info in session varible			
	$_SESSION['user_info'] = $info;
        //store the value that is returning to the ajax call
	$output = data['userType_fk'];
        //if the info is not found 
    }else{
    //print error message
        $output = "password incorrect";
	//$err_chck=1;
        //error message for general user
    }
}else{
    //if there is a connection issue
    $output = mysqli_error($connect);
    //$err_chck =1;
    //put string error message for super user
    }
}

//the info needed
echo $output;

	/*if ($err_chck == 2){
		header("location: admin.php");
		exit();
	}else{
		set_admin_message($output,$err_chck,'login.php');
	}*/
?>
<?php
$user = 'root';
$password = 'root';
$db = 'flawless';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$connect = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
/*if (!$connect) {
    die("Connection failed:" .mysqli_connect_error());
}
echo "Connected successfully";*/

//area address query
//$addressquery = "SELECT * FROM areaAddress";
//$addressresult = mysqli_query($connect, $addressquery);

?>

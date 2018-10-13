<?php
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $login = $_POST['login'];
    
    if(isset($login)){
        $mysqli = new mysqli("localhost", "root", "root", "Flawless");
        if ($mysqli->connect_error) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }
        
        $res = $mysqli->query("SELECT * FROM users where username='$username' and password='$password'");
        $row = $res->fetch_assoc();
        $name = $row['name_login'];
        $user = $row['username'];
        $pass = $row['password'];
        $type = $row['type'];
        
        if($user==$username && $pass=$password){
            session_start();
            if($type=="1"){
                $_SESSION['fname']=$name;
                $_SESSION['mytype']=$type;
                echo "<script>window.location.assign('admin.php')</script>";
            } else if($type=="2"){
                $_SESSION['fname']=$name;
                $_SESSION['mytype']=$type;
                echo "<script>window.location.assign('member.php')</script>";
            } else{
?>
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Warning!</strong> Tidak sesuai dengan type user.
</div>
<?php
    }
  } else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Warning!</strong> This username or password not same with database.
</div>
<?php
  }
}
?>


<?php

require 'src/init.php';
$user = new User($db);

if(isset($_SESSION['user'])) {

    $user_data = $user->getUser($_SESSION['user']);
}

if(isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root","","forum");
    $user =mysqli_real_escape_string($con,$_POST['user']);
    $message=mysqli_real_escape_string($con, $_POST['message']);
    date_default_timezone_set('Europe/Berlin');
    $time=date('h:i:s a', time());

    if(!isset($user)||$user ==''|| !isset($message)||$message==''){
        $error ="Niepoprawne dane!";
        header("Location:shoutbox.php?error=".urlencode($error));
        exit();
    }else{
        $query="INSERT INTO shout(user,message, time)VALUES('$user','$message','$time')";
        if(!mysqli_query($con,$query)){
            die("Error: ".mysqli_error($con));
        }else{
            header("Location:shoutbox.php");
        }
    }

}
require VIEW_ROOT . '/shoutbox.php';
?>
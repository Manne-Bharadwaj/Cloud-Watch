<?php
session_start();
define('DB_SERVER','127.0.0.1');
define('DB_USER','Tanooj');
define('DB_PASS','Tan@2000ooj');
define('DB_NAME','cloud_ott_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno())
{
    echo "Faild to connect Please Check Your Internet ";
}
$userid=htmlentities(trim($_POST['Userid']));
$password=htmlentities(trim($_POST['password']));
$password1=htmlentities(trim($_POST['password2']));
if($password == $password1)
{
$query=mysqli_query($con,"UPDATE `ott` SET `Password`='$password' WHERE `EmailID`='$userid'");
/*$num=mysqli_fetch_array($query);
if($num > 0)
{*/
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (60*15);
echo "Password Reset Successfull Please Sign IN";
header("location:home.html");
}
else
{
    $_SESSION['errmsg']="Please Enter Vallid Details";
    header("location:#");
    exit;
}
//}
?>
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
$uname=htmlentities(trim($_POST['name1']));
$emailid=htmlentities(trim($_POST['Login']));
$password=htmlentities(trim($_POST['password']));
$query=mysqli_query($con,"INSERT INTO `ott` (`UserID`, `Name`, `EmailID`, `Password`) VALUES ('$userid','$uname','$emailid','$password')");
//$num=mysqli_fetch_array($query);
//$row_num=mysqli_num_rows($query);
//if($row_num > 0)
//{
$_SESSION['signin']=$_POST['emailid'];
$_SESSION['sname']=$num['SName'];
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (60*15);
header("location:login.php");
//}
/*else
{
    $_SESSION['errmsg']="Please Enter Vallid Details";
    header("location:login.html");
    exit;
}*/
$con->close();
?>
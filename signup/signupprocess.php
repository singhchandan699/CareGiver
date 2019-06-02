<?php
include("db/dbconnect.php");
$Email=$_POST['txt_email'];

$Password=$_POST["txt_password"];

$sqli="SELECT * FROM registration WHERE Email='$Email' AND Password='$Password'";


$query_result=mysqli_query($con, $sqli);
 	 if($query_result == false)
 {
 	die(mysqli_error($con));
 }

$numrows = mysqli_num_rows($query_result);
if($numrows==1)
{
	session_start();
	$res = mysqli_fetch_assoc($query_result);
	$_SESSION['uid']=$res['id'];
	header("location:../user/user.php");

}
else
{
	header("location:signup.html");

	exit;
}
?>
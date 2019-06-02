<?php
// Start the session
session_start();
?>

<?php
include("db/dbconnect.php");

$username=$_POST['txt_username'];

$password=$_POST["txt_password"];

 $sql="SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";

$query_result=mysqli_query($con, $sql);

 if($query_result == false)
 {
 	die(mysqli_error($con));
 }

$numrows=mysqli_num_rows($query_result);
if($numrows==1)
{
	session_start();
	$_SESSION['username']=$username;
	header("location:adminui.php");

}
else
{
	header("location:adminui.php");

	exit;
}
?>
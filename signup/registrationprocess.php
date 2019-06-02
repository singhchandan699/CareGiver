<?php
//db added//
include("./db/dbconnect.php");
$User_name=$_POST['User_Name'];
$Numbe=$_POST['Numbe'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];

//now insert data into db
 $sql="INSERT INTO registration(User_Name,Numbe,Email,Password)VALUES('$User_name','$Numbe','$Email','$Password')";

 $query_result=mysqli_query($con, $sql);
 	 if($query_result == false)
 {
 	die(mysqli_error($con));
 }
 $numrows = mysqli_num_rows($query_result);
if($numrows==1)
{
	header("location:registration.html");

}
else
{
	header("location:registration.html");

	exit;
}
?>
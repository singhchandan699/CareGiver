<?php
//db added//
include("db/dbconnect.php");
//now using post//
$name=$_POST['name'];
$Email=$_POST['Email'];
$City=$_POST['City'];
$Message=$_POST['Message'];

 //now insert data into db
  $sql= "INSERT INTO contact(name,Email,City,Message) VALUES ('$name','$Email','$City','$Message')";

$query_result=mysqli_query($con, $sql);
 	 if($query_result == false)
 {
 	die(mysqli_error($con));
 }
 $numrows = mysqli_num_rows($query_result);
if($numrows==1)
{
	header("location:contact.html");

}
else
{
	header("location:contact.html");

	exit;
}
?>

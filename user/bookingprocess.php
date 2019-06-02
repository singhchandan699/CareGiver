<?php
//db added//
include("./db/dbconnect.php");
$name=$_POST['name'];
$Service=$_POST['Service'];
$Address=$_POST['Address'];
$Dat=$_POST['Dat'];
$mno=$_POST['mno'];
$email=$_POST['email'];
$pay=$_POST['pay'];

//now insert data into db
 $sql="INSERT INTO booking (name,Service,Address,Dat,mno,email,pay)VALUES('$name','$Service','$Address','$Dat','$mno','$email','$pay')";

 $query_result=mysqli_query($con, $sql);
 	 if($query_result == false)
 {
 	die(mysqli_error($con));
 }
 $numrows = mysqli_num_rows($query_result);
if($numrows==1)
{
	header("location:booking.php");

}
else
{
	header("location:booking.php");

	exit;
}
?>
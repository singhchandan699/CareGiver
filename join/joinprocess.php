<?php
//db added//
include("./db/dbconnect.php");
//now using post//
$name=$_POST['txt_name'];
$gender=$_POST['txt_gender'];
$address=$_POST['txt_Address'];
$mobile_number=$_POST['txt_mno'];
$email=$_POST['txt_email'];
$adhar_card=$_POST['txt_adhar'];
$services=$_POST['txt_ser'];
$charges=$_POST['txt_charge'];
$photo=$_POST['txt_photo'];
$timing=$_POST['txt_tim'];
$date=$_POST['txt_dat'];


 //now insert data into db
 $sql="INSERT INTO joinus(name,gender,Address,mno,email,adhar,ser,charge,photo,tim,dat)VALUES('$name','$gender','$address','$mobile_number','$email','$adhar_card','$services','$charges','$photo','$timing','$date')";

$query_result=mysqli_query($con, $sql);
 	 if($query_result == false)
 {
 	die(mysqli_error($con));
 }
 $numrows = mysqli_num_rows($query_result);
if($numrows==1)
{
	header("location:join.html");

}
else
{
	header("location:join.html");

	exit;
}
?>
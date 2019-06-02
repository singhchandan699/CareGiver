<?php
/***include database connection**************/
include('db/dbconnect.php');
/***retreiving value********/
$uid=$_POST['uid'];
$User_Name=$_POST['User_Name'];
$Numbe=$_POST['Numbe'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$update_query=mysqli_query($con,"UPDATE registration SET User_Name='$User_Name',Numbe='$Numbe',Email='$Email',Password='$Password' WHERE id=$uid");

if($update_query)
{
?>
	<script type="text/javascript">
		alert('User Details Updated successfully');
		window.location="user.php";
	</script>
<?php
}

else
{
?>
		<script type="text/javascript">
		alert('Update Failed! Please try again');
		window.location="update.php?uid=<?php echo $uid ?>";
	</script>
<?php
}
?>

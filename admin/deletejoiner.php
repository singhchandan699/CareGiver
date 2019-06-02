<?php
include('db/dbconnect.php');
echo $userid=$_GET['uid'];
$delete_query="DELETE FROM joinus WHERE ID=$userid";
$query_res=mysqli_query($con ,$delete_query);
if($query_res==1)
{
	?>
	<script type="text/javascript">alert("user deleted");
	window.location="join.php";
	</script>
	<?php
}

else
{
	?>
	<script type="text/javascript">alert("access denied");
	window.location="join.php";
	</script>
	<?php
}
?>
<?php
$conn=mysqli_connect("localhost","root","root") or die(mysqli_error());
	$sdb=mysqli_select_db($conn,"bupcdms") or die(mysqli_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysqli_query("select * from users where user_id='$status'");
	while($row=mysqli_fetch_object($select_status))
	{
		$st=$row->status;
	
	if($st=='0')
	{
		$status2=1;
	}
	else
	{
		$status2=0;
	}
	$update=mysqli_query("update users set status='$status2' where user_id='$status' ");
	if($update)
	{
		header("Location:raccount.php");
	}
	else
	{
		echo mysqli_error();
	}
	}
	?>
     
    <?php
}
?>
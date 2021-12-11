
<?php
 include "connection.php";

  if(isset($_POST['submit']))
{
	$user_id=$_POST['user_id'];
	$room_name = $_POST['room_name'];
	$no_of_bed = $_POST['no_of_bed'];
	$capacity = $_POST['capacity'];
	$availability = $_POST['availability'];
	

	$sql="UPDATE rooms
	SET room_name='$room_name',
	no_of_bed='$no_of_bed',
	capacity='$capacity',
	availability='$availability'
	WHERE user_id='$user_id';";


	if (mysqli_query($conn,$sql)) {
				header("Location: room_display_admin.php?notif= Saved");
				exit();
			}
			else{
				header("Location: room_display_admin.php?notif= not Saved");
				exit();
			}

}

?>
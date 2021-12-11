<?php
include("connection.php");  
 if(isset($_POST['submit']))

{
$room_name=$_POST['room_name'];
$no_of_bed=$_POST['number_of_bed'];
$capacity=$_POST['capacity'];

$sql="INSERT INTO rooms ( room_name,no_of_bed,capacity)VALUES('$room_name','$no_of_bed','$capacity');";

	if (mysqli_query($conn,$sql)) {
				header("Location: new_room_form.php?notif= Saved");
				exit();
			}
			else{
				header("Location: new_room_form.php?notif= not Saved");
				exit();
			}


}
?>
			
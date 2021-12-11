
<?php
 include "connection.php";

  if(isset($_POST['submit']))
{
	$user_id=$_POST['user_id'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$stud_id = $_POST['stud_id'];
	$phone_no=$_POST['phone_no'];
	$sex = $_POST['sex'];
	$address = $_POST['address'];
	$batch = $_POST['batch'];
	$faculty = $_POST['faculty'];
	$course=$_POST['course'];
	$block = $_POST['block'];
	$room_no = $_POST['room_no'];
	
	

	$sql="UPDATE students
	SET fname='$fname',
	mname='$mname',
	lname='$lname',
	stud_id='$stud_id',
	phone_no='$phone_no',
	sex='$sex',
	address='$address',
	mname='$mname',
	batch='$batch',
	faculty='$faculty',
	course='$course',
	block='$block',
	room_no='$room_no'
    WHERE user_id='$user_id';";


	if (mysqli_query($conn,$sql)) {
				header("Location: view_my_info.php?notif= Saved");
				exit();
			}
			else{
				header("Location: view_my_info.php?notif= not Saved");
				exit();
			}

}

?>
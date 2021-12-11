 <?php
 include "connection.php";

  if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$client_type = $_POST['client'];
	$email = $_POST['email'];
	$mobile_no = $_POST['mobile_no'];
	$event = $_POST['event'];
	$reservation_date = $_POST['reservation_date'];
	$check_in = $_POST['check_in'];
	$check_out = $_POST['check_out'];

	$sql="INSERT INTO book (name,client_type,email,mobile_no,event,reservation_date,check_in,check_out) VALUES ('$name','$client_type','$email','$mobile_no','$event','$reservation_date','$check_in','$check_out');";

	if (mysqli_query($conn,$sql)) {
				header("Location: reservationform.php?notif=1");

				exit();
			}
			else{
				header("Location: reservationform.php?notif=2");
				exit();
			}

}

?>
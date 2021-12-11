 <?php

if ( isset( $_POST['submit'] ) )
{

$stud_id = $_POST['stud_id'];
$fullname = $_POST['fullname'];
$department = $_POST['department'];
$date_sent = $_POST['date_sent'];  
$receipt=$_FILES['userfile'];
$folder='upload/';



if (move_uploaded_file($receipt['tmp_name'], $folder.$receipt['name'])) {
	
$receipt1=$receipt['name'];

            $sql="INSERT INTO payment(stud_id,fullname,department,date_sent,receipt) values ('$stud_id','$fullname','$department','$date_sent','$receipt1')";

			if (mysqli_query($conn,$sql)) {
				header("Location: occupants_payment.php?notif= UPloaded");
				exit();
			}
			else{
				header("Location: occupants_payment.php?notif= notUPloaded");
				exit();
			}
	  }   
}

			?>
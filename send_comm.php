<?php
 include "connection.php";


 if(isset($_POST['submit']))
 
{

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$comment=$_POST['comment'];


$sql="INSERT INTO comment (user_id, fullname,email,comment)VALUES('$fullname','$email','$comment');";


if (mysqli_query($conn,$sql)) {
				header("Location: send_comment.php?notif=1");
				exit();
			}
			else{
				header("Location: send_comment.php?notif=2");
				exit();
			}

}

?> 
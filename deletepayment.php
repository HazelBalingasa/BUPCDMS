
<?php 

include "connection.php";

if (isset($_POST['delete'])) {
  $user_id=$_POST['user_id'];
   
   $sql="DELETE FROM payment where user_id='$user_id';";

   if(mysqli_query($conn, $sql)) {
     header("Location: payment.php?notif=Deleted");
     exit();
   }
   else{
     header("Location: payment.php?notif=Notdeleted");
     exit();
   }
 } 
 ?> 
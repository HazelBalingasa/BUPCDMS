
<?php 

include "connection.php";

if (isset($_POST['delete'])) {
  $user_id=$_POST['user_id'];
   
   $sql="DELETE FROM book where user_id='$user_id';";

   if(mysqli_query($conn, $sql)) {
     header("Location: reserved.php?notif=Deleted");
     exit();
   }
   else{
     header("Location: reserved.php?notif=Notdeleted");
     exit();
   }
 } 
 ?> 
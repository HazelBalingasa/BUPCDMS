
<?php 

include "connection.php";

if (isset($_POST['delete'])) {
  $user_id=$_POST['user_id'];
   
   $sql="DELETE FROM students where user_id='$user_id';";

   if(mysqli_query($conn, $sql)) {
     header("Location: view_occupants.php?notif=Deleted");
     exit();
   }
   else{
     header("Location: view_occupants.php?notif=Notdeleted");
     exit();
   }
 } 
 ?> 
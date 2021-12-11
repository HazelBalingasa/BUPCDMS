
<?php 

include "connection.php";

if (isset($_POST['delete'])) {
  $user_id=$_POST['user_id'];
   
   $sql="DELETE FROM comment where user_id='$user_id';";

   if(mysqli_query($conn, $sql)) {
     header("Location: viewcom.php?notif=Deleted");
     exit();
   }
   else{
     header("Location: viewcom.php?notif=Notdeleted");
     exit();
   }
 } 
 ?> 
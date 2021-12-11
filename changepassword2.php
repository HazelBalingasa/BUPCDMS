

 <?php
 session_start();
if (isset($_POST['changepassword'])){
  include ("connection.php");

  $oldpass=htmlentities($_POST['oldpass']);
   $newpass=htmlentities($_POST['newpass']);
   $cpass=htmlentities($_POST['cpass']);

   $sql_check="SELECT password FROM users WHERE password=? AND user_id= '{$_SESSION['user_id']}';";
   $stmt_chk=mysqli_stmt_init($conn);
  
   if(!mysqli_stmt_prepare($stmt_chk, $sql_check)){
    header("Location:changepassword.php?notif=1");
    exit();

   }
   mysqli_stmt_bind_param($stmt_chk, "s", $oldpass);
   mysqli_stmt_execute($stmt_chk);
   $chk_result= mysqli_stmt_get_result($stmt_chk);
   $arr=array();
   while ($row=mysqli_fetch_assoc($chk_result)){
    array_push($arr, $row);
   }
   if(empty($arr)) {
    header("Location:changepassword.php?notif=2");
    exit();

   }

   if ($newpass!==$cpass){
     header("Location:changepassword.php?notif=3");
    exit();

   }

   if (strlen($newpass)<6) {
     header("Location:changepassword.php?notif=4");
    exit();
   }


   $sql="UPDATE users
   SET password='$newpass', confirmpassword='$cpass'
   WHERE user_id= '{$_SESSION['user_id']}';";

   if(mysqli_query($conn, $sql)){
     header("Location:changepassword.php?notif=1");
    exit();
   }
   else{
     header("Location:changepassword.php?notif=2");
    exit();
   } 
}
?>



<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['user_id'];

$result=mysqli_query($conn,"select * from students where user_id='$user_id'")or die(mysql_error);
$row=mysqli_fetch_array($result);
$FirstName=$row['fname'];
$lname=$row['lname'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Bicol University Polangui Campus Dormstel Management System</title>
<link rel="icon" type="image/png" href="img/bupcicon.png"/>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<tr>
<td width="600px"></td>
<td><?php 
echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.'<font face="times new roman" color="white" size="3">'.$FirstName."&nbsp;".$lname." ".'</font>';?></td>
<td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
</tr>
<tr>
<td width="750px" colspan="3" height="100px">
<p><a href="admin.php"><img src="img/logo.png" align="left" width="200px" height="120px"></a>
<img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/occupant.png" align="center" width="490px" height="120px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="occupant.php">Home</a></li>
         <li><a href="send_comment.php">Send Comment</a></li>
         </ul>
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<!--Slide shows-->
<!--End of Slide shows-->
<table align="center" id="insides" width="1400px">
<tr>
<!--Sub menus-->
<td width="25%" height="400px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="350px" height="25px" bgcolor="green"><font face="arial" color="white" size="2">BUPC-DMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/Dorm.jpeg" width="280px" height="200px"></center></td>
</tr>
</table>
<table>
<tr>
<th align="center" width="450px" height="25px" bgcolor="green"><font face="arial" color="white" size="2">Manage Record</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="view_my_info.php">Personal Info</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="occupants_payment.php">Dormstel Payment</a></td>
</tr>
</table>
<br>
<br>
<table border="0">
<tr>
<th width="350px" bgcolor="green" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>

<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="changepassword_occu.php">Change Password</a></td>
</tr>
</table>
<br>
<br>
</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>

<div style="width:420px; height:270px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="changepassword_occu.php" onsubmit="return validateForm()">
 <div style="background-color: green ;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Change Password</font></strong></div>



 <?php
if (isset($_POST['changepassword'])){
  include ("connection.php");

  $oldpass=htmlentities($_POST['oldpass']);
   $newpass=htmlentities($_POST['newpass']);
   $cpass=htmlentities($_POST['cpass']);

   $sql_check="SELECT Password FROM students WHERE Password=? AND user_id= '{$_SESSION['user_id']}';";
   $stmt_chk=mysqli_stmt_init($conn);
  
   if(!mysqli_stmt_prepare($stmt_chk, $sql_check)){
    header("Location:changepassword_occu.php?notif=1");
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
    header("Location:changepassword_occu.php?notif=2");
    exit();

   }

   if ($newpass!==$cpass){
     header("Location:changepassword_occu.php?notif=3");
    exit();

   }

   if (strlen($newpass)<6) {
     header("Location:changepassword_occu.php?notif=4");
    exit();
   }


   $sql="UPDATE students
   SET Password='$newpass', ConfirmPassword='$cpass'
   WHERE user_id= '{$_SESSION['user_id']}';";

   if(mysqli_query($conn, $sql)){
     header("Location:changepassword_occu.php?notif=1");
    exit();
   }
   else{
     header("Location:changepassword_occu.php?notif=2");
    exit();
   } 
}
?>



  <table width="350" align="center">

 

  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
</div></td>
  </tr>  
  <br><br><br>
  <?php
 if(isset($_GET['notif'])) {
  switch ($_GET['notif']){
    case 1;
    echo "<p class='success'>PASSWORD SUCCESSFULLY CHANGED!</p>";
    break;
    case 2;
    echo "<p class='danger'>NOT SAVED!</p>";
    break;
  }
 }


 ?>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Old Password:</td>
		 <td><input type="password" name="oldpass" required x-moz-errormessage="Enter Old password" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> New Password:</td>
		 <td><input type="password" name="newpass" required x-moz-errormessage="Enter New Password" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Confirm Password:</td>
		 <td><input type="password" name="cpass" required x-moz-errormessage="Re-type your Password" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="changepassword" value="Change Password" class="button_example"/></td>
  </tr>
</table> 
  </form>




</td> 
</tr>
</table>
<!--End Body of section-->
</table>
<!--Footer-->

<div id="sample">
      <footer>
	  <br>
	  <div align="right">
<a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy 2021 Bicol University Polangui Campus. All rights reserved.</font></p>
		<br><br>
	

      </footer>
</div>

<!--End of Footer-->
</body>
</html>

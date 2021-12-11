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

$result=mysqli_query($conn,"select * from users where user_id='$user_id'")or die(mysql_error);
$row=mysqli_fetch_array($result);
$FirstName=$row['FNAME'];
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
<img src="img/admin.png" align="center" width="490px" height="120px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="admin.php">Home</a></li>
         <li><a href="viewcom.php">View Comment</a></li>
         </ul>
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->


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
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstudent.php">View Student</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="view_occupants.php">Display All Occupants</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="room_display_admin.php">View Room</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="no_occupant.php">Number of Occupants Per Room</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="payment.php">View Payment Receipts</a></td>
</tr>

<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="new_room_form.php">Add Room</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="reserved.php">Reservation</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href=" reservpayment_display.php">Reservation Payment</a></td>
</tr>

</table>
<br>
<br>
<table border="0">
<tr>
<th width="300px" bgcolor="green" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="create_acc.php">Create Account</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="coa.php">Create Occupants Account</a></td>
</tr>

<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="changepassword.php">Change Password</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="greporta.php">Generate Report</a></td>
</tr>
</table>
<br>
<br>
</td>


<td valign="top">
<br>
<br>

	
        <div style="width:420px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="save" method="POST" action="new_room_form2.php" onsubmit="return validateForm()"> 
  <div style="background-color:green;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Add Room</font></strong></div>
 <br>
 <br>
 <br>
 </div>
  <table width="286" valign="top" align="center" border="0">
  
          <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Room Name:</td><td>
		   <input type="room_name"   name="room_name"   required x-moz-errormessage="Enter room name" ></td>
	     </tr>


		 <tr>
	       <td class='para1_text'><font color="red">*</font>Number of Bed:</td><td><input type="number_of_bed" name="number_of_bed" required x-moz-errormessage="Enter number of bed" ></td>
	     </tr>

		 
		  <tr>
	       <td class='para1_text'><font color="red">*</font>Capacity:</td><td><input type="capacity" name="capacity" required x-moz-errormessage="Enter capacity" ></td>
	     </tr>

</tr>	
 <tr>
    <td>&nbsp;</td>
	<br>
    <td ><button type="submit" name="submit" class="button_example"> Save</button></td>
   
  </tr>
</table> 
  </form>


       

</body>
</html>





 

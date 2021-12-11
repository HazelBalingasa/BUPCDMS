
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
$middleName=$row['mNAME'];
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
<td>
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
<th width="340px" bgcolor="green" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
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

 <table align="center" style="border-radius:1px;border:1px solid green;box-shadow:5px 5px 10px black;" height="300px" width="700px">		


<tr>
<th bgcolor='gray'><font color='white'><font size="3px">DORMSTEL PAYMENT</font></font></th>
<th bgcolor='gray'><font color='white'></th>
</tr>
<tr>
<th bgcolor='green'><font color='white'><font size="2px">Month</font></th>
<th bgcolor='green'><font color='white'><font size="2px">Total of Occupants Paid</font></th>
</tr>


	<?php 
$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'January';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>January</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");

  $sql="SELECT  count(*)
	FROM payment
	WHERE month = 'February';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>February</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'March';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>March</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'April';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>April</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'May';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>May</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'June';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>June</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'July';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>July</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'August';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>August</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'September';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>September</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'October';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>October</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'November';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>November</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM payment
	WHERE month = 'December';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>December</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	?>
</table>



<br><br>

 <table align="center" style="border-radius:1px;border:1px solid green;box-shadow:5px 5px 10px black;" height="300px" width="700px">		
	
<tr>
<th bgcolor='gray'><font color='white'><font size="3px">FUNCTION HALL RESERVATION PAYMENT</font></font></th>
<th bgcolor='gray'><font color='white'></th>
</tr>
<tr>
<th bgcolor='green'><font color='white'><font size="2px">Month</font></th>
<th bgcolor='green'><font color='white'><font size="2px">Total of Clients Paid</font></th>
</tr>


	<?php 
$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'January';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>January</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");

  $sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'February';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>February</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'March';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>March</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'April';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>April</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'May';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>May</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'June';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>June</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'July';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>July</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'August';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>August</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'September';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>September</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'October';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>October</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'November';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>November</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	$sql="SELECT  count(*)
	FROM reservpayment
	WHERE month = 'December';";
	
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
 echo ("<tr>");
  echo ("<td>December</td>");
  echo ("<td>" . $row[0]. "</td>");
  echo ("</tr>");


	?>


</table>
</body>
</html>
				  		

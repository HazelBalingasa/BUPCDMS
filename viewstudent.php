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
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href=" reservation_payment.php">Reservation Payment</a></td>
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
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>

  <table align="center" style="border-radius:5px;border:1px solid green;box-shadow:1px 1px 10px black;" height="200px">
			<tr>
				<td>
						<form action="viewstudent.php" onsubmit='return formValidator()' method='POST'>
						<table>
							<tr>
								<td><p><font size="4.5px">Enter Student ID No:</font></p></td>
								<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." required x-moz-errormessage="Please enter the student id No"/></td>
								<td><input type="submit" value="Search" name="search" style="cursor:pointer;" class="button_example"/></td>
							</tr>
						</table>
					</form>
					<?php
					if(isset($_POST['search']))
 {
					$idno=$_POST['searchs'];
					$sql= "SELECT * FROM students where stud_id='$idno'";
					$result=mysqli_query($conn,$sql);
					$count=mysqli_num_rows($result);
					if($count<1)
					{
					echo('<font color="red">This ID Number is not found</font>');
					echo'<meta content="5;viewstudent.php" http-equiv="refresh" />';
					}
					else
					{
					echo"<center>";
					echo"<br><br><br><br>";
echo "<table style='width:620px;height:160px;border-radius:10px;border-radius:10px;border:1px solid green' align='center'>
<tr>
<th bgcolor='green'><font color='white'>Name</th>
<th bgcolor='green'><font color='white'>ID</th>
<th bgcolor='green'><font color='white'>Sex</th>
<th bgcolor='green'><font color='white'>Address</th>
<th bgcolor='green'><font color='white'>Batch</th>
<th bgcolor='green'><font color='white'>Department</th>
<th bgcolor='green'><font color='white'>Course</th>
<th bgcolor='green'><font color='white'>Block</th>
<th bgcolor='green'><font color='white'>Room</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  print ("<tr>");
  print ("<td>" . $row['fname'] .'&nbsp;'.$row['mname']. "</td>");
  print ("<td>" . $row['stud_id']. "</td>");
  print ("<td>" . $row['sex']. "</td>");
  print ("<td>" . $row['address']. "</td>");
  print ("<td>" . $row['batch']. "</td>"); 
  print ("<td>" . $row['faculty']. "</td>"); 
  print ("<td>" . $row['course']. "</td>"); 
  print ("<td>" . $row['block']. "</td>");
  print ("<td>" . $row['room_no']. "</td>");  
  print ("</tr>");
  }
print( "</table>");
echo"</center>";
}
}
mysqli_close($conn);
?>

</td></tr></table>                 


</td>
</tr>
</table>
</table>



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

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
</head>
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
<p><a href="occupant.php"><img src="img/logo.png" align="left" width="200px" height="120px"></a>
<img src="img/occupant.png" align="center" width="490px" height="120px"></p>
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
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="viewstudent2.php">Personal Info</a></td>
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
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="changepassword.php">Change Password</a></td>
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

  <table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
			<tr>
				<td>
						<form action="viewstudent.php" onsubmit='return formValidator()' method='POST'>
						<table>
							<tr>
								<td class="search">Enter Student ID NO:</td>
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
echo "<table style='width:450px;height:50px;border-radius:10px;border-radius:10px;border:1px solid #336699' align='center'>
<tr>
<th bgcolor='#336699'><font color='white'>Name</th>
<th bgcolor='#336699'><font color='white'>ID</th>
<th bgcolor='#336699'><font color='white'>Sex</th>
<th bgcolor='#336699'><font color='white'>Phone Number</th>
<th bgcolor='#336699'><font color='white'>Address</th>
<th bgcolor='#336699'><font color='white'>Batch</th>
<th bgcolor='#336699'><font color='white'>Faculty</th>
<th bgcolor='#336699'><font color='white'>Course</th>
<th bgcolor='#336699'><font color='white'>Block</th>
<th bgcolor='#336699'><font color='white'>Room</th>

</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo ("<tr>");
 echo ("<td>" . $row['fname'] .'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname']. "</td>");
  echo ("<td>" . $row['stud_id']. "</td>");
  echo ("<td>" . $row['sex']. "</td>");
  echo ("<td>" . $row['phone_no']. "</td>");
  echo ("<td>" . $row['address']. "</td>"); 
  echo ("<td>" . $row['batch']. "</td>"); 
  echo ("<td>" . $row['faculty']. "</td>"); 
  echo ("<td>" . $row['course']. "</td>"); 
  echo ("<td>" . $row['block']. "</td>");
  echo ("<td>" . $row['room_no']. "</td>");  
  echo ("</tr>");
  }




print( "</table>");
echo"</center>";


}
}
?>

<div class="link" color="red" >
  <td>
   <a href="edit_occupant2.php?student=<?php echo $row['user_id']; ?>"   name="edit" type="button">EDIT</a>
    
  </td>
</div>





</td></tr></table>                 


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

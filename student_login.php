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
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<tr>
<td width="600px"></td>
<td><?php 
echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.'<font face="times new roman" color="white" size="3">'.$FirstName."&nbsp;".$middleName." ".'</font>';?></td>
<td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
</tr>
<tr>
<td width="750px" colspan="3" height="100px">
<p><a href="student_login.php"><img src="img/logo.png" align="left" width="200px" height="120px"></a>
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
<th align="center" width="250px" height="25px" bgcolor="green"><font face="arial" color="white" size="2">BUPC-DMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/Dorm.jpeg" width="280px" height="200px"></center></td>
</tr>
</table>
<table>



</table>
<br>
<br>
<table border="0">

<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="pmchangepassword.php">Change Password</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="ocuupants_payment.php">Dormstel Payment</a></td>
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
<font face="Arial" size="2px">Our Home page......</font>
                   


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
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy Bicol University Polangui Campus. All rights reserved.</font></p>
		<br><br>
	

      </footer>
</div>

<!--End of Footer-->
</body>
</html>

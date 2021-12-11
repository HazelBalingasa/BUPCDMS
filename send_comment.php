<?php
	include("connection.php");  
 session_start();
 ?>

<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUPC Dormstel Management System</title>
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

</head>

<body>




<td valign="top">
<br>
<br>



	
     
 
<div style="width:420px; height:380px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="save" method="POST" action="send_comment.php" onsubmit="return validateForm()"> 
  	<div style="background-color:green;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Send Comment</font></strong></div>
 <br>
 <br>
  <table width="286" valign="top" align="center" border="0">
   <table width="480px" valign="top" align="center" border="0">

 <?php
 include "connection.php";
if(isset($_POST['submit']))
 {
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$sql="INSERT INTO comment (fullname,email,comment)VALUES('$fullname','$email','$comment');";

if (!mysqli_query($conn,$sql))
  {
   echo'<p class="wrong">Connection Failed</p>';
  
  }
  else
  {
echo' <p class="success">Comment Submitted</p>';                                
		   echo' <meta content="6;send_comment.php" http-equiv="refresh" />';	
}
mysqli_close($conn);
}
?>    
<br>
<br>
<br>
<tr>
	       <td class='para1_text' width="160px"><font size="3px">Your Full Name:</font></td>
		   <td><input type="text" name="fullname" id="fullname" required x-moz-errormessage="Enter Your Full Name" ></td>
	      </tr>
		 <tr>
	       <td class='para1_text'><font size="3px">Email Address:</font></td>
		   <td><input type="text" name="email" id="email" required x-moz-errormessage="Enter password"></td>
	     </tr>
  <tr>
	       <td class='para1_text'><font size="3px">Message:</font></td>
		   <td><textarea rows="6" cols="30" align="center" name="comment" id="comment" placeholder='Write your comment here' required x-moz-errormessage="Enter Message"></textarea></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
	<td ><button type="submit" name="submit" class="button_example"> Save</button></td>
</div>
    
  </tr>
</table> 
  </form>			




</body>
</html>

	   


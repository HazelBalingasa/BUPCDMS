<?php   
 session_start();
 include("connection.php");
  //Reset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
 ?>


<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forget Password...</title>
<link rel="icon" type="image/png" href="img/bupcicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<tr>
<td width="100%"></td>

</tr>
<tr>
<td width="700px" colspan="3" height="120px">
<p><a href="index.php"><img src="img/logo.png" align="left" width="200px" height="120px"></a>
<img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/bupcdms.PNG" align="center" width="470px" height="120px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3" width="750px">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About Us</a></li>
         <li><a href="contact.php">Contact Us</a></li>
     <li><a href="viewdorm.php">View Dorm</a></li>
     <li><a href="login.php">Admin Login</a></li>
     <li><a href="occupants_login.php">Occupants Login</a></li>
     <li><a href="reservation.php">Function Hall</a></li>
     <li><a href="room_display.php">Available Rooms</a></li>
     

         </ul>
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<table align="center" id="insides" width="1400px">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
<table  >
<tr>
<th align="center" width="350px" height="25px" bgcolor="green"><font face="arial" color="white" size="2">BUPC-DMS</font></th>
</tr>
<tr>
<td><br><br><center><img src="slideshow/images/Dorm.jpeg" width="280px" height="200px"></center></td>
</tr>
</table>
<br>
<br>
<br>
<table border="0">
<tr>
<th width="350px" bgcolor="green" height="25px"><font face="arial" color="white" size="2">Related Links</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="https://www.facebook.com/bupolangui/">BUPC Site</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="site.php">Site Map</a></td>
</tr>

</table>
<br>
<br>
<br>


</td>
<!--End Of Sub menus-->

<!--Body section-->
<td valign="top">
<br>
<br>
<center><h2>Did you forget your password?</h2></center>
<div style="width:420px; height:290px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="forget2.php" onsubmit="return validateForm()">
 <div style="background-color:green;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Forget Password</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="login.php" title="Close"><img src="img/close_icon.gif"></a></div>
 
 
 </div>
 <?php
 if(isset($_POST['forget']))
  {
   $fNAME=$_POST['fNAME'];
   $phone_no=$_POST['phone_no'];
    $username=$_POST['username'];
   $sql="SELECT * FROM users where fNAME='$fNAME' AND phone_no='$phone_no' AND username='$username' ;"; 
   $result_set=mysqli_query($conn,$sql,);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysqli_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysqli_fetch_array($result_set))
{
$fname=$row[0];
$password=$row[8];
echo"<p class='success'>"."Hi"."&nbsp; &nbsp;".$fname."&nbsp; &nbsp;"."your password is:".$password."</p>";
echo'<meta content="10;login.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="10;forget.php" http-equiv="refresh" />';
}
}

?>
  
  <table width="280px" align="center">  
          <br><br>
		  <tr>
	       <td class='para1_text' width="220px"></font> First Name:</td><td><input type="text" name="fNAME" required x-moz-errormessage="Enter Your First name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"></font> Phone Number:</td><td><input type="text" name="phone_no" required x-moz-errormessage="Enter Your Phone Number" ></td>
	     </tr>
		  <tr>
	       <td class='para1_text' width="220px"></font> Username:</td><td><input type="text" name="username" required x-moz-errormessage="Enter Your Username" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br><br><br>
    <td><input type="submit" name="forget" class="button_example" value="Submit" />&nbsp;&nbsp;<input class="button_example"type="reset" value="Clear" /></td>
  </tr>
</table> 
  </form>	 
  </div>
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

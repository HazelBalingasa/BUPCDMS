<?php
	include("connection.php");
	session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUPC-DMS-View Dorm</title>
<link rel="icon" type="image/png" href="img/bupcicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">
<!--Header-->
<tr>
<td width="200px" height="40px"></td>
</tr>
<tr>
<td width="700px" colspan="3" height="150px">
<p><a href="index.php"><img src="img/logo.png" align="left" width="200px" height="130px"></a>
<img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/bupcdms.PNG" align="center" width="470px" height="130px"></p>
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
		  <li><a href="occupant.php">Occupants Login</a></li>
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
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="https://www.facebook.com/bupolangui/">BUPC Facebook Site</a></td>
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
<br>
  <form id="form1" name="login" method="POST" action="viewdorm.php" onsubmit="return validateForm()">
  	
<p style="font-size:14px;color:brown;" >If you already have an account, You can see your Course,Block, and Room number here by entering your id.</p>
   <table width="450px" valign="top" align="center">
  
  <tr>

	       <td class='para1_text' width="220px"><p><font size="3px">ID No.</font></p></td><td><input type="text" name="idno" required x-moz-errormessage="Enter Your ID No." ></td>
	     
    
	
    <td><input type="submit" name="submitlogin" class="button_example" value="Submit" /></td>
  </tr>
</table>
  </form>
<!--Php Script-->  
	 <?php	
	if (isset($_POST['submitlogin'])){ 
	$idno=$_POST['idno'];
			$view=mysqli_query($conn,"select * from students where stud_id='$idno'");
					$rowCheck = mysqli_num_rows($view);
if($rowCheck<1)
{
echo'<p class="wrong">The ID no is not found</p>';
echo' <meta content="5;viewdorm.php" http-equiv="refresh" />';
}
else
{
			while($row = mysqli_fetch_array($view))
            {
			$fname=$row['fname'];
			$mname=$row['mname'];
			$lname=$row['lname'];
			$course=$row['course'];
            $dorm=$row['room_no'];
            $block=$row['block'];
            }
			echo"<table align='center' style='border-radius:8px;border:1px solid green;' width='270px' height='140px'>";
			echo"<tr>";
			echo"<th colspan='2' bgcolor='green'><font color='white' size='2'>".$fname."&nbsp;".$mname."&nbsp;".$lname."</font><a href='viewdorm.php'><img align='right' src='img/close_icon.gif'></a></th>";
			echo"</tr><tr>";
			echo"<td><font face='Times New Roman' size='3' color='black'>Course:</td><td>".$course.'</td></tr>';echo"<td><font face='Times New Roman' size='3' color='black'>Block:</td><td>".$block.'</td></tr>';
			echo"<td><font face='Times New Roman' size='3' color='black'>Room No:</td><td>".$dorm.'</td></tr>';echo"</font></table>";
	}
	}
?>



<br><br></td>
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

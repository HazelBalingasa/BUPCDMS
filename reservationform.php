<?php
include('connection.php');


?>


<!DOCTYPE html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUPC Dormstel Management System</title>
<link rel="icon" type="image/png" href="img/bupcicon.png"/>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

</head>
<body>
<table  border="0" align="center">
	
<!--Header-->

<td>
<td id="logoutlink" align="center"><a href="login.php" id="log">Login</a></td>
</tr>
<tr>
<td>
<p><a href="index.php"><img src="img/logo.png" align="left" width="200px" height="130px"></a>
<img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/functionhall.PNG" align="center" width="470px" height="130px"></p>
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
         
         </ul>
         </div>
    </div>

</td>

</tr>
<table align="center" id="insides" width="1400px">
<tr>
<!--Sub menus-->
<td width="25%" height="500px" valign="top" id="insides">
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
<th align="center" width="450px" height="25px" bgcolor="green"><font face="arial" color="white" size="2">Reservation</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="aboutthehall.php">About the Hall</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="reservationform.php">Reservation Form</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="reservation_payment.php">Reservation Payment</a></td>
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
<font face="Arial" size="2px">Function Hall Page</font>

  
<div style="width:420px; height:420px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">



 


 <form id="form1" name="save" method="POST" action="reserve.php" onsubmit="return validateForm()"> 
  	<div style="background-color:green;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Reservation Form</font></strong></div>

 <table width="426px" align="center">
 
 <br>
 <br>


 <?php
 if(isset($_GET['notif'])) {
 	switch ($_GET['notif']){
 		case 1;
 		echo "<p class='success'>Saved!, PLEASE WAIT FOR THE EMAIL OF PBAO IF YOUR RESERVATION IS APPROVED</p>";
 		break;
 		case 2;
 		echo "<p class='danger'>Not Saved</p>";
 		break;
 	}
 }


 ?>
		
	<td></td>
	<td><font color="red">*</font>&nbsp;<font size="1">Required.</font></td>
	</tr>

	 
	
         <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Full Name:</td><td><input type="text" name="name" id="name" required x-moz-errormessage="Enter Your Full name" ></td>
	     </tr>
	    

         <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Client Type:</td>
	       <td><select name="client" required maxlength="15">
	       	      <option></option>
                  <option value='Faculty '>Faculty</option>
                  <option value=' Student'>Student</option>
                   <option value='Outside Client'>Outside Client</option>
              
              </select>
                </td>
	     </tr>
	    


	      <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Email:</td><td><input type="text" name="email" id="email" required x-moz-errormessage="Enter Your  Email" ></td>
	     
		 </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Mobile no:</td><td><input type="text" name="mobile_no" id="mobile_no" required x-moz-errormessage="Enter Your Mobile no." ></td>
	     
		 </tr> 

		  <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Event:</td><td><input type="text" name="event" id="event" required x-moz-errormessage="Enter the event." ></td>
	     
		 </tr
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Reservation Date:</td><td><input type="text" name="reservation_date" id="reservation_date" required x-moz-errormessage="Enter the date." ></td>
	     
		 </tr
		  
		  
		  <tr>

	       <td class='para1_text' width="220px"><font color="red">*</font>Check in time:</td><td><input type="text" name="check_in" id="check_in" required x-moz-errormessage="Enter check in time." ></td>
	     
		 </tr

		  <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font>Check out time:</td><td><input type="text" name="check_out" id="check_out" required x-moz-errormessage="Enter check out time." ></td>
	     
		 </tr

		 <tr>
	<br><br><br>
	
	<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="condition" value="checkbox" style="width: 13px;" required x-moz-errormessage="Please check on agree" /> I agree the <a rel="facebox" href="terms_condition.php">terms and condition</a> of this site</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
  <td ><button type="submit" name="submit" class="button_example"> Save</button></td>
  </tr>

  </form>


</body>
</html>



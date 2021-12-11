<?php
	include("connection.php");  

 ?>


<!DOCTYPE html >
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
<tr>

<td width="200px" height="40px"></td>
<td>
</tr>

<td width="1px" colspan="3" height="1px">

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
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href=" reservation_payment.php">Reservation Payment</a></td>
</tr>

</table>
</td>

<td valign="top">
<br>
<br>
<td><br><br><center><img src="img/hall.jpg" width="1045px" height="500px"></center></td>

</td>
  


<!--Form Validation-->


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
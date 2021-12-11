
<?php
	include("connection.php");  
 session_start();
 ?>

<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUPC Dormstel Management System</title>

<link rel="icon" type="image/png" href="img/bupcicon.png"/>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

</head>

<body>
  
<table  border="0" align="center" width="300px">
<!--Header-->
<tr>
<td width="200px" height="40px"></td>
</tr>
<tr>

<td width="1px" colspan="3" height="1px">

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
<td valign="top">
<br>


  <table align="center" style="border-radius:5px;border:1px solid #336699;box-shadow:1px 1px 10px black;" height="250px" width="700px">
			

<tr>
<th bgcolor='green'><font color='white'>Room Name</th>
<th bgcolor='green'><font color='white'>Number of Bed</th>
<th bgcolor='green'><font color='white'>Capacity</th>
<th bgcolor='green'><font color='white'>Availability</th>

</tr>
<?php
$sql="SELECT room_name, no_of_bed, capacity, availability
            FROM rooms;";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
while($row =$result-> fetch_assoc())
  {
  echo ("<tr>");
  echo ("<td>" . $row['room_name']. "</td>");
  echo ("<td>" . $row['no_of_bed']. "</td>");
  echo ("<td>" . $row['capacity']. "</td>");
  echo ("<td>" . $row['availability']. "</td>"); 
   
  echo ("</tr>");
  }

            }
            



echo( "</table>");
echo"</center>";


mysqli_close($conn);
?>

</td></tr></table>                 


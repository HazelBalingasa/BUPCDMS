
<?php
  include("connection.php");  
 session_start();
 ?>

<!DOCTYPE html>
<html>

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


<td valign="top">
<br>
<br>
	
<div style="width:460px; height:200px;margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:1px; -moz-border-radius:1px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:green;">
 
  <table width="500px" valign="top" align="center" border="0">
  
 
  <table width="500px" align="center">
	

<?php
include "connection.php";


$user_id=$_GET['room'];


$sql="SELECT *
            FROM rooms where user_id='$user_id';";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
while($row =$result-> fetch_assoc())
  {
    ?>
  <form id="form1" name="save" method="POST" action="update_room.php"> 

 <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">

<div class="row " align="center">
  <label for="input" class=" ">Room Name</label>
  <div class=" ">
    <input type="text" name="room_name" class="form-control" id="input" value="<?php echo $row['room_name'];?>">
  </div>

  <div class="row ">
  <label for="input" class=" ">Number of bed</label>
  <div class=" ">
    <input type="text" name="no_of_bed" class="form-control" id="input" value="<?php echo $row['no_of_bed'];?>">
  </div>

   <div class="row ">
  <label for="input" class=" ">Capacity</label>
  <div class=" ">
    <input type="text" name="capacity" class="form-control" id="input" value="<?php echo $row['capacity'];?>">
  </div>

   <div class="row ">
  <label for="input" class=" ">Availability</label>
  <div class=" ">
    <input type="text" name="availability" class="form-control" id="input" value="<?php echo $row['availability'];?>">
  </div>

  <tr>
  <td>&nbsp;</td>

    <td ><button type="submit" name="submit" class="button_example"> Save</button></td>
  </tr>


</form>

    <?php
  
}
}

?>

	
</div>

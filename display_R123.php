
<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
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
</table>
<br>
<br>
<table border="0">
<tr>
<th width="340px" bgcolor="green" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="create_acc.php">Create Account</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="cua.php">Create User Account</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="raccount.php">Edit User Account</a></td>
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
<p><font size="2px">ROOM 1</p>
<br>
<br>


 <table align="center" style="border-radius:5px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
  <tr>
<th bgcolor='green'><font color='white'>First Name</th>
<th bgcolor='green'><font color='white'>Middle Name</th>
<th bgcolor='green'><font color='white'>Last Name</th>
<th bgcolor='green'><font color='white'>Student ID</th>
<th bgcolor='green'><font color='white'>Phone Number</th>
<th bgcolor='green'><font color='white'>Sex</th>
<th bgcolor='green'><font color='white'>Address</th>
<th bgcolor='green'><font color='white'>Batch</th>
<th bgcolor='green'><font color='white'>Faculty</th>
<th bgcolor='green'><font color='white'>Course</th>
<th bgcolor='green'><font color='white'>Block</th>
<th bgcolor='green'><font color='white'>Room Number</th>
<th bgcolor='green'><font color='white'>Action</th>
<th bgcolor='green'><font color='white'>Action</th>
</tr>
      



<?php
$sql="SELECT user_id, fname, mname, lname, stud_id, phone_no, sex, address, batch, faculty, course, block, room_no
            FROM students
            WHERE room_no = 'Room 1';";
	
            $result = $conn->query($sql);
            if($result->num_rows > 0){
while($row =$result-> fetch_assoc())
  {
    
  echo ("<tr>");
  echo ("<td>" . $row['fname']. "</td>");
  echo ("<td>" . $row['mname']. "</td>");
  echo ("<td>" . $row['lname']. "</td>");
  echo ("<td>" . $row['stud_id']. "</td>"); 
  echo ("<td>" . $row['phone_no']. "</td>");
  echo ("<td>" . $row['sex']. "</td>");
  echo ("<td>" . $row['address']. "</td>");
  echo ("<td>" . $row['batch']. "</td>"); 
  echo ("<td>" . $row['faculty']. "</td>");
  echo ("<td>" . $row['course']. "</td>");
  echo ("<td>" . $row['block']. "</td>");
  echo ("<td>" . $row['room_no']. "</td>");

  ?>

  <td>
   
    <a href="edit_occupant.php?student=<?php echo $row['user_id']; ?>"   name="edit" type="button">EDIT</a>
    </form>
  </td>


  <td>
    <form action="deletestud.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <button name="delete" type="submit">DELETE</button>
    </form>
  </td>

<?php
  echo ("</tr>");
  }

  }
            

echo( "</table>");
echo"</center>";

?>
 

<br><br>
<p><font size="2px">ROOM 2</p>

<br>
<br>



 <table align="center" style="border-radius:5px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
  <tr>
<th bgcolor='green'><font color='white'>First Name</th>
<th bgcolor='green'><font color='white'>Middle Name</th>
<th bgcolor='green'><font color='white'>Last Name</th>
<th bgcolor='green'><font color='white'>Student ID</th>
<th bgcolor='green'><font color='white'>Phone Number</th>
<th bgcolor='green'><font color='white'>Sex</th>
<th bgcolor='green'><font color='white'>Address</th>
<th bgcolor='green'><font color='white'>Batch</th>
<th bgcolor='green'><font color='white'>Faculty</th>
<th bgcolor='green'><font color='white'>Course</th>
<th bgcolor='green'><font color='white'>Block</th>
<th bgcolor='green'><font color='white'>Room Number</th>
<th bgcolor='green'><font color='white'>Action</th>
<th bgcolor='green'><font color='white'>Action</th>
</tr>
      



<?php
$sql="SELECT user_id, fname, mname, lname, stud_id, phone_no, sex, address, batch, faculty, course, block, room_no
            FROM students
            WHERE room_no = 'Room 2';";
	
            $result = $conn->query($sql);
            if($result->num_rows > 0){
while($row =$result-> fetch_assoc())
  {
    
  echo ("<tr>");
  echo ("<td>" . $row['fname']. "</td>");
  echo ("<td>" . $row['mname']. "</td>");
  echo ("<td>" . $row['lname']. "</td>");
  echo ("<td>" . $row['stud_id']. "</td>"); 
  echo ("<td>" . $row['phone_no']. "</td>");
  echo ("<td>" . $row['sex']. "</td>");
  echo ("<td>" . $row['address']. "</td>");
  echo ("<td>" . $row['batch']. "</td>"); 
  echo ("<td>" . $row['faculty']. "</td>");
  echo ("<td>" . $row['course']. "</td>");
  echo ("<td>" . $row['block']. "</td>");
  echo ("<td>" . $row['room_no']. "</td>");

  ?>

  <td>
   
    <a href="edit_occupant.php?student=<?php echo $row['user_id']; ?>"   name="edit" type="button">EDIT</a>
    </form>
  </td>


  <td>
    <form action="deletestud.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <button name="delete" type="submit">DELETE</button>
    </form>
  </td>

<?php
  echo ("</tr>");
  }

  }
            

echo( "</table>");
echo"</center>";

?>
 


<br><br>
<p><font size="2px">ROOM 3</p>

<br>
<br>



 <table align="center" style="border-radius:5px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
  <tr>
<th bgcolor='green'><font color='white'>First Name</th>
<th bgcolor='green'><font color='white'>Middle Name</th>
<th bgcolor='green'><font color='white'>Last Name</th>
<th bgcolor='green'><font color='white'>Student ID</th>
<th bgcolor='green'><font color='white'>Phone Number</th>
<th bgcolor='green'><font color='white'>Sex</th>
<th bgcolor='green'><font color='white'>Address</th>
<th bgcolor='green'><font color='white'>Batch</th>
<th bgcolor='green'><font color='white'>Faculty</th>
<th bgcolor='green'><font color='white'>Course</th>
<th bgcolor='green'><font color='white'>Block</th>
<th bgcolor='green'><font color='white'>Room Number</th>
<th bgcolor='green'><font color='white'>Action</th>
<th bgcolor='green'><font color='white'>Action</th>
</tr>
      



<?php
$sql="SELECT user_id, fname, mname, lname, stud_id, phone_no, sex, address, batch, faculty, course, block, room_no
            FROM students
            WHERE room_no = 'Room 3';";
	
            $result = $conn->query($sql);
            if($result->num_rows > 0){
while($row =$result-> fetch_assoc())
  {
    
  echo ("<tr>");
  echo ("<td>" . $row['fname']. "</td>");
  echo ("<td>" . $row['mname']. "</td>");
  echo ("<td>" . $row['lname']. "</td>");
  echo ("<td>" . $row['stud_id']. "</td>"); 
  echo ("<td>" . $row['phone_no']. "</td>");
  echo ("<td>" . $row['sex']. "</td>");
  echo ("<td>" . $row['address']. "</td>");
  echo ("<td>" . $row['batch']. "</td>"); 
  echo ("<td>" . $row['faculty']. "</td>");
  echo ("<td>" . $row['course']. "</td>");
  echo ("<td>" . $row['block']. "</td>");
  echo ("<td>" . $row['room_no']. "</td>");

  ?>

  <td>
   
    <a href="edit_occupant.php?student=<?php echo $row['user_id']; ?>"   name="edit" type="button">EDIT</a>
    </form>
  </td>


  <td>
    <form action="deletestud.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <button name="delete" type="submit">DELETE</button>
    </form>
  </td>

<?php
  echo ("</tr>");
  }

  }
            

echo( "</table>");
echo"</center>";

?>


<br><br>
<p><font size="2px">ROOM 4</p>

<br>
<br>



 <table align="center" style="border-radius:5px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
  <tr>
<th bgcolor='green'><font color='white'>First Name</th>
<th bgcolor='green'><font color='white'>Middle Name</th>
<th bgcolor='green'><font color='white'>Last Name</th>
<th bgcolor='green'><font color='white'>Student ID</th>
<th bgcolor='green'><font color='white'>Phone Number</th>
<th bgcolor='green'><font color='white'>Sex</th>
<th bgcolor='green'><font color='white'>Address</th>
<th bgcolor='green'><font color='white'>Batch</th>
<th bgcolor='green'><font color='white'>Faculty</th>
<th bgcolor='green'><font color='white'>Course</th>
<th bgcolor='green'><font color='white'>Block</th>
<th bgcolor='green'><font color='white'>Room Number</th>
<th bgcolor='green'><font color='white'>Action</th>
<th bgcolor='green'><font color='white'>Action</th>
</tr>
      



<?php
$sql="SELECT user_id, fname, mname, lname, stud_id, phone_no, sex, address, batch, faculty, course, block, room_no
            FROM students
            WHERE room_no = 'Room 4';";
	
            $result = $conn->query($sql);
            if($result->num_rows > 0){
while($row =$result-> fetch_assoc())
  {
    
  echo ("<tr>");
  echo ("<td>" . $row['fname']. "</td>");
  echo ("<td>" . $row['mname']. "</td>");
  echo ("<td>" . $row['lname']. "</td>");
  echo ("<td>" . $row['stud_id']. "</td>"); 
  echo ("<td>" . $row['phone_no']. "</td>");
  echo ("<td>" . $row['sex']. "</td>");
  echo ("<td>" . $row['address']. "</td>");
  echo ("<td>" . $row['batch']. "</td>"); 
  echo ("<td>" . $row['faculty']. "</td>");
  echo ("<td>" . $row['course']. "</td>");
  echo ("<td>" . $row['block']. "</td>");
  echo ("<td>" . $row['room_no']. "</td>");

  ?>

  <td>
   
    <a href="edit_occupant.php?student=<?php echo $row['user_id']; ?>"   name="edit" type="button">EDIT</a>
    </form>
  </td>


  <td>
    <form action="deletestud.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
    <button name="delete" type="submit">DELETE</button>
    </form>
  </td>

<?php
  echo ("</tr>");
  }

  }
            

echo( "</table>");
echo"</center>";

?>

</td></tr></table>  

              

</body>
</html>
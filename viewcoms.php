<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
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
<title>BUPC-DMS</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
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
       
         </ul>
         </div>
    </div>

</td>
</tr>

<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<font face="Arial" size="2px">View Comment......</font>
    
<?php


	$fname = $_POST['fname'];

			$sel=mysqli_query($conn,"SELECT * FROM comment");
			echo '<table style="width:500px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Names</th><th bgcolor="#336699" ><font color="white" size="2">Message</th><th bgcolor="#336699"><font color="white" size="2">Delete</th></tr>';
			
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br><br>";
			echo"<font face='times new roman' size='2px' color='red'>";
			echo'There are &nbsp;'.$intt.'&nbsp; new messages.';
			echo"</font>";
			echo"</script>";
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
			$ctrl = $row['fname'];
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['fname'] . "</td>");
	  print ("<td><font size='2'>" . $row['comment'] . "</td>");		
		print("<td align = 'center' width = '1'><a href = 'deletecomm.php?key=".$ctrl."'><img width='15px' height='15px' src = 'img/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>
		");
  print ("</tr>");
  }
print( "</table>");
			?>    	
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

<?php
		include("connection.php");
	session_start();	
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bicol University Polangui Campus Dormstel Management System</title>
<link rel="icon" type="image/png" href="img/bupcicon.PNG"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
</head>
<body>
<table  border="0" align="center" width="750px">
<tr>
<td width="700px" colspan="3" height="150px">
<p><a href="index.php"><img src="img/logo.png" align="left" width="200px" height="130px"></a>
<img style="border-radius:55px;box-shadow:1px 1px 12px black" src="img/bupcdms.PNG" align="center" width="470px" height="130px"></p>
</td>
</tr>

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
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">

	
<div style="width:600px; height:505px; margin:0 auto; position:relative; border:1px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10px; color:#000000;">

  <form id="form1" name="login" method="POST" action="create_acc2.php" onsubmit="return validateForm()"> 
  	<div style="background-color:green;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Create Account</font></strong></div>

 
  
  
 
  <table width="450px" align="center">
  	<?php
 if(isset($_POST['submit']))
 
{

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$stud_id=$_POST['stud_id'];
$phone_no=$_POST['phone_number'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$batch=$_POST['batch'];
$faculty=$_POST['faculty'];
$course=$_POST['course'];
$block=$_POST['block'];
$room_no=$_POST['room_no'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$ConfirmPassword=$_POST['ConfirmPassword'];
$Status="1";



if ($Password !==$ConfirmPassword) {
	 echo'  <p class="wrong">Your Password Does not match!!</p>';
	   echo'<meta content="3;create_acc2.php" />';
}
else{

$sql="INSERT INTO students (fname,mname,lname,stud_id,phone_no,sex,address,batch,faculty,course,block,room_no,Username ,Password,ConfirmPassword,Status)VALUES('$fname','$mname','$lname','$stud_id','$phone_no','$sex','$address','$batch','$faculty','$course','$block','$room_no','$Username','$Password','$ConfirmPassword','$Status');";



if (!mysqli_query($conn,$sql))
  {
   echo'<p class="wrong">Connection Failed</p>';
  
  }
  else
  {
echo' <p class="success"> Account is created successfully</p>';                                
		   echo' <meta content="6;create_acc2.php" http-equiv="refresh" />';	
}
mysqli_close($conn);
}


}

?>    
	
         <tr>
	       <td class='para1_text' width="220px"><font color="red"></font> First Name:</td><td><input type="text" name="fname" id="fname" required x-moz-errormessage="Enter Your First name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red"></font> Middle Name:</td><td><input type="text" name="mname" id="mname" required x-moz-errormessage="Enter Your Middle name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red"></font> Last Name:</td><td><input type="text" name="lname" id="lname" required x-moz-errormessage="Enter Your Last name" ></td>
	     </tr>
	      <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>ID:</td><td><input type="text" name="stud_id" id="stud_id" required x-moz-errormessage="Enter Your id" ></td>
	     </tr>
	      <tr>
	       <td class='para1_text' width="220px"><font color="red"></font> Phone Number:</td><td><input type="text" name="phone_number" id="phone_number" required x-moz-errormessage="Enter Your Batch" ></td>
		
		  <tr>
  
                <td class='para1_text' width="220px"><font color="red"></font> Sex:</td>
                <td><input type="radio"  name="sex" value="male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female</td>
              </tr>
               <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>Address:</td><td><input type="text" name="address" id="address" required x-moz-errormessage="Enter Your address" ></td>
	     </tr>
               <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>Batch:</td> <td><select name="batch" required maxlength="15">
	       	      <option></option>
                  <option value='1st year'>1st year</option>
                  <option value='2nd year'>2nd year</option>
                   <option value='3rd year'>3rd year</option>
                    <option value='4th year'>4th year</option>
                     <option value='5th year'>5th year</option>
              
              </select>
                </td>
	     </tr>
	      <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>Department:</td><td><select name="faculty" required maxlength="15">
	       	      <option></option>
                  <option value='Computer Studies Department'>Computer Studies Department</option>
                   <option value='Engineering Department'>Engineering Department</option>
                  <option value='Nursing Department'>Nursing Department</option>
                   <option value='Teacher Education Department'>Teacher Education Department</option>
                   <option value='Technology Department'>Technology Department</option>
              
              </select>
                </td>
	     </tr>
	      <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>Course:</td><td><select name="course" required maxlength="15">
	       	      <option></option>
                  <option value='Bachelor of Science in Entrepreneurship'>Bachelor of Science in Entrepreneurship</option>
                   <option value='Bachelor in Elementary Education'>Bachelor in Elementary Education</option>
                  <option value='Bachelor in Secondary Education'>Bachelor in Secondary Education</option>
                   <option value='Bachelor of Science in Nursing'>Bachelor of Science in Nursing</option>
                   <option value='Bachelor of Science in Food Technology'>Bachelor of Science in Food Technology</option>
                   <option value='Bachelor of Science in Automotive Technology'>Bachelor of Science in Automotive Technology</option>
                   <option value='Bachelor of Science in Electronics Technology'>Bachelor of Science in Electronics Technology</option>
                  <option value='Bachelor of Science in Mechanical Technology'>Bachelor of Science in Mechanical Technology</option>
                   <option value='Bachelor of Science in Electrical Technology'>Bachelor of Science in Electrical Technology</option>
                   <option value='Bachelor of Science in Computer Science'>Bachelor of Science in Computer Science</option>
                    <option value='Bachelor of Science in Information Technology'>Bachelor of Science in Information Technology</option>
                   <option value='Bachelor of Science in Information Technology (Animation)'>Bachelor of Science in Information Technology (Animation)</option>
                  <option value='Bachelor of Science in Electronics & Communication Engineering'>Bachelor of Science in Electronics & Communication Engineering</option>
                   <option value='Bachelor of Science in Computer Engineering'></option>
                   <option value='Bachelor of Science in Inforamation System'></option>
              </select>
                </td>
	     </tr>
	      <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>Block:</td><td><input type="text" name="block" id="block" required x-moz-errormessage="Enter Your block" ></td>
	     </tr>
	     <tr>
	       <td class='para1_text' width="220px"><font color="red"></font>Room Number:</td> <td><select name="room_no" required maxlength="15">
	       	      <option></option>
                  <option value='Room 1'>Room 1</option>
                  <option value='Room 2'>Room 2</option>
                   <option value='Room 3'>Room 3</option>
                   <option value='Room 4'>Room 4</option>
              
              </select>
                </td>
	     </tr>
		 	
	  
	      
              
	<tr>
	       <td class='para1_text' width="220px"><font color="red"></font> Username:</td><td><input type="text" name="Username" required x-moz-errormessage="Enter Username" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red"></font> Password:</td><td><input type="password" name="Password" required x-moz-errormessage="Enter password" id="username"></td>
	     </tr>
		 <tr>
	       <td class='para1_text' ><font color="red"></font> Confirm Password:</td>
		   <td><input type="Password" name="ConfirmPassword" required x-moz-errormessage="Re-enter password" id="cpassword"></td>
	     </tr>
	     
	   
	 </tr>
<tr>
	<br><br><br>
	
	<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="condition" value="checkbox" style="width: 13px;" required x-moz-errormessage="Please check on agree" /> I agree the <a rel="facebox" href="terms_condition.php">terms and condition</a> of this site.
		<td ><button type="submit" name="submit" class="button_example"> Save</button></td></td>
	</tr>

  

  
  
</table> 
		
  </form>
<!--Php Script-->  
	   

	   

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

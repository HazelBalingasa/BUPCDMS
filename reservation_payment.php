<?php
  include("connection.php");  
 session_start();
 ?>

<!DOCTYPE>
<html>
<head>
  <title>You are uploading your payment receipt</title>
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
</tr>
<tr>
<td width="750px" colspan="3" height="100px">
<p><a href="index.php"><img src="img/logo.png" align="left" width="200px" height="130px"></a>
 <img style="border-radius:55px;box-shadow:1px 1px 12px black"src="img/functionhall.png" align="center" width="470px" height="130px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
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

<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>



 <div style="width:420px; height:450px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">



  <form id="form1" name="save" method="POST" action="reservation_payment.php" enctype="multipart/form-data" onsubmit="return validateForm()"> 
  <div style="background-color:green;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 


 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Submit Receipt</font></strong></div>
 <br>
 
  <?php

if ( isset( $_POST['submit'] ) )
{


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$client_type = $_POST['client_type'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$receipt=$_FILES['userfile'];
$folder='upload/';



if (move_uploaded_file($receipt['tmp_name'], $folder.$receipt['name'])) {
  
$receipt1=$receipt['name'];

            $sql="INSERT INTO reservpayment (fullname,email,client_type,month,day,year,receipt) values ('$fullname','$email','$client_type','$month','$day','$year','$receipt1')";

    
if (!mysqli_query($conn,$sql))
  {
   echo'<p class="wrong">Connection Failed</p>';
  
  }
  else
  {
echo' <p class="success">Receipt submitted successfully</p>';                                
       echo' <meta content="6;reservation_payment.php" http-equiv="refresh" />'; 
}
mysqli_close($conn);
}


}

?>    
 <br>
 </div>
  <table width="286" valign="top" align="center" border="0">

    <br>
    <br>
    <br>

		 <tr>
	       <td class='para1_text'><font color="red"></font>Full name:</td><td><input type="text" name="fullname" required x-moz-errormessage="Enter name" ></td>
	     </tr>


     <tr>
         <td class='para1_text'><font color="red"></font>Email:</td><td><input type="text" name="email" required x-moz-errormessage="Enter name" ></td>
       </tr>

         <tr>
         <td class='para1_text' width="220px"><font color="red"></font>Client Type:</td>
         <td><select name="client_type" required maxlength="15">
                <option></option>
                  <option value='Faculty '>Faculty</option>
                  <option value=' Student'>Student</option>
                   <option value='Outside Client'>Outside Client</option>
              
              </select>
                </td>
       </tr>


     
        <tr>
         <td class='para1_text'><font color="red"></font>Month:</td> <td><select name="month" required maxlength="15">
                <option></option>
                  <option value='January'>January</option>
                  <option value='February'>February</option>
                   <option value='March'>March</option>
                    <option value='April'>April</option>
                  <option value='May'>May</option>
                   <option value='June'>June</option>
                    <option value='July'>July</option>
                  <option value='August'>August</option>
                   <option value='September'>September</option>
                    <option value='October'>October</option>
                  <option value=' November'>November</option>
                   <option value='December'>December</option>
              
              </select>
                </td>
       </tr>


        <tr>
         <td class='para1_text'><font color="red"></font>Day:</td><td><select name="day" required maxlength="15">
                <option></option>
                  <option value='1'>1</option>
                  <option value='2'>2</option>
                   <option value='3'>3</option>
                    <option value='4'>4</option>
                  <option value='5'>5</option>
                   <option value='6'>6</option>
                    <option value='7'>7</option>
                  <option value='8'>8</option>
                   <option value='9'>9</option>
                    <option value='10'>10</option>
                  <option value=' 11'>11</option>
                   <option value='12'>12</option>
                    <option value='13'>13</option>
                  <option value='14'>14</option>
                   <option value='15'>15</option>
                    <option value='16'>16</option>
                  <option value='17'>17</option>
                   <option value='18'>18</option>
                    <option value='19'>19</option>
                  <option value='20'>20</option>
                   <option value='21'>21</option>
                    <option value='22'>22</option>
                    <option value='23'>23</option>
                  <option value=' 24'>24</option>
                   <option value='25'>25</option>
                   <option value='26'>26</option>
                    <option value='27'>27</option>
                     <option value='28'>28</option>
                    <option value='29'>29</option>
                  <option value='30'>30</option>
                   <option value='31'>31</option>
                  
              
              </select>
                </td>
       </tr>


        <tr>
         <td class='para1_text'><font color="red"></font>Year:</td><td><select name="year" required maxlength="15">
                <option></option>
                  <option value='2021'>2021</option>
                   <option value='2022'>2022</option>
                    <option value='2023'>2023</option>
                  <option value='2024'>2024</option>
                   <option value='2025'>2025</option>
                    <option value='2026'>2026</option>
                  <option value='2027'>2027</option>
                   <option value='2028'>2028</option>
                    <option value='2029'>2029</option>
                  <option value='2030'>2030</option>
                   <option value='2031'>2031</option>
                    <option value='2032'>2032</option>
                     <option value='2033'>2033</option>
                  <option value='2034'>2034</option>
                   <option value='2035'>2035</option>
                    <option value='2036'>2036</option>
                  <option value='2037'>2037</option>
                   <option value='2038'>2038</option>
                    <option value='2039'>2039</option>
                  <option value='2040'>2040</option>
                  
              
              </select>
                </td>
       </tr>

		 

<tr>
<td colspan="4">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td width="650" style="margin-left:23px;">
<fieldset><legend><font color="blue">Add all the receipts here</font></legend>
<br /><br />
    <input name="userfile" size="14" type="file">

<br>
<br>
 <tr>
	<td>&nbsp;</td>
 <td ><button type="submit" name="submit" class="button_example"> Save</button></td>
   
  </tr>

		 </table>
		</form>
  </fieldset>

</body>
</html>




			
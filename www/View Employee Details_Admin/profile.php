<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('Location: loginfinal.php');
}
?>
<html>
  <style type="text/css">
  body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	height:100%;
}

html {
	height:0;
	}
.wrap {
	min-height:100%;
	height:100%;
	height:auto !important;
}
#footer {
	height:40px;	
	line-height:40px;
	width: 100% !important;
	margin-right:0;
	margin-left:0px;
}
.push {
	height:98px;	
}
.hbtn {
	width:9% ;
	height:100%;
	color:#6e9cbb;
	background-color:#23261e;
	border-radius:0;
	border:0;
	font-weight:bold;
	cursor:pointer;
}
.hbtn:hover {
	color:white;
	background-color:#6e9cbb;
	}
  </style>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
    <div id="header" style="background-color:#23261e;width:100%;height:60px;border:0%; solid #000px;border-radius:;margin:0;" >
    
    
<form name="form" method="post" action="">

   
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2"><b>HR Portal</b></font>
     <a href = "hrhome.php" style= "text-decoration:none">
    <input type="button" name="Home" id="Home" value="Home" class="hbtn" style="margin-left: 70%;">
    </a> 
    <a href = "logout.php">
    <input type="button" name="Logout" id="Logout" value="Logout" class="hbtn" style="margin-left: %;">
    </a>
    
     
    </form>
    </div>
 
    
    <br><br>
    
     <div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-right:10%;float:right;" >
     
     <form name="form1" method="post" action="">
     <br>
<?php 
$con=mysqli_connect('localhost','root','12345','hrms');
$manid= $_SESSION['prof'];
$alldetails = "SELECT * from employeedetails WHERE EmployeeID = '$manid' ";
$valid2=mysqli_query($con, $alldetails);
$resultset1=mysqli_fetch_array($valid2);
?>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Contact Information</u></b></font>
     <br><br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <table border="0"style="padding-left:20%;font-size:16px";>
<tr>
<td><b><font color=#868984>Mobile Phone:</font></b></td>
<td><font color=#868984><?php echo $resultset1[8];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Emergency:</font></b></td>
<td><font color=#868984><?php echo $resultset1[10];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Email Id:</font></b></td>
<td><font color=#868984><?php echo $resultset1[15];?><font></td>
</tr>
</table>
    
   </form>
    </div>
    
     
<div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-left:10%; " >
    
    <form name="form1" method="post" action="">
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Personal Information</u></b></font>
     
     <br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <table border="0"style="padding-left:20%; font-size:16px";>

<tr>
<td><b><font color=#868984>Full Name:</font></b></td>
<td><font color=#868984><?php echo $resultset1[1];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>DOB:</font></b></td>
<td><font color=#868984><?php echo $resultset1[2];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Age:</font></b></td>
<td><font color=#868984><?php echo $resultset1[4];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Blood Group:</font></b></td>
<td><font color=#868984><?php echo $resultset1[9];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Address:</font></b></td>
<td><font color=#868984><?php echo $resultset1[12];?><font></td>
</tr>
</table>
     
    </form>
    </div>
     <br>
     
     
     <span style="margin-top:1.5%;margin-bottom:0%">
    <div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-right:10%;float:right;" >
    
    <form name="form1" method="post" action="">
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Work</u></b></font>
     <br>
     <br>
     <table border="0"style="padding-left:20%;font-size:16px";>
<tr>
<td><b><font color=#868984>Designation:</font></b></td>
<td><font color=#868984><?php echo $resultset1[5];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>DOJ :</font></b></td>
<td><font color=#868984><?php echo $resultset1[3];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Department Details :</font></b></td>
<td><font color=#868984><?php echo $resultset1[6];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>

<tr>
<td><b><font color=#868984>Project Name :</font></b></td>
<td><font color=#868984><?php echo $resultset1[17];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Project Details :</font></b></td>
<td><font color=#868984><?php echo $resultset1[18];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>CTC :</font></b></td>
<td><font color=#868984><?php echo $resultset1[14];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
</table>
     </form>
     </div>
     </span>
     
     <span style="margin-bottom:0%;">
          
<div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-left:10%;" >
    
    <form name="form1" method="post" action="">
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Education</u></b></font>
     <br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <table border="0"style="padding-left:20%; font-size:16px";>
<tr>
<td><b><font color=#868984>Qualification:</font></b></td>
<td><font color=#868984><font color=#868984><?php echo $resultset1[7];?><font><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Work Experience:</font></b></td>
<td><font color=#868984><?php echo $resultset1[13];?><font></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Skills:</font></b></td>
<td><font color=#868984><?php echo $resultset1[11];?><font></td>
</tr>
</table>
     
    </form>
    </div>
     
     </span>
     
<br><br><br><br>
<a href = "logout.php"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href = "viewdetails.php">
  <input type="button" name="Back" id="Back" value="Back" style="width:9% ;height:30px;color:white;background-color:#6e9cbb;border:00px; solid #000px;margin-left: 40%;border-radius:4px; margin-bottom: %;">
    </a>
   
    
    
<div class="push"></div>

</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright � HRMS.com</font>
</div>
</footer>
</html>
  
    

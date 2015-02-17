<?php 
//Initialize Session
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
	height:50px;	
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
	input:focus
{
outline:none;
border-color:#6e9cbb;
box-shadow:0 0 10px #6e9cbb ;
}
select:focus
{
outline:none;
border-color:#6e9cbb;
box-shadow:0 0 10px #6e9cbb ;
}
  </style>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
    <div id="header" style="background-color:#23261e;width:100%;height:60px;border:0%; solid #000px;border-radius:;margin:0;" >
    
    
<form name="form1" method="post" action="addemployee.php">

   
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2"><b>HR Portal</b></font>
    
    <a href = "hrhome.php"style="text-decoration: none">
    <input type="button" name="Home" id="Home" value="Home" class="hbtn" style="margin-left:70%;">
    </a>
    
    
    <a href = "logout.php"style="text-decoration: none">
    <input type="button" name="Logout" id="Logout" value="Logout" class="hbtn" style="margin-left: %;">
    </a>
    
     
    
<br><br><br><br>
 
<div id="header" style="background-color:white;width:75%;height:80px;border:0px solid #23261e;border-radius:8px;margin-left:8%;" >
 
 <label for="Employee ID">
    <div><b> <input type="button" name="Employee id" id="Employee id" value="Employee id" style="width:10% ;height:30px;color:white;background-color:#6e9cbb;border:00px; solid #000px;border-radius:4px;margin-left:5%"></b>
          <input name="EmployeeID" type="text" id="Employee ID" />
  
       
       </label>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <label for="Password"><b><input type="button" name="Password" id="Password" value="Password" style="width:10% ;height:30px;color:white;background-color:#6e9cbb;border:00px; solid #000px;border-radius:4px;margin-left:0%"></b>
    
          <input type="password" name="Password"  id="Password" />
  
</label>

  </label>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <label for="Role"><b><input type="button" name="Role" id="Role" value="Role" style="width:10% ;height:30px;color:white;background-color:#6e9cbb;border:00px; solid #000px;border-radius:4px;margin-left:0%"></b>
    
          <select name="role" >
<option value="Employee"> Employee </option> 
<option value="manager">manager </option>

  </select>
</label>
</div>
</div>
    
    <br>
    
     <div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-right:10%;float:right;" >
     
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Contact Information</u></b></font>
     <br><br>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <table border="0"style="padding-left:20%;font-size:16px";>
<tr>
<td><b><font color=#868984>Mobile Phone:</font></b></td>
<td><input name="MobilePhone" type="text" id="Mobile Phone" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Emergency:</font></b></td>
<td><input name="Emergency" type="text" id="Emergency" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Email Id:</font></b></td>
<td><input name="EmailId" type="text" id="Email Id" /></td>
</tr>
</table>
    
 
    </div>
    
     
<div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-left:10%; " >
    

     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Personal Information</u></b></font>
     
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <table border="0"style="padding-left:20%; font-size:16px";>
<tr>
<td><b><font color=#868984>Full Name:</font></b></td>
<td><input name="FullName" type="text" id="Full Name" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>DOB:</font></b></td>
<td><input name="DOB" type="date" id="D.O.B" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Age:</font></b></td>
<td><input name="Age" type="text" id="Age" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Blood Group:</font></b></td>
<td><select name="BloodGroup" >
<option value="A+"> A+ </option> 
<option value="A-"> A- </option>
<option value="B+"> B+ </option>
<option value="B+"> B- </option>
<option value="O+"> O+ </option> 
<option value="O-"> O- </option>
<option value="AB+"> AB+ </option>
 <option value="AB-"> AB- </option>
</select></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Address:</font></b></td>
<td><input name="Address" type="text" id="Address" /></td>
</tr>
</table>
     
    </div>
     <br>
     
     
     <span style="margin-top:1.5%;margin-bottom:0%">
    <div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-right:10%;float:right;" >
    
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Work</u></b></font>
     <br>
     
     <table border="0"style="padding-left:20%;font-size:16px";>
<tr>
<td><b><font color=#868984>Designation:</font></b></td>
<td><input name="Designation" type="text" id="Designation" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>DOJ:</font></b></td>
<td><input name="DOJ" type="date" id="D.O.J" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Department Details :</font></b></td>
<td><input name="DepartmentDetails" type="text" id="Department Details" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>

<tr>
<td><b><font color=#868984>Project Name :</font></b></td>
<td><input name="ProjectName" type="text" id="Project Name" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Project Details :</font></b></td>
<td><input name="ProjectDetails" type="text" value=""></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>CTC :</font></b></td>
<td><input name="CTC" type="text" id="CTC" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
</table>
     </div>
     </span>
     
     <span style="margin-bottom:0%;">
          
<div id="header" style="background-color:#23261e;width:35%;height:300px;border:4px solid #23261e;border-radius:8px;margin-left:10%;" >
    
     <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <font color="#868984" size="+2"><b><u>Education</u></b></font>
     <br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <table border="0"style="padding-left:20%; font-size:16px";>
<tr>
<td><b><font color=#868984>Qualification:</font></b></td>
<td><input name="Qualification" type="text" id="Qualification" /></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Work Experience:</font></b></td>
<td><input name="WorkExperience" type="text" id="Work Experience"></textarea></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td><b><font color=#868984>Skills:</font></b></td>
<td><input name="Skills" type="text" id="Skills"></textarea></td>
</tr>
</table>
     
    
    </div>
     
     </span>
     
     
     <BR><br><br><br>
    <a href = "">
    <input type="submit" name="Submit" id="Submit" value="Submit "style="width:9% ;height:35%;color:white;background-color:#6e9cbb;border:00px; solid #000px;margin-left: 38%;border-radius:4px; margin-bottom:;">
    </a>
     
     <a href = "">
    <input type="reset" name="Reset" id="Reset" value="Reset "style="width:9% ;height:35%;color:white;background-color:#6e9cbb;border:00px; solid #000px;margin-left: 6%;border-radius:4px; margin-bottom:;">
    </a>
    
 
 <div class="push"></div>

</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>
</html>
  

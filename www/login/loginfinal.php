<?php 
//Initialize Session
session_start();

error_reporting(E_ALL ^ E_NOTICE);
//$name = $_SESSION['Employee ID'];
if(isset($_SESSION['Employee ID']))
{
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
	height:209px;	
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
  </style>
    <body>
    <div id="header" style="background-color:#23261e;width:100%;height:60px;border:00px; solid #000px;border-radius:;margin:0;" >

 

<form id="form1" form name="form1" method="post" action="contactUs.php">
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2" style="margin-top:2%">HR Portal</font>
  
  
&nbsp;&nbsp;

<a href = "contactUs.php">  <input type="submit" name="Contact Us" id="Contact Us" value="Contact Us" class="hbtn"style="margin-left:78%;"></a>

</form>

<div style="background-color:#23261e;width:20%;height:200px;border: solid #23261e;border-radius:10px;margin-left:500px;padding-left:50px;margin-top:12%;" >
  
<form id="form2" name="form2" method="post" action="check.php" >           <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="#868984" size="+2">Login</font><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input name="EmployeeID" placeholder="Employee ID" type="text" style="border-radius:6px;">
       
       <br><br>
       
       
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="Password" placeholder="Password" type="password" style="border-radius:6px;">
       <br><br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href =""><input type="submit" name="Sign In" id="Sign In" value="Sign In" style="width:100px ;height:20px;color:white;background-color:#6e9cbb;border:00px; solid #000px;border-radius:6px;"></a>

</form>

</div>

           <div class="push"></div>

</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>

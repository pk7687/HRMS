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
  body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	
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
	height:99px;	
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
textarea:focus
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
    
    
    
<form name="form1" method="post" action="leave.php">

   
&nbsp;&nbsp;

<font color="#868984" size="+2" >HR Portal</font>

<a href = "EmployeeDetails.php" style="text-decoration:none; ">
<head>


    <input type="button" name="DETAILS" id="DETAIL" value="DETAIL" class="hbtn" style=" margin-left:40%;">
    </a>
    <a href = "Leave final.php"style="text-decoration:none";>
    <input type="button" name="Leave" id="Leave" value="LEAVE" class="hbtn" style="margin-left: %;">
    </a>
    <a href = "expense.php"style="text-decoration:none";>
    <input type="button" name="Expense" id="Expense" value="EXPENSE" class="hbtn" style="margin-left: %;">
    </a>
    <a href = "notice_view.php"style="text-decoration:none";>
    <input type="button" name="NOTICE" id="NOTICE" value="NOTICE" class="hbtn" style="margin-left: %;">
    </a>
    
    
    
    <a href = "logout.php"style="text-decoration:none";>
    <input type="button" name="Logout" id="Logout" value="LOGOUT" class="hbtn"style= "margin-left: 1%;">
    </a>
    
</div>


<div style="width:30%;hight:100px;margin-left:30%;margin-top:5%;border:2px solid #23261e;padding-left:5%;background-color:#23261e;border-radius:8px;">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font size="4px" color="#868984">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> <B>LEAVE APPLICATION </b></u></font><br>
<br><br>
<input type="radio" name="Leave" value="CL"><font color="#868984">Casual Leave
&nbsp;&nbsp;&nbsp;
<input type="radio" name="Leave" value="PL">Priviledged Leave

<br><br><br></font>


  <font size="4px" color="#868984">&nbsp;&nbsp; From :</font>&nbsp;&nbsp;
  <input name="from" type="Date" size="20" />


<br>


  <font size="4px" color="#868984">&nbsp;&nbsp; To :</font>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="to" type="Date" size="20" />

<br>
<font size="4px" color="#868984">&nbsp;&nbsp; <u>Reason :</u> </font><br>
<p style="margin-left:10%">
  <textarea name="Reason" cols="30" rows="5"></textarea>
  </p>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Apply" id="Apply" value="Apply"  style="width:100px ;height:20px;color:white;background-color:#6e9cbb;border:00px; solid #000px;border-radius:6px;"></a>
</p>
</form>
</p>
</form>

                           </div>
                           
               <div class="push"></div>
</div>
</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>
</html>
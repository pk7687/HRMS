<?php session_start();
if (!isset($_SESSION['id'])) {
	header('Location: loginfinal.php');
}
?><html>
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
	height:116px;	
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
    <body>
    <div id="header" style="background-color:#23261e;width:100%;height:60px;border:00px; solid #000px;border-radius:;margin:0;" >

 

<form name="form1" method="post" action="">
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2">HR Portal</font>
  
&nbsp;&nbsp;
<a href = "logout.php">  <input type="button" name="Logout" id="Logout" value="Logout" class="hbtn" style="margin-left:78%;"></a>

</form>
</div>

<div style="background-color:#23261e;width:25%;height:390px;border: solid #23261e;border-radius:10px;margin-left:30%;padding-left:15%;margin-top:4%;margin-bottom:%;" >
  
  <form name="form1" method="post" action="">
  <br><br>
 <a href = "Add Employee.php" style="text-decoration: none"> <font color="#868984" size="+1"> <li type= circle>Add Employee </li></font></a>
 
 <br><br>
 <a href = "leave_admin.php" style="text-decoration: none"> <font color="#868984" size="+1"> <li type= circle>Leave Applications </li></font></a>
 
 <br><br>
 <a href = "expense admin.php" style="text-decoration: none"> <font color="#868984" size="+1"><li type= circle> Reimbursements</li> </font></a>
  
  <br><br>
 <a href = "Notice_post.php" style="text-decoration: none"> <font color="#868984" size="+1"> <li type= circle>Upload Notice/Announcement</li> </font></a>
 
 
  
  <br><br>
 <a href = "viewdetails.php" style="text-decoration: none"> <font color="#868984" size="+1"><li type= circle> View Profile </li></font></a>
  
  
  </form>
  </div>
  
                           
               <div class="push"></div>

</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>
</html>
  
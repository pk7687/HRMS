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
	height:568px;	
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
    
    
<form name="form1" method="post" action="">

   
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2"><b>HR Portal</b></font>
    
    <a href = "logout.php">
    <input type="button" name="Logout" id="Logout" value="Logout" class="hbtn" style="margin-left: 80%;">
    </a>
    
    </form>
    
    <div id="header" style="background-color:#23261e;width:35%;height:80px;border:4px solid #23261e;border-radius:8px;margin-top:20%;margin-left:30%;padding-left:2%; " >
      <br>
      <div align="center"><font color="#868984"><b>You have successfully applied for the leave</b></font></div>
    </div>
    <br>
    <a href = "leave final.php">
    <input type="button" name="Back" id="Back" value="Back" style="width:9% ;height:35%;color:white;background-color:#6e9cbb;border:00px; solid #000px;margin-left: 45%;border-radius:4px;">
    </a>
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
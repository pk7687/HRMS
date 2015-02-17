<?php session_start();
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
	height:128px;	
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
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<div id="header" style="background-color:#23261e;width:100%;height:60px;border:0%; solid #000px;border-radius:;margin:0;" >
    
    
    
<form name="form1" method="post" action="expensepost.php" >

   
&nbsp;&nbsp;

<font color="#868984" size="+2" >HR Portal</font>

<a href = "EmployeeDetails.php"style="text-decoration:none; ">
    <input type="button" name="DETAIL" id="DETAIL" value="DETAIL" class="hbtn" style="margin-left: 40%;">
    </a>
     
    <a href = "Leave final.php"style="text-decoration:none; ">
    <input type="button" name="Leave" id="Leave" value="LEAVE" class="hbtn" style="margin-left: %;">
    </a>
    
    <a href = "expense.php"style="text-decoration:none; ">
    <input type="button" name="Expense" id="Expense" value="EXPENSE" class="hbtn" style="margin-left: %;">
    </a>
    
    <a href = "notice_view.php"style="text-decoration:none; ">
    <input type="button" name="NOTICE" id="NOTICE" value="NOTICE" class="hbtn" style="margin-left: %;">
    </a>
    
    <a href = "logout.php"style="text-decoration:none; ">
    <input type="button" name="Logout" id="Logout" value="LOGOUT" class="hbtn" style="margin-left: 1%">
    </a>
    
</div>
<br /><br />
<div style="width:30%;hight:10%;margin-left:30%;margin-top:5%;border:2px solid #23261e ;padding-left:5%;background-color:#23261e;border-radius:6px;">
<br>

<font color="#868984" size="+2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expenses</font>
<br><br>
 <label for="Travel">
    <div><input name="expense[]" type="checkbox" font color="" value="travel"><font color="868984">Travel :</font> &nbsp;&nbsp;
      <input name="Travel" placeholder= "Travel Amount" type="text" id="Travel" style="border-radius:6px;" />
  </div>
  <br>
  </label>
<label for="Phone">
    <div><input name="expense[]" type="checkbox" value="phone"><font color="868984">Phone :</font> &nbsp;&nbsp;
      <input name="Phone" placeholder="Phone Amount" type="text" id="Phone" style="border-radius:6px;" />
  </div>
  <br>
  </label>
<label for="Medical">
    <div><input name="expense[]" type="checkbox" value="medical"><font color="868984">Medical : </font>
      <input name="Medical" placeholder="MedicalAid Amount" type="text" id="Medical" style="border-radius:6px;" />
  </div>
  <br>
</label>
<label for="Petrol">
    <div><input name="expense[]" type="checkbox" value="petrol"><font color="868984">Petrol : </font>&nbsp;&nbsp;
      <input name="Petrol" placeholder="Petrol Amount" type="text" id="Petrol" style="border-radius:6px;" />
  </div>
</label>
</p><p><font size="2px">&nbsp;&nbsp; <font color="868984" size="3px">Supporting Document :</font>&nbsp;&nbsp;<input name="Supporting Document" type="file" size="10MB" />
<br />
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="submit" id="Submit" value="Submit" style="width:100px ;height:20px;color:white;background-color:#6e9cbb;border:00px; solid #000px;border-radius:6px;"></a>
</font>
</p>



                           </div>
                          
               <div class="push"></div>

</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>
</html>
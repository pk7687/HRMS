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
	height:90px;	
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
    
    
    
<form name="form1" method="post" action="">

   
&nbsp;&nbsp;

<font color="#868984" size="+2" >HR Portal</font>

<a href = "EmployeeDetails.php" style="text-decoration: none">
    <input type="button" name="DETAIL" id="DETAIL" value="DETAIL" class="hbtn"style="margin-left: 40%;">
    </a>
    
    <a href = "Leave final.php"style="text-decoration: none">
    <input type="button" name="Leave" id="Leave" value="LEAVE" class="hbtn" style="margin-left: %;">
    </a>
    
     <a href = "expense.php"style="text-decoration: none">
    <input type="button" name="Expense" id="Expense" value="EXPENSE" class="hbtn" style="margin-left: % ;">
    </a>
    
     <a href = "notice_view.php"style="text-decoration: none">
    <input type="button" name="NOTICE" id="NOTICE" value="NOTICE" class="hbtn" style="margin-left: %;">
    </a>
    
    <a href = "logout.php">
    <input type="button" name="Logout" id="Logout" value="LOGOUT" class="hbtn" style="margin-left:%;">
    </a>
    
  </form>
</div>

<div id="header" style="background-color:#23261e;width:40%;height:360px;border:4px solid #23261e;border-radius:8px;margin-left:30%;padding-left:5%;margin-top:8%; " >
             
<?php 
$con=mysqli_connect('localhost','root','12345','hrms');
$noticevid= $_SESSION['id'];

$maxid = "SELECT notice from notice 
		where id = (SELECT max(id) from notice)";
$valid4=mysqli_query($con, $maxid);
$resutlset1=mysqli_fetch_array($valid4);
$res=$resutlset1[0];

?>                    
                        <br>
            <form id="form1" name="form1" method="post" action="">
                  <P style="padding-left:38%">
             <font color="#868984" size="+2"><b>Notice</b></font>
                        </form>
                        <br>
                          <span style="padding-left:7%">
  <textarea name="notices" readonly id="notices" cols="50" rows="10" value=""><?php echo $res;?></textarea>
                          </span>
                
                     <br><br>
 
             
             <span style="padding-left:40%">
             <a href = "EmployeeDetails.php">
   <input type="submit" name="BACK" id="BACK" value="BACK" style = "background-color:#6e9cbb;border:00px;border-radius:4px;" />
             </span>
       </a>
                           </div>
                <div class="push"></div>

</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>
</html>
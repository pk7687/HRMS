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
	height:288px;	
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
    <div id="header" style="background-color:#23261e;width:100%;height:60px;border:0%; solid #000px;border-radius:;margin:0;" >
    
    
<form name="form1" method="post" action="profileview.php">

   
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2"><b>HR Portal</b></font>      

&nbsp;&nbsp;
<a href = "hrhome.php">  <input type="button" name="Home" id="Home" value="Home" class="hbtn"style="margin-left:70%;"></a>


<a href = "logout.php">  <input type="button" name="Logout" id="Logout" value="Logout" class="hbtn" style="margin-left: %;"></a>

                
   </form>
   </div>                 

<br><br>

<div id="header" style="background-color:#23261e;width:20%;height:125px;border:4px solid #23261e;border-radius:8px;margin-left:30%;padding-left:10%;margin-top:8%; " >
           
           <br><br>  
<form id="form1" name="form1" method="post" action="profileview.php" >              
       <label for="Employee ID">
    
          <input name="EmpID" placeholder="Employee ID" type="text" style ="border-radius:4px;"/>
  
 
       
       </label>     
             <p style = "padding-left:15%;" >
               <input type="submit"  name="confirm" id="confirm" value="Submit" style = "background-color:#6e9cbb;border:00px;border-radius:4px;margin-top:4%;" />
             </p>
              </div>
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
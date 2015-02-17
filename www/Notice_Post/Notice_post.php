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
	height:150px;	
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
          <body>
    <div id="header" style="background-color:#23261e;width:100%;height:60px;border:0%; solid #000px;border-radius:;margin:0;" >
    
    
<form name="form1" method="post" action="noticepost.php">

   
&nbsp;&nbsp;&nbsp;

<font color="#868984" size="+2" style="margin-top:2%"><b>HR Portal</b></font>      

&nbsp;&nbsp;
<a href = "hrhome.php">  <input type="button" name="Home" id="Home" value="Home" class="hbtn" style="margin-left:70%;"></a>


<a href = "logout.php">  <input type="button" name="Logout" id="Logout" value="Logout" class="hbtn" style="margin-left:%;"></a>

                
   </form>
   </div>                     
                        
           <div align="center"> 
           <div id="header" style="background-color:#23261e;width:40%;height:330px;border:4px solid #23261e;border-radius:8px;margin-top:6%; " >
             
                       
                        
            <form id="form2" name="form2" method="post" action="noticepost.php">
            
                  <p style="padding-left:0 ;">
            <div align="center"> <font color="#868984" size="+2"><b>Notice</b></font>
               </div>         </p>
                        <br>
                     
  <div align="center"> <textarea name="NOTICES" id="NOTICES" cols="45" rows="10"></textarea>
                         
     </div>                 
              
                         <br>
                          <p style="padding-left:150px">
     <div align="center"> <input name="POST" type="submit" class="POST" id="POST" value="POST" style = "width:15%;background-color:#6e9cbb;border:00px;border-radius:4px;"/>
             
       </div></p>
       </form>
       </div> 
                           </div>
               <div class="push"></div>
</body>
<footer>
<div id="footer" style="background-color:#23261e;clear:both;text-align:center;">
<font color="#868984" size="+1">Copyright © HRMS.com</font>
</div>
</footer>
</html>
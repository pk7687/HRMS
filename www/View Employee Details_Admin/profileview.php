<?php
session_start();

//include("config.php");
//$con=mysqli_connect('localhost','root','12345','hrms');
if (isset($_POST['EmpID'])) {
$detailsid = $_SESSION['id'];
$profileid = $_POST['EmpID'];
//echo $profileid;
$_SESSION['prof']=$profileid;
header('Location: Profile.php');
}
else {
	header('Location: viewdetails.php');
}

?>
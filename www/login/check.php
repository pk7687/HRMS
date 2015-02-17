<?php
session_start();

//include("config.php");
$con=mysqli_connect('localhost','root','12345','hrms');
$emp= $_POST['EmployeeID'];
$pass=$_POST['Password'];
$login = "SELECT * FROM login WHERE EmployeeID = '$emp' and password = '$pass' " ;
$valid=mysqli_query($con, $login);

// Check Employee ID and password match

if (mysqli_num_rows($valid) != 0)
{
	$query= "select role from login where EmployeeID = '$emp'";
	$valid1=mysqli_query($con, $query);
	$resultset=mysqli_fetch_array($valid1);
	$value0=$resultset[0];
	$_SESSION['id']=$emp;
	if($value0 =='Employee')
	{
		header( 'Location: EmployeeDetails.php ');
	}
	else if ($value0 =='manager')
	{
		header( 'Location: hrhome.php ');
	}
}
	
else
{
	// Jump to login page
	header('Location: loginfinal.php');
}
?>
<?php
//Leave Pocess
session_start();
$con=mysqli_connect('localhost','root','12345','hrms');
$leaveid= $_SESSION['id'];

$_SESSION['leavetype']=$_POST['Leave'];
$_SESSION['fromdate']=$_POST['from'];
$_SESSION['todate']=$_POST['to'];
$_SESSION['Reason']=$_POST['Reason'];

// creating sessions for every values

$leavetype=$_SESSION['leavetype'];
$fromdate=$_SESSION['fromdate'];
$todate=$_SESSION['todate'];
$reason=$_SESSION['Reason'];
$apply= "INSERT INTO  `hrms`.`leave` (`employeeid` ,`leavetype` ,`from_date` ,`to_date` ,`reason`)VALUES 
($leaveid,  '$leavetype',  '$fromdate',  '$todate',  '$reason')";

//Checking whether the date is entered correctly or not

if($fromdate <= $todate)
{

	if(!mysqli_query($con,$apply))
	{
		die('Error:' .mysqli_error($con));
	}
	header('Location: leavesuccess.php');
}
else if($fromdate > $todate)
{
	header( 'Location: leavefailure.php ');

}
 ?>
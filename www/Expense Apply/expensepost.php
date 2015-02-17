<?php
//Leave Pocess
session_start();
$con=mysqli_connect('localhost','root','12345','hrms');
$expenseid= $_SESSION['id'];

$expensetype=$_POST['expense[]'];

if($_POST["Submit"]=="Submit");

{
	for ($i=0; $i<sizeof($expensetype);$i++)
	{
		$query="INSERT INTO expenses(travel) VALUES ('$expensetype[$i]')";
		mysql_query($query) or die (mysql_error);
	}
}
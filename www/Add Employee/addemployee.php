<?php
//Leave Pocess
session_start();
$con=mysqli_connect('localhost','root','12345','hrms');
$addemployee= $_SESSION['id'];

$employeeid=$_POST['EmployeeID'];
$pwd=$_POST['Password'];
$role=$_POST['role']; 
$contact=$_POST['MobilePhone'];
$emergency=$_POST['Emergency'];
$email=$_POST['EmailId'];
$name=$_POST['FullName'];
$dob=$_POST['DOB'];
$age=$_POST['Age'];
$bloodgroup=$_POST['BloodGroup'];
$address=$_POST['Address'];
$designation=$_POST['Designation'];
$doj=$_POST['DOJ'];
$departmentdetails=$_POST['DepartmentDetails'];
$projectname=$_POST['ProjectName'];
$projectdetails=$_POST['ProjectDetails'];
$ctc=$_POST['CTC'];
$qualification=$_POST['Qualification'];
$workexperience=$_POST['WorkExperience'];
$skills=$_POST['Skills'];

 $addlogin="insert into login values('$employeeid','$pwd','$role')";
 if(!mysqli_query($con,$addlogin))
 {
 	die('Error:' .mysqli_error($con));
 }
 
 $add= "INSERT INTO employeedetails VALUES('$employeeid','$name','$dob','$doj', '$age','$designation',
'$departmentdetails','$qualification','$contact','$bloodgroup','$emergency','$skills','$address',
'$workexperience','$ctc','$email','$projectname','$projectdetails','$pwd','$role')";

if(!mysqli_query($con,$add))
	{
		die('Error:' .mysqli_error($con));
	}
	header('Location: employaddsuccess.php');
?>
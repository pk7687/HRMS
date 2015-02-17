<?php
//Leave Pocess
session_start();
$con=mysqli_connect('localhost','root','12345','hrms');
$noticeid= $_SESSION['id'];

$notice = $_POST['NOTICES'];

$addnotice="insert into `notice`(`notice`) values('$notice')";
if(!mysqli_query($con,$addnotice))
{
	die('Error:' .mysqli_error($con));
}
header('Location: Notice_post.php');
?>

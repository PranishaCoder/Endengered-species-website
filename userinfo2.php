<?php
$con=mysqli_connect('localhost','root');

if($con)
{
	echo "Connection successful!";
}
else
{
	echo "No connection";
}

mysqli_select_db($con,'youtubeuserdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$feedback=$_POST['feedback'];

$query="insert into userinfodata2 (user,email,mobile,feedback)
values ('$user','$email','$mobile','$feedback')";

echo "$query";

mysqli_query($con,$query);
header('location:index.php');





?>
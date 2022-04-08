<?php
$mail=$_GET["email"];
$password1=$_GET["pass"];
$host="127.0.0.1:3306";
$user="root";
$pass="";
$db="amanquiz";
$conn=mysqli_connect($host,$user,$pass,$db);
$logquery="select * from teacher where mail='$mail' and pass='$password1' ";
$login=mysqli_query($conn,$logquery);
$count=mysqli_num_rows($login);
if($count==1)
	{

	// echo "Login succesfull";
	header("Location: teacherhomepage.html");
	}
else
	{
	echo "Login Unsuccesfull";
	function_alert("Login Unsuccesfull");
		
echo '<h1 style="color: black;text-align: center;">Login Unsuccesfull<h1>';
echo '<h3 style="color: black;text-align: center;">Return Login Page <a href="teacherlogin.html">login</a><h3>';
	}
?>

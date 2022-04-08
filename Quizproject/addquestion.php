<?php
$subcod=$_POST["subcod"];
$que=$_Post["que"];
$op1=$_Post["op1"];
$op2=$_Post["op2"];
$op3=$_Post["op3"];
$op4=$_Post["op4"];
$ans=$_Post["ans"];
$host="127.0.0.1:3306";
$user="root";
$pass="";
$db="amanquiz";
$conn=mysqli_connect($host,$user,$pass,$db);
$insert="insert into addque values('$subcod','$que','$op1','$op2','$op3','$op4','$ans')";
if (mysqli_query($conn,$insert))
{
	// echo '<h1 style="color:black;text-align: center;>"Question Added Succesfully"</h1>';
	//  function_alert("Question Added Succesfully");
	echo '<h3 style="color: black;text-align: center;"> Question Added Succesfully Return HomePage <a href="teacherhomepage.html">Homepage</a></h3>';
}
else
{
	// echo '<h1 style="color: black;text-align: center;>"Adding Unsuccesfully"</h1>';
	// function_alert("Adding Unsuccesfully");
 	echo '<h3 style="color: black;text-align: center;"> Adding Unsuccesfully Return HomePage <a href="teacherhomepage.html">Homepage</a><h3>';
 }
?>


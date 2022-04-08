
<!-- HTML Code started here -->

<html>
	
	<head>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/mp_style.css">
	</head>
	<style>
		
		</style>

<body>
	<header class="header">
		<!-- Left box for logo -->
		<div class="left">
			<img src="image/quizlogo.png" alt="">
		</div>
		<!-- Mid box for navbar -->
		<div class="mid">
			<ul class="navbar">
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Blogs</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			</div>
			
			<!-- Right box for buttons -->
			<div class="right">
			<!-- <img src="img/fb.png" alt="">
			<img src="img/insta.png" alt="">
			<img src="img/twiter.png" alt=""> -->
			<!-- <button class="btn">Login</button> -->
			<!-- <button class="btn">SignUp</button> -->
		</div>
		</header>
</body>
</html>

<!-- PHP code here -->

<?php
$host='127.0.0.1:3306';
$user='root';
$pass='';
$dbname='amanquiz';
$conn=mysqli_connect($host,$user,$pass,$dbname);

$c=$_GET["subcode"];
echo"<h2 color: red;
margin: -19px -10px;
padding: 52px 100px;>Subject Code= $c </h2>";
$sql="select * from addque where subcod='$c' ";
$retval=mysqli_query($conn,$sql);

$i=1;
$count=0;
echo "<form action='result1.php'>";
while($row=mysqli_fetch_assoc($retval))
{
	echo"<br>{$row['que']} <br>";
	echo"
	 <input type ='radio' name='n$i' value='{$row["op1"]}' class='ques' />{$row['op1']} 
	 <input type ='radio' name='n$i' value='{$row["op2"]}' class='ques' />{$row['op2']}
	 <input type ='radio' name='n$i' value='{$row["op3"]}' class='ques' />{$row['op3']}
	 <input type ='radio' name='n$i' value='{$row["op4"]}' class='ques' />{$row['op4']}
	 <input type ='hidden' name='r$i' value='{$row["ans"]}' <br> ";
	$count++;
	$i++;
}
echo"<input type='hidden' name='count' value='$count'/>";
echo "<br> <input type='submit' value='Submit' class='btn'/>

</form> ";

mysqli_close($conn);
?>

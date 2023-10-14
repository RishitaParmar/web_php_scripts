<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random Number</title>
</head>
<body>
<form method="post" action=" ">
	Enter a number between 1 to 10 to guess:
	<br/>
	<input type="text" name="num">
	<br/>
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php
/*if(isset($_POST["submit"])){
	$num = $_POST["num"];
}*/
$num = $_POST["num"];
$submitbtn = $_POST["submit"];

if(!empty($num)){	
	$ran_num = rand(1, 10);
	echo "Generated Random Number is : $ran_num";
	echo "<br/>";
	echo "You Enter : $num";
}
else{
	echo "";
}
?>
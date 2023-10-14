<html>
<head>
	<title>Leap year or not</title>
</head>
<body>
	<center>
		<form method="post" action="Script_17.php">
			Enter a Year to check Leap year or not:
			<input type="text" name="year">

			<input type="submit" name="submit">
		</form>	
	</center>
</body>
</html>


<?php
if(isset($_POST["submit"])){
	$year=$_POST["year"];
}
if($year%4==0){
	echo "<center>$year is Leap Year";
}
else{
	echo "<center>$year is not Leap Year";	
}

?>
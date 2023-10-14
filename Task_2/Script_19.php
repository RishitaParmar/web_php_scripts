<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime Number</title>
</head>
<body>
<form action="" method="post">
	Enter a Number to check Prime or not:
	<br/>
	<input type="text" name="num">
	<br/>
	<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if($_POST)  
{  
    $num=$_POST["num"];  
    for ($i = 2; $i <= $num-1; $i++) {  
      if ($num % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo "The number $num is not prime number";  
}
else {  
     echo "The number $num is prime number";  
   }   
}  
?>
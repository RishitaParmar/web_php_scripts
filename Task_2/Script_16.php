<!DOCTYPE html>
<html>
<head>
  <title>Vowel count</title>
</head>
<body>
	<center>
<form method="post" action="Script_16.php">
  Enter String to count number of vowel:<br>
  <input type="text" name="str"><br>

<input type="submit" name="submit">
</form>
</center>
</body>
</html>



<?php
if(isset($_POST["submit"])){
    $str=$_POST["str"];
}
$sum=substr_count("$str","a")+substr_count("$str","e")+substr_count("$str","i")+substr_count("$str","o")+substr_count("$str","u")+substr_count("$str","A")+substr_count("$str","E")+substr_count("$str","I")+substr_count("$str","O")+substr_count("$str","U");


  echo "<center>Sum of Vowel in <b>$str</b> is : <b>$sum</b>";

?>

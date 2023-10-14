<!DOCTYPE html>
<html>
<head>
  <title>Largest Number</title>
</head>
<body>
	<center>
<form method="post" action="Script_15.php">
  Enter the first number:<br>
  <input type="text" name="num1"><br>
  Enter the second number:<br>
  <input type="text" name="num2"><br>
  Enter the third number:<br>
  <input type="text" name="num3">
  <br>
  <input type="submit" name="submit">
  </center>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $num3=$_POST["num3"];
      echo "<br/>";
      if($num1>$num2 && $num1>$num3){
        echo "<center>Largest number is : $num1";
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "<center>Largest number is : $num2";
        }
        else
          echo "<center>Largest number is : $num3";
      }
  }

?>
<?php  
echo "Enter the value of x";  
$x = 25;  
echo "Enter the value of y";  
$y = 50;  
echo "before swapping numbers: ";  
echo $x;  
echo "    ";  
echo $y;  
echo "\n";  
  
  
$x = $x + $y;   
$y = $x - $y;   
$x = $x - $y;   
echo "After swapping ";  
echo $x;  
echo "    ";  
echo $y;  
?>  

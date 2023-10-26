<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

foreach ($numbers as $key => $val) {
    echo "numbers[" . $key . "] = " . $val . "<br>";
}

/* output:
numbers[0] = 2
numbers[1] = 4
numbers[2] = 6
numbers[3] = 11
numbers[4] = 22*/
?>


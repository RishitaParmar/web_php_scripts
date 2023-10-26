<?php



$cities=array("Dubai","United Kingdom","Paris","Maldives");

rsort($cities);

foreach($cities as $city)
{
    print_r($city);
    echo "<br>";
}



?>

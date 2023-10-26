<?php
$person = array(
    "name" => "John Doe",
    "age" => 25,
    "email" => "johndoe@example.com"
);

// Remove the email element
unset($person["email"]);

// Display the updated array
print_r($person);
?>
<?php

$name = "Kavooce"; // string
$age = 20; // int
$has_children = false; // boolean
$is_married = true; // boolean
$cash = 20.75; // float

$sum = 5 + 5;
$sum10 = '5' + '5';

echo "$name <br>";
echo "$age <br>";
echo "$has_children <br>";
var_dump($has_children);
echo "<br>";
echo "$is_married <br>";
echo "$cash <br>";

echo "$cash is the amount of money i have <br>";
echo "$name is $age years old <br>";
echo 5 + 5 . "<br>";
echo "5" + "5" . "<br>";
echo "$sum + $sum10 <br>";
echo $sum + $sum10 . "<br>";

// constants
define("HOST", "localhost");
define("DB_NAME", "dev_db");
echo HOST . "<br>";
echo DB_NAME . "<br>";
var_dump(HOST);

?>
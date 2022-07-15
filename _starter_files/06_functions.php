<?php

$y = 10;
function registerUser(){
  global $y;
  echo "global variable $y <br>";
  echo "user registered function <br>";
}
registerUser();

function register($email){
  echo "Email: $email <br>";
}
register("email@example.com");

function sum($n1, $n2){
  return $n1 + $n2;
}
$add = sum(5,3);
echo "Sum: " . sum(5,3) . "<br>";
echo "Add: $add <br>";

function summer($n1 = 1, $n2 = 2){
  return $n1 + $n2;
}
echo "Summer: " . summer() . "<br>";

$subtract = function($n1, $n2){
  return $n1 - $n2;
};
echo "subtract: " . $subtract(10,5) . "<br>";

$multiply = fn($n1, $n2) => $n1 * $n2;
echo "multiply: " . $multiply(10,5) . "<br>";


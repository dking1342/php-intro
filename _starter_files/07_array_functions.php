<?php

$fruits = ["apple", "banana", "orange"];

// echo count($fruits) . "<br>";

// var_dump(in_array("apple",$fruits));
print_r($fruits);

// append
$fruits[] = "grape";
print_r($fruits);
array_push($fruits,"blueberry", "raspberry");
print_r($fruits);
array_unshift($fruits,"avocado");
print_r($fruits);

// remove
array_pop($fruits);
print_r($fruits);
array_shift($fruits);
print_r($fruits);
unset($fruits[3]);
print_r($fruits);

// chunks
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

$arr4 = [...$arr1,...$arr2];
print_r($arr4);

$a = ["green","red","yellow"];
$b = ["avocado","apple","banana"];
$c = array_combine($a,$b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1,20);
print_r($numbers);

$mapped = array_map(function($number){
  return "Number: " . $number * 5;
},$numbers);
print_r($mapped);

$filtered = array_filter($numbers, fn($number) => $number <= 10);
print_r($filtered);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);


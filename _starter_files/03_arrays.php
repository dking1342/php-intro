<?php

$numbers = [1,2,3];
$fruits = array("apple","cherry","banana");

print_r($numbers);
print_r($fruits);
var_dump($numbers);
print_r("\r\n");

print_r($fruits[0]);
print_r("\r\n");
echo $fruits[0] . "<br>";
print_r("\r\n");

$colors = [
  1 => "red",
  4 => "blue",
  6 => "yellow"
];
print_r($colors[4]);
print_r("\r\n");

$hex = [
  "white" => "#fff",
  "black" => "#000",
  "red" => "#ff0000",
];
print_r($hex["white"]);
print_r("\r\n");

$person = [
  "first_name" => "Jack",
  "last_name" => "Johnson",
  "email" => "jack@example.com",
];

echo "first name: " . $person["first_name"];
print_r("\r\n");
echo "last name: " . $person["last_name"];
print_r("\r\n");

$people = [
  [
    "first_name" => "Jack",
    "last_name" => "Johnson",
    "email" => "jack@example.com",
  ],
  [
    "first_name" => "Jane",
    "last_name" => "Johnson",
    "email" => "jane@example.com",
  ] 
];

echo $people[1]["email"];
print_r("\r\n");

// json encode and decode
var_dump(json_encode($people));


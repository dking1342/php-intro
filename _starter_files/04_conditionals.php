<?php

$age = 20;
$result = "";

if($age >= 18){
  $result = "You are old!";
} else {
  $result = "You are a child";
}
echo $result . "<br>";

$t = date("F j");

echo $t . "<br>";

$hour_of_day = date("H:i:s");
$greeting = "";

if($hour_of_day < 12){
  $greeting = "good morning";
} elseif ($hour_of_day < 17){
  $greeting = "good afternoon";
} else {
  $greeting = "good evening";
}

echo $greeting . "<br>"; 

$posts = ["First Posts"];
$fetch = "";

if(empty($posts)){
  $fetch = "no posts";
} else {
  $fetch = "posts are there";
}
echo $fetch . "<br>";

echo !empty($posts) ? $posts[0] : "No posts" . "<br>";
$postOutput = !empty($posts) ? $posts[0] : "No posts" . "<br>";
echo $postOutput . "<br>";

$checkPosts = empty($posts) && $posts[0];
echo $checkPosts . "<br>";

$fav_color = "yellow";

switch($fav_color){
  case "red": 
    echo "your fav color is red";
    break;
  case "blue":
    echo "your fav color is blue";
    break;
  case "green":
    echo "your fav color is green";
    break;
  default:
    echo "you do not have a favorite color";
}


<?php

$string = "Hello World";


echo "length: " . strlen($string) . "<br>";
echo "first position of o: " . strpos($string,"o") . "<br>";
echo "last position of o: " . strrpos($string,"o") . "<br>";
echo "reverse: " . strrev($string) . "<br>";
echo "lower case: " . strtolower($string) . "<br>";
echo "upper case: " . strtoupper($string) . "<br>";
echo "upper case first: " . ucwords($string) . "<br>";
echo "replace: " . str_replace("World","All", $string) . "<br>";
echo "substring: " . substr($string, 0, 5) . "<br>";
echo "substring: " . substr($string, 7) . "<br>";

if(str_starts_with($string, "Hello")){
  echo "starts with: yes <br>";
}
if(str_ends_with($string,"ld")){
  echo "ends with: yes <br>";
}

$string2 = "<h1>hello</h1><br>";
echo $string2;
$danger = "<script>alert(1)</script>";
echo htmlspecialchars($danger) . "<br>";

printf("%s likes to %s", "Kavooce", "code");
printf("1+1=%d",1+1);
printf("1+1=%f",1+1);



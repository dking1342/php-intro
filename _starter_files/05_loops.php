<?php

for($x = 0; $x <= 10; $x++){
  echo "Number is $x <br>";
}

$index = 1;
while($index <= 15){
  echo "Number is $index <br>";
  $index++;
};

do {
  echo "Do is $index <br>";
  $index++;
} while ($index <= 30);

$posts = ['Post One', 'Post Two', 'Post Three'];

for($i = 0; $i < count($posts); $i++){
  echo "for: $posts[$i] <br>";
}

foreach($posts as $post){
  echo "foreach: $post <br>";
}

foreach ($posts as $index => $post) {
  echo "foreach index: $index - $post <br>";
}

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

foreach($person as $key => $value){
  echo "key: $key - value: $value <br>";
}
foreach($person as $p){
  echo "value: $p <br>";
}

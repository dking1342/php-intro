<?php

function inverse($x) {
  if(!$x){
    throw new Exception("division by zero");
  }

  return 1/$x;
}


try {
  echo inverse(5);
  echo inverse(0);

} catch(Exception $e) {
  echo "caught exception $e->getMessage() <br>";
} finally {
  echo "finally block <br>";
}

echo "hello world";



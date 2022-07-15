<?php

setcookie("name","kavooce", time() + 86400);

if(isset($_COOKIE["name"])){
  echo $_COOKIE["name"];
} else {
  echo "no cookie name";
}

setcookie("name","",time() - 86400);

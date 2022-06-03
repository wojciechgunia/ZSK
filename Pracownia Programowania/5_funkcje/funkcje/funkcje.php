<?php

function show(){

  echo "SHOW<br>";
}

function show1($name){

  return $name;
}

function stringValidate($x, $len)
{
  $x=trim($x);
  $x=strtolower($x);
  $x=ucfirst($x);
  $x=substr($x, 0, $len)
  return $x;
}
 ?>

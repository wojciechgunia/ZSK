<?php
  echo PHP_VERSION,"<br>"; //8.0.10
  echo 2**10,"<br>"; // ** potęga  = 1024
//równe
  $x=10;
  $y=1;

  echo $x<=>$y,"<br><hr>";

//typy

  $x=1;
  $y=1.0;

  echo gettype($x),"<br>";//integer
  echo gettype($y),"<br><hr>";//double

//równe
if ($x==$y) {
  echo "Równe","<br>";
}else {
  echo "Różne","<br>";
}

//identyczne (zwraca uwagę na typ danych)
if ($x===$y) {
  echo "Identyczne","<br><hr>";
}else {
  echo "Różne","<br><hr>";
}

/*
  postinkrementacja $x++
  preinkrementacja  ++$x
  postdekremntacja  $x--
  predekremntacja  --$x
*/

$x=10;
$x++;
echo $x,"<br>"; //2
$x=$x++;
echo $x,"<br>"; //2
$y=$x++;
echo $x,"<br>"; //3
echo $y,"<br>"; //2
$x=--$x;
echo $x,"<br>"; //2
//Zadanie 1,1,2,3:3,4:3


 ?>

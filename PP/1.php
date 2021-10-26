<?php
  //
  echo "ZSK<br>";
  echo "ZSK";

  $name = "Janusz";

  echo '<br>twoje imię: $name';
  echo "<br>twoje imię: $name";

  $x='x';
  $y='y';

  //konkatenacja
  echo "<br>".$x.$y;

  //typy danych
  //logiczny
  $prawda=true;
  $fałsz=false;
  echo "<br>";
  echo $prawda.$fałsz;

  //całkowity
  $całkowita=10;
  $bin=0b1011; //11
  $oct=011;//9
  $hex=0x11;//17

  echo "<hr>$hex";

  //zmiennoprzecinkowe
  $x=10.5;

  echo "<br>".gettype($x); //double
  echo "<br>".gettype($bin); //integer
  echo "<br>".gettype($prawda)."<hr>"; //boolien

  echo "<br>".var_dump($x); //double
  echo "<br>".var_dump($bin); //integer
  echo "<br>".var_dump($prawda)."<hr>"; //boolien
  //heredoc
  $surname = "Nowak";
  echo <<< E
    Imię i nazwisko:
    Janusz $surname
    Poznań

  E;

  //2 wersja
  $tekst = <<< E
    Imię i nazwisko:
    Janusz $surname
    Poznań

  E;
  echo $tekst;

  //nowdoc
  echo <<< 'E'
    <hr><hr>
    Imię i nazwisko:
    Janusz $surname
    Poznań

  E;

  //nzawa zmiennej
  echo "<hr><br>Nazwa zmiennej: \$surname";
 ?>

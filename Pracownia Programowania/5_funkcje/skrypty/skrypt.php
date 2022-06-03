<?php

require_once("../funkcje/funkcje.php");
//show();
if (!empty($_POST["name"])) {
  echo "Imię: ".stringValidate($_POST["name"], 4)." ,dlugosc: ".strlen(stringValidate($_POST["name"], 4));
}


 ?>

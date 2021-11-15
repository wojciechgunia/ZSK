<?php

  if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["birthday"]) && !empty($_POST["cityid"]))
  {
    require_once("./connect.php");
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthday = $_POST["birthday"];
    $cityid = $_POST["cityid"];
    $baza->query("INSERT INTO users (name, surname, birthday, cityid) VALUES "."('$name', '$surname', '$birthday', '$cityid');");
    if($baza->error){
      header("location: ./../7_5_bazy_tabela_delete_add_edit.php?error=5");
    }
    else {
      header("location: ./../7_5_bazy_tabela_delete_add_edit.php?info=dodano nowego użytkownika");
    }
    $baza->close();
  }
  else {
    header("location: ./../7_5_bazy_tabela_delete_add_edit.php");
  }
 ?>

<?php

  if(!empty($_POST["id"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["birthday"]) && !empty($_POST["cityid"]))
  {
    require_once("./connect.php");
    $id = $_POST["id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthday = $_POST["birthday"];
    $cityid = $_POST["cityid"];
    $baza->query("UPDATE users SET name = '$name', surname = '$surname', birthday = '$birthday', cityid = '$cityid' WHERE users.id = $id;");
    if($baza->error){
      header("location: ./../7_5_bazy_tabela_delete_add_edit.php?error=5");
    }
    else {
      header("location: ./../7_5_bazy_tabela_delete_add_edit.php?info=zmieniono dane użytkownika");
    }
    $baza->close();
  }
  else {
    header("location: ./../7_5_bazy_tabela_delete_add_edit.php");
  }
 ?>

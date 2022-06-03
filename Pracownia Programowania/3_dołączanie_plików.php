<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Początek pliku</h3>
     <?php
      include_once './3_1.php';
      include './3_1.php';
      //include - po błędzie dalszy kod działa

      //require './3_2.php';
      //require_once './3_2.php';
      //require - po błędzie dalszy kod nie będzie działał
     ?>
     <h3>Koniec strony</h3>
  </body>
</html>

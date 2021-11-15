<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $baza = new mysqli("localhost","root","","zsk_4bg1_baza1");
      $data = $baza->query("SELECT * FROM `users`;");
      while ($row = $data->fetch_assoc()) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        echo <<< HI
          Id: $row[id]<br>
          Imię: $row[name] Nazwisko: $row[surname]<br>
          Data urodzenia: $row[birthday]<br><hr><br><br>
        HI;
      }

      $baza->close();
     ?>
  </body>
</html>

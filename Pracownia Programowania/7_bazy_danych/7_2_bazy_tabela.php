<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $baza = new mysqli("localhost","root","","zsk_4bg1_baza1");
    //  $data = $baza->query("SELECT * FROM `users`;");
      $data = $baza->query("SELECT `users`.`id`, `users`.`name`, `users`.`surname`, `users`.`birthday`, `citys`.`city` FROM `users` LEFT JOIN `citys` ON `users`.`cityid` = `citys`.`id`;");
      echo <<< HI
      <table>
      <tr>
      <th>Id</th>
      <th>Imię </th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
      <th>Miasto</th>
      </tr>

  HI;
      while ($row = $data->fetch_assoc()) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        echo <<< HI

        <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td>$row[city]</td>
        </tr>
  HI;
      }
      echo <<< HI

    </table>
  HI;
      $baza->close();
     ?>



  </body>
</html>

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
      require_once("./scripts/connect.php");
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
        <!-- <td><a href="./scripts/delete2.php?id=$row[id]">Usuń</a></td> -->
        <td><form action="./scripts/delete2.php" method="post">
          <input type="submit" name="" value="usuń">
          <input type="text" style="display: none !important;" name="id" value="$row[id]">
        </form></td>
        </tr>
  HI;
      }
      echo <<< HI
      <tr>
        <form action="./scripts/add.php" method="post">
        <td>new</td>
        <td><input type="text" name="name" value=""></td>
        <td><input type="text" name="surname" value=""></td>
        <td><input type="text" name="birthday" value=""></td>
        <td><select name="cityid">
  HI;
          $data = $baza->query("SELECT * FROM citys;");
          while ($row = $data->fetch_assoc()) {
          echo "<option value='$row[id]'>$row[city]</option>";
          }
    echo <<< HI
        </select></td>
        <td>
          <input type="submit" name="" value="dodaj">
        </td>
        </form>
      </tr>
    </table><br><br>
  HI;
      $baza->close();
      if(!empty($_GET["uid"]))
      {
        echo "Usunięto Użytkownika o id: ".$_GET["uid"];
      }
      if(!empty($_GET["error"]))
      {
        echo "Wystąpił błąd";
      }
      if(!empty($_GET["info"]))
      {
        echo $_GET["info"];
      }
     ?>

  </body>
</html>

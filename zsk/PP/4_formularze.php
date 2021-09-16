<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="name" placeholder="podaj imię"><br><br>
      <input type="text" name="surname" placeholder="podaj nazwisko"><br><br>
      <input type="submit" value="Zatwierdź">
    </form>
    <?php
      if(isset($_GET['name']) && isset($_GET['surname']))
      {
        echo <<< L
        Imię: {$_GET['name']}<br>
        Nazwisko: $_GET[surname]<br>
    L;
      }
      else {
        echo "Wypełnij wszystkie dane ;)";//wykorzystać funkcję empty
      }
     ?>
  </body>
</html>

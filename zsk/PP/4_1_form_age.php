<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(!isset($_POST["ile"]))
      {
        echo <<< form
        <form action="" method="post">
          <h1>Ilość osób w rodzinie</h1>
          <input type="number" name="ile" placeholder="Podaj ilość osób">
          <br><br>
          <input type="submit" name="sub" value="Zatwierdź">
        </form>
form;
      }
      else {
        $ile = ($_POST["ile"]);
        $i = 1;
        echo <<< form2
        <form action="" method="post">
          <h1>Podaj wiek</h1>
form2;
        while($i<$ile+1)
        {

          echo 'Osoba '.$i.':<input type="number" name="wiek'.$i.'" placeholder="Podaj wiek"><br><br>';
          $i++;
        }
        echo <<< form3
          <input type="submit" name="sub" value="Zatwierdź">
          <input type="number" name="ile" value="$ile" style="display: none;">
        </form>

form3;
      }

      if(!empty($_POST["ile"]))
      {
      }
      else {
        echo "<br>Podaj dane";
      }

      if(!empty($_POST["wiek1"]))
      {
        $ile = ($_POST["ile"]);
        $avg1=0;
        $i = 1;
        while($i<$ile+1)
        {
          $avg1=$avg1+($_POST["wiek".$i]);
          $i++;
        }
        echo $avg1/$ile;
      }
     ?>
  </body>
</html>

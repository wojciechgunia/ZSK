<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "dzień-miesiąc-rok: ".date('d-m-Y')."<br>"; //21-10-2021
      echo "miesiąc-dzień-rok: ".date('m-d-y')."<br>";
      echo "miesiąc-dzień-rok: ".date('d-M-Y')."<br>";
      echo "miesiąc-dzień-rok: ".date('d-F-Y')."<br>";

      setlocale(LC_ALL, 'polish');
      echo strftime("%d %B %Y")."<br>";

      echo date('G:i:s')."<br>";
      echo date('H:i:s')."<br>";
      echo date('G:i:sa')."<br><br><br>";

      $date=getdate();
      echo "<pre>";
        print_r($date);
      echo "</pre>";

      echo "<br><br><br>";

      echo $date['wday'].'<br>';
      echo $date['yday'].'<br>';
      echo date('L').'<br>';

      //mktime()
      echo mktime(0,0,0,10,21,2021).'<br>';
      echo mktime(0,0,0,date('m'),date('d'),date('Y')).'<br>';


      //ile lat mineło od 1 stycznia 1970
      $year=mktime(0,0,0,date('m'),date('d'),date('Y'))/(60*60*24*365);
      echo (int)$year.'<br>';

      $Lyear=mktime(0,0,0,date('m'),date('d'),date('Y')-1)/(60*60*24*365);
      echo (int)$Lyear.'<br>';
     ?>
     <script>
       setTimeout(function(){
      //   window.location.reload();

       },1000)
     </script>
  </body>
</html>

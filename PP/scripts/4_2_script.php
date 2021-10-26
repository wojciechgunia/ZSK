<?php
//echo "<pre>";
//  print_r($_POST);
//echo "</pre>";
if (!empty($_POST['name']) && !empty($_POST['figure']) )
{
  switch ($_POST['figure']) {
    case 'kwadrat':
      header('location: ./kwadrat.php');
      break;
    case 'prostokąt':
      header('location: ./prostokąt.php');
      break;
  }
}
else {
  ?>
  <script>
    history.back();
  </script>
  <?php
}
 ?>

<?php

  require_once("./scripts/connect.php");
  echo "<div id='ramka'>";
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

    <tr id="edittr$row[id]">
    <td class="form$row[id]">$row[id]</td>
    <td class="form$row[id]">$row[name]</td>
    <td class="form$row[id]">$row[surname]</td>
    <td class="form$row[id]">$row[birthday]</td>
    <td class="form$row[id]">$row[city]</td>
    <!-- <td><a href="./scripts/delete3.php?id=$row[id]">Usuń</a></td> -->
    <td class="form$row[id]"><form action="./scripts/delete.php" method="post">
      <input type="submit" name="" value="usuń">
      <input type="text" style="display: none !important;" name="id" value="$row[id]">
    </form></td>
    <td><p id="editt$row[id]" style="display: none !important;">0</p><button id="edit$row[id]">edytuj</button></td>
    </tr>
HI;
  }
  echo <<< HI
  <tr>

    <td>new</td>
    <td><form action="./scripts/add.php" method="post"><input type="text" name="name" value=""></td>
    <td><input type="text" name="surname" value=""></td>
    <td><input type="date" name="birthday" value=""></td>
    <td><select name="cityid">
HI;
      $data = $baza->query("SELECT * FROM citys;");
      while ($row = $data->fetch_assoc()) {
      echo "<option value='$row[id]'>$row[city]</option>";
      }
echo <<< HI
    </select></td>
    <td>
      <input type="submit" name="" value="dodaj"></form>
    </td>

  </tr>
</table>
</div>

HI;
  $baza->close();
  if(!empty($_GET["uid"]))
  {
    echo '<div id="ramka2">';
    echo "Usunięto Użytkownika o id: ".$_GET["uid"];
    echo '</div>';
  }
  if(!empty($_GET["error"]))
  {
    echo '<div id="ramka2">';
    echo "Wystąpił błąd";
    echo '</div>';
  }
  if(!empty($_GET["info"]))
  {
    echo '<div id="ramka2">';
    echo $_GET["info"];
    echo '</div>';
  }
 ?>
<script>
   let btn = document.querySelectorAll("button");
   Array.from(btn).forEach(p => {
     let id = p.id;
     document.getElementById(id).onclick =()=>
     {
       let id = p.id;
       id = id.substr(4);
       let form = document.querySelectorAll('.form'+id);
       let forms = document.querySelectorAll('.forms'+id);
       let a=0;
       let tresc=[];
       let trtab=document.getElementById("edittr"+id);
       let editt=document.getElementById("editt"+id).innerHTML;
       let trtab2=trtab.innerHTML;
       trtab2=trtab2.substr(5,6);
       console.log(editt);
       if(editt=="1")
         {
           Array.from(forms).forEach(r => {
               tresc.push(r.value);
           });
           <?php
             require("./scripts/connect.php");
             $data = $baza->query('SELECT * FROM citys;');
             while ($row = $data->fetch_assoc())
             {
               echo "if(tresc[3]=='".$row['id']."')";
               echo "{";
               echo "tresc[3]='".$row['city']."';";
               echo "}";
             };
           ?>
           Array.from(form).forEach(r => {
               switch (a) {
                 case 0:
                   r.innerHTML=id;
                   break;
                 case 1:
                   r.innerHTML=tresc[0];
                   break;
                 case 2:
                   r.innerHTML=tresc[1];
                   break;
                 case 3:
                   r.innerHTML=tresc[2];
                   break;
                 case 4:
                   r.innerHTML=tresc[3];
                   break;
                 case 5:
                   r.innerHTML="<form action='./scripts/delete3.php' method='post'><input type='submit' name='' value='usuń'><input type='text' style='display: none !important;' name='id' value='"+id+"'></form>";
                   break;
               }
               a=a+1;
           });
           document.getElementById("edit"+id).innerHTML="edytuj";
         }
       else
         {
           Array.from(form).forEach(r => {
               tresc.push(r.innerHTML);
               switch (a) {
                 case 0:
                   let zaw="<form action='./scripts/edit.php' id='form"+id+"' method='post'><input type='text' style='display: none !important;' name='id' value="+id+"></form>"+id;
                   r.innerHTML=zaw;
                   break;
                 case 1:
                   r.innerHTML="<input type='text' form='form"+id+"' class='forms"+id+"' name='name' value='"+tresc[1]+"'>";
                   break;
                 case 2:
                   r.innerHTML="<input type='text' form='form"+id+"' class='forms"+id+"' name='surname' value='"+tresc[2]+"'>";
                   break;
                 case 3:
                   r.innerHTML="<input type='date' form='form"+id+"' class='forms"+id+"' name='birthday' value='"+tresc[3]+"'>";
                   break;
                 case 4:
                   r.innerHTML="<td><select name='cityid' form='form"+id+"' class='forms"+id+"'><?php require("./scripts/connect.php"); $data = $baza->query('SELECT * FROM citys;'); while ($row = $data->fetch_assoc()) {echo "<option value='$row[id]' class='options";?>"+id+"<?php echo "' >$row[city]</option>";}?></select>";
                   break;
                 case 5:
                   r.innerHTML="<input type='submit' form='form"+id+"' name='' value='zapisz'><p id='editt"+id+"' style='display: none !important;'>1</p>";
                   break;
               }
               a=a+1;
           });
           let opt = document.querySelectorAll(".options"+id);
           Array.from(opt).forEach(o => {
               if(o.innerHTML==tresc[4])
               {
                 o.selected=true;
               }
           });
           document.getElementById("edit"+id).innerHTML="anuluj";
         }}});
 </script>

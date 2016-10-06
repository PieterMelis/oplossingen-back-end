<?php
$getalVanDeDag = 6; //getal tussen 1 en 7
$dag           = ""; // de mogelijke dag

switch ($getalVanDeDag) {
  case 1:
    $dag = "maandag";
    break;
  case 2:
    $dag = "dinsdag";
    break;
  case 3:
    $dag = "woensdag";
    break;
  case 4:
    $dag = "donderdag";
    break;
  case 5:
    $dag = "vrijdag";
    break;
  case 6:
    $dag = "zaterdag";
    break;
  case 7:
    $dag = "zondag";
    break;


  default:
    $dag = "error";

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Oplossing switch</h1>
  <p>
    De dag aan de hand van een getal ( <b><?php echo $getalVanDeDag; ?></b> ) is <b><?php echo $dag; ?></b>
  </p>
  </body>
</html>

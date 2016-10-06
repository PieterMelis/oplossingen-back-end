<?php
    $voornaam = "Pieter";
    $achternaam = "Melis";
    $volledigeNaam = $voornaam ." ". $achternaam;
    $stringLength = strlen($volledigeNaam)

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Oplossing concatenate</h1>
     <p>Mijn naam is <b><?php echo $volledigeNaam; ?></b></p>
     <p>Mijn naam heeft een lengte van <b><?php echo $stringLength; ?></b></p>
  </body>
</html>

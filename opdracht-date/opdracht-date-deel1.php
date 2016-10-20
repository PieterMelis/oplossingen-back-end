<?php

$timestamp =       mktime(22,35,25,01,21,1904);

 $date =          date('l jS \of F Y h:i:s A', $timestamp );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>date deel 1</title>
  </head>
  <body>
    <h1>date deel 1</h1>
    <h3><?=$date?></h3>
  </body>
</html>

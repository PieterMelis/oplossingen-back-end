<?php
	setlocale( 'LC_ALL', 'nld_nld' );
$timestamp =       mktime(22,35,25,01,21,1904);

 $date =          strftime('%d %B %Y, %H:%M:%S %p', $timestamp );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Date deel 2</title>
  </head>
  <body>
    <h1>Date deel 2</h1>
    <h3><?=$date?></h3>
  </body>
</html>

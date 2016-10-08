<?php
$lijsteMetGetallen    = $arrayName = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
$array_unique         =array_unique($lijsteMetGetallen);



 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>array functies deel 3</h1>
    <p>
      <h3>mijn array</h3>
      <?php echo var_dump($lijsteMetGetallen) ; ?>
    </p>
    <p>
      <h3>mijn unieke array</h3>
      <?php echo var_dump($array_unique) ; ?>
    </p>
    <p>
      <h3>mijn unieke array gesorteerd</h3>
      <?php sort($array_unique); echo var_dump($array_unique) ; ?>
    </p>
  </body>
</html>

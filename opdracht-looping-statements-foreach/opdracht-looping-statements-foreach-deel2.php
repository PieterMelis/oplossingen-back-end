<?php
$tekst = file_get_contents("text-file.txt");

$tekst = strtoupper($tekst);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>foreach-deel-2</title>
  </head>
  <body>
    <h1>foreach deel 2</h1>
    <?php foreach (count_chars($tekst, 1) as $key => $value): ?>
      <li><?= chr($key) ?> X <?= $value ?>   </li>
    <?php endforeach; ?>
  </body>
</html>

<?php
$text       = file_get_contents("text-file.txt");
$textChars  = str_split($text);

asort($textChars);
$arrReverse = array_reverse($textChars);
$arrText = array_count_values($textChars);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>foreach</title>
  </head>
  <body>
    <h1>foreach deel 1</h1>

    <ul>
  <?php foreach($arrText as $key => $val) : ?>
    <p> '  <?= $key ?>  ' => <?= $val ?></p>
  <?php endforeach; ?>
</ul>
  </body>
</html>

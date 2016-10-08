<?php
  $array1 =  array(1,2,3,4,5);
  $array2 =  array(5,4,3,2,1);
  $productgetal = array_product($array1);




for ($i=0; $i < count($array1); $i++) {
  if ($array1[$i] % 2 != 0) {
    $oneven[] = $array1[$i];
    }
}
for ($i=0; $i < count($array1) ; $i++) {
  if ($i <= count($array1)) {
    $nummer1 = $array1[$i];
    $nummer2 = $array2[$i];
    $totaal[] = $nummer1 + $nummer2;
  }
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>arrays basis: deel 2</h1>
    <p>
      Eerste array
      <ul>
         <?php foreach ($array1 as $key => $value): ?>
            <li>[<?= $key ?> ] <?= $value ?></li>
         <?php endforeach ?>
      </ul>
    </p>

    <p>
      Product van array1 is <?php echo $productgetal; ?>
    </p>
    <p>
      Oneven nummers
      <ul>
         <?php foreach ($oneven as $key => $value): ?>
            <li>[<?= $key ?> ] <?= $value ?></li>
         <?php endforeach ?>
      </ul>
    </p>

    <p>
      Tweede array
      <ul>
         <?php foreach ($array2 as $key => $value): ?>
            <li>[<?= $key ?> ] <?= $value ?></li>
         <?php endforeach ?>
      </ul>
    </p>

    <p>
      Optellen van Array1 en array2
      <ul>
         <?php foreach ($totaal as $key => $value): ?>
            <li>[<?= $key ?> ] <?= $value ?></li>
         <?php endforeach ?>
      </ul>
    </p>


  </body>
</html>

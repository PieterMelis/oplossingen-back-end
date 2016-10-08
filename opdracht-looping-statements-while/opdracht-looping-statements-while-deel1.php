<?php
$a    =0;
$i    =0;
$max  =100;



while($i < $max) {
  $i++;
  $array1[] = $i;
}


 //alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.
while ($a < $max) {
  if ($a % 3 == 0 && $a > 40 && $a < 80) {
    $tot[] = $a;
  }
  $a++;
}
 $getallenReeks1 = implode(", ",$array1 );
 $getallenReeks2 = implode(", ",$tot );
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>While deel 1</h1>
    <p>
      <h3>Van 1 - 100</h3>
      <?php echo $getallenReeks1; ?>
    </p>
    <p>
      <h3>Van 1 -100 && deelbaar door 3 && groter dan 40 && kleiner dan 80</h3>
      <?php echo $getallenReeks2; ?>
    </p>
  </body>
</html>

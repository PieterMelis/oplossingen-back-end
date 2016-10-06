<?php
  $seconden = 221108521;
  $minuten  =  221108521/60;
  $uren     =$minuten/60;
  $dagen    =$uren/24;
  $weken    =$dagen/7;
  $maanden  =$dagen/31;
  $jaren    =$dagen/365;




 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>
    <hr>
    <p>
      In <?php echo $seconden; ?> seconden.
    </p>
        <li>minuten: <?php echo intval($minuten); ?></li>
        <li>uren: <?php echo intval($uren); ?></li>
        <li>dagen: <?php echo intval($dagen); ?></li>
        <li>weken: <?php echo intval($weken); ?></li>
        <li>maanden: <?php echo intval($maanden); ?></li>
        <li>jaren: <?php echo intval($jaren); ?></li>
  </body>
</html>

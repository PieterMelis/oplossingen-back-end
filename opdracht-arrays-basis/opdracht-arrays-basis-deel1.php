<?php
$dierenLijst1 	 = 	array( 'koe', 'uil', 'kip', 'leeuw', 'gans', 'aap', 'walvis', "haai", "slang", "tijger" );
$dierenLijst2[0] = 'koe';
$dierenLijst2[1] = 'uil';
$dierenLijst2[2] = 'kip';
$dierenLijst2[3] = 'leeuw';
$dierenLijst2[4] = 'gans';
$dierenLijst2[5] = 'aap';
$dierenLijst2[6] = 'walvis';
$dierenLijst2[7] = 'haai';
$dierenLijst2[8] = 'slang';
$dierenLijst2[9] = 'tijger';

$voertuigenLijst = array(	'landvoertuigen' 	=> 	array('Vespa','auto'),
                          'watervoertuigen' => 	array('duikboot'),
                          'luchtvoertuigen' => 	array('luchtballon','vliegtuig') );
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>arrays basis deel1</h1>
    <?php var_dump($dierenLijst1)  ?>
    <?php var_dump($voertuigenLijst)  ?>
  </body>
</html>

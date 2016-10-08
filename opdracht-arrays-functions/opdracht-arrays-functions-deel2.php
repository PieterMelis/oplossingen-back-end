<?php
$arrayDieren = array('Filipijns spookdier', 'Blobvis', 'Zeenaaktslak', 'Vogelbekdier', 'Roodlippige vleermuisvis' );
$dier         = 'Angorakonijn';
$teZoekenDier = in_array($dier,$arrayDieren);
$tekst        = "";

$zoogdieren   = array('Witgezichtsaki','Dwergzijdeaapje','Wombat');
$dierenLijst  = array_merge($arrayDieren,$zoogdieren);






if ($teZoekenDier == true) {
  $tekst = $dier." zit in de arrayDieren";
} else {
  $tekst = $dier." zit niet in de arrayDieren";
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array functions deel1</h1>

    <?php echo var_dump($arrayDieren); ?>
    <p>
      Er zitten <?php echo count($arrayDieren); ?> dieren in de array
    </p>
    <h1>Array functions deel2</h1>
    <p>
      Gesorteerden array
      <?php sort($arrayDieren); echo  var_dump($arrayDieren) ; ?>

    </p>

    <p>
      Samengevoegde array
      <?php echo  var_dump($dierenLijst) ; ?>

    </p>

  </body>
</html>

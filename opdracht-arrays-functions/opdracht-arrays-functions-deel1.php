<?php
$arrayDieren = array('Filipijns spookdier', 'Blobvis', 'Dwergzijdeaapje', 'Vogelbekdier', 'Witgezichtsaki' );
$dier         = 'Angorakonijn';
$teZoekenDier = in_array($dier,$arrayDieren);
$tekst        = "";

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
    <p>
      <?php echo $tekst; ?>
    </p>
  </body>
</html>

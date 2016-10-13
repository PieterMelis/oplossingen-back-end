
  <?php
    $rijen = 10;
    $kolommen = 10;

    $resultaat = array();

    for ($i=0; $i < $rijen+1; $i++){
      $tempArray = array();
      for ($a=0; $a < $kolommen+1; $a++){
        $tempArray[] = $i * $a;
      }
      $resultaat[$i] = $tempArray;

    }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <h1>For deel 3</h1>
    <ul>

      <?php foreach ($resultaat as $tafel => $tafelResultaten): ?>
        <?= $tafel ?>
        <ul>
          <?php foreach ($tafelResultaten as $key => $value): ?>
             <li>[ <?= $key ?>  ]  => <?= $value ?></li>
          <?php endforeach ?>
        </ul>

      <?php endforeach ?>




    </ul>




  </body>
</html>

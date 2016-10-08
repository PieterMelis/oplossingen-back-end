
  <?php
    $rijen = 10;
    $kolommen = 10;

    for ($i=0; $i < $rijen+1; $i++){
      for ($a=0; $a < $kolommen+1; $a++){
        $tot[] = $i * $a;
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
    <h1>For deel 3</h1>
    <ul>

         <?php foreach ($tot as $key => $value): ?>
            <li>[ <?= $key ?>  ]  => <?= $value ?></li>
         <?php endforeach ?>


    </ul>




  </body>
</html>

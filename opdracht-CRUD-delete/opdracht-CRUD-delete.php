<?php

$message	=	"";

try
{
  $db     = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
  $bieren	=	array();
  $uno    = 1;

  $queryString = 'SELECT * FROM brouwers';;
  $brouwers = $db->prepare($queryString);
  $brouwers->execute();
  $brouwArr = array();
  while ($brouwernaam = $brouwers->fetch(PDO::FETCH_ASSOC))
  {
      $brouwArr[] = $brouwernaam;
  }

}

    catch (Exception $e)
    {
        $message = "Connectie is niet gelukt.";
    }


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Opdracht CRUD query</title>
  </head>
  <style media="screen">
    td{
      border: 1px  solid black;
      margin: 0;
      padding: 1em;
      background: lightgrey;
    }

  </style>

  <body>
    <?php echo $message?>
    <h1>Opdracht CRUD delete</h1>

    <table>

        <thead>
          <tr>
                 <th>biernummer</th>
                 <th>bier</th>
                 <th>adres</th>
                 <th>postcode</th>
                 <th>gemeente</th>
                 <th>omzet</th>

             </tr>
        </thead>

        <tbody>
          <?php foreach ($brouwArr as $key => $bier): ?>
             <tr>
                 <?php foreach ($bier as $naam): ?>
                 <td><?= $naam ?></td>
                 <?php endforeach ?>
                 <td><input type="image" src="img/icon-delete.png" border="0" alt="Submit" value="<?= $key ?>" /></td>
             </tr>
         <?php endforeach ?>
        </tbody>

    </table>
</body>
</html>

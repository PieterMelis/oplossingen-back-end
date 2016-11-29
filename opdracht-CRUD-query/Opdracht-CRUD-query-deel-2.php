<?php

$message	=	"";

try
{
  $db     = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken
  $bieren	=	array();
  $uno    = 1;

   $queryString = 'SELECT brouwernr as "Aantal", brnaam as "naam" FROM brouwers';
        $bieren = $db->prepare($queryString);
        $bieren->execute();
        $bierArr = array();
        while ($bier = $bieren->fetch(PDO::FETCH_ASSOC))
        {
            $bierArr[] = $bier;
        }
        $biermerken = array();
        foreach($bierArr[1] as $merk => $bier)
        {
            $biermerken[] = $merk;
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
      padding: 0;
      background: lightgrey;
    }

  </style>

  <body>
    <?php echo $message?>
    <table>

        <thead>
          <h1>Opdracht CRUD query deel 2</h1>
            <tr>
                <?php foreach ($biermerken as $biermerk): ?>
                    <th><?= $biermerk ?></th>
                <?php endforeach ?>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($bierArr as $bierdetails): ?>
                <tr>
                    <?php foreach ($bierdetails as $detail): ?>
                    <td><?= $detail ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>

        </tbody>

    </table>
</body>
</html>

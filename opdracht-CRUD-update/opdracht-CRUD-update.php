
<?php
// made by Pieter Melis

$show=false;// bool om te form te verbergen
$message	=	"";// zal boodschap weergeven
try
{
  //database verbinding
  $db     = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );



// delete button
  if(isset($_POST["delete"]))
		{
      $del   = $_POST["delete"];
      $queryString = 'DELETE FROM brouwers WHERE brouwernr = :brouwernr';
      $delete = $db->prepare( $queryString);
      $delete->bindvalue(":brouwernr", $del );

      $deleted 	=	$delete->execute();

      if ( $deleted )
      {
          $message = "goed verwijderd";
      }
      else
      {
          $message = "niet goed verwijderd. Probeer later opnieuw";
      }

    }
    // update button
    if(isset($_POST["update"]))
    {
      $upd    = $_POST['update'];

      $queryString = 'SELECT * FROM brouwers WHERE brouwernr = :brouwernr';
			$update = $db->prepare($queryString);
			$update->bindValue( ':brouwernr', $upd);
			$update->execute();
      while ($row = $update->fetch(PDO::FETCH_ASSOC)) {
      $dbUpdate = $row;
    }
    $show=true;

    }
    if (isset($_POST['wijzigen'])) {
			$querydbUpdate = 'UPDATE brouwers
          							SET 	brnaam = :brnaam,
            									adres = :adres,
            									postcode = :postcode,
            									gemeente = :gemeente,
            									omzet = :omzet
          							WHERE brouwernr = :brouwernr';
			$updateValue = $db->prepare($querydbUpdate);
			$updateValue->bindValue(":brouwernr", $_POST['brouwernr']);
			$updateValue->bindValue(":brnaam", $_POST['brnaam']);
			$updateValue->bindValue(":adres", $_POST['adres']);
			$updateValue->bindValue(":postcode", $_POST['postcode']);
			$updateValue->bindValue(":gemeente", $_POST['gemeente']);
			$updateValue->bindValue(":omzet", $_POST['omzet']);
			if ($updateValue->execute() ) {
				$message = "Wijzigen gelukt";
			}
			else
			{
				$message ="Wijzigen is niet gelukt: ";
			}
		}
    //haal alles uit database van brouwers d.m.v select
    $brouwersQuery = "SELECT * FROM brouwers";
    $brouwers = $db->prepare($brouwersQuery);
    $brouwers->execute();// uitvoeren

    $bierenArr = array();
    while($bier = $brouwers->fetch(PDO::FETCH_ASSOC))
    {
      $bierenArr[] = $bier;
    }
    $tTitel = array();
    foreach($bierenArr[1] as $titel => $bier)
        {
            $tTitel[] = $titel;
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
    <title>Opdracht CRUD update</title>

  </head>

  <style>
  		tr:nth-child(even) {background-color: lightgrey;}
  	</style>



  <body>


<?php if ($show): ?>
      <h1>Brouwerij <?= $dbUpdate['brnaam'] ?> ( #<?= $dbUpdate['brouwernr'] ?> ) wijzigen</h1>
  <form action="opdracht-CRUD-update.php" method="POST">

    <form>
      <ul>
				<li>
					<label for="brouwernaam">brouwernaam: </label>
					<input type="text" value="<?= $dbUpdate['brnaam']?>" id="brnaam" name="brnaam">
				</li>

				<li>
					<label for="adres">adres: </label>
					<input type="text" value="<?= $dbUpdate['adres']?>" id="adres" name="adres">
				</li>

				<li>
					<label for="postcode">postcode: </label>
					<input type="text" value="<?= $dbUpdate['postcode']?>" id="postcode" name="postcode">
				</li>

				<li>
					<label for="gemeente">gemeente: </label>
					<input type="text" value="<?= $dbUpdate['gemeente']?>" id="gemeente" name="gemeente">
				</li>

				<li>
					<label for="omzet">omzet: </label>
					<input type="text" value="<?= $dbUpdate['omzet']?>" id="omzet" name="omzet">
					<input type="hidden" id="brouwernr" name="brouwernr" value="<?= $dbUpdate['brouwernr'] ?>">
				</li>
			</ul>

      <button type="submit" name="wijzigen" value="wijzigen">Wijzigen</button>
  </form>

<?php endif; ?>
<form action="opdracht-CRUD-update.php" method="POST">
  		<table>
  			<thead>
  				<tr>
  					<?php foreach ($tTitel as $kolom): ?>
                <th><?= $kolom ?></th>
            <?php endforeach ?>
  				</tr>
  			</thead>

  			<tbody>
  				<?php foreach ($bierenArr as $key => $brouw): ?>
  					<tr>
  						<?php foreach ($brouw as $value): ?>
  							<td><?= $value ?></td>
  						<?php endforeach ?>
  						<td>
                <button type="submit" name="delete" value="<?= $brouw['brouwernr'] ?>" class="delete-button">
  								<img src="img/icon-delete.png" alt="Delete button">
  							</button>
              </td>
							<td>
                <button type="submit" name="update" value="<?= $brouw['brouwernr'] ?>" class="update-button">
  								<img src="img/icon-update.png" alt="Update button">
								</button>
							</td>
  					</tr>
  				<?php endforeach ?>

  			</tbody>

  		</table>
    </form>


  	</form>
  </body>
</html>


<?php
$show=false;
$message	=	"";
try
{
  $db     = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
  if(isset($_POST["update"]))
  {
    $show=true;
  }

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

    $brouwersQuery = "SELECT * FROM brouwers";
		$brouwers = $db->prepare($brouwersQuery);
		$brouwers->execute();

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
  <form action="opdracht-CRUD-update.php" method="POST">

    <form>
      <ul>
          <li>
              <label for="brouwernaam">Brouwernaam</label>
              <input type="text" id="brouwernaam" name="brouwernaam" value="Achouffe">
          </li>
          <li>
              <label for="adres">adres</label>
              <input type="text" id="adres" name="adres" value="Route du Village 32">
          </li>
          <li>
              <label for="postcode">postcode</label>
              <input type="text" id="postcode" name="postcode" value="6666">
          </li>
          <li>
              <label for="gemeente">gemeente</label>
              <input type="text" id="gemeente" name="gemeente" value="Achouffe-Wibrin">
          </li>
          <li>
              <label for="omzet">omzet</label>
              <input type="text" id="omzet" name="omzet" value="10000">
          </li>
      </ul>
      <input type="submit" name="submit">
  </form>
<?php endif; ?>


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
  </body>
</html>

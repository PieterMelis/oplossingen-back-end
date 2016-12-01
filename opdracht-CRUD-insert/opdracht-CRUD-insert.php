<?php
	$message = "";

	if(isset($_POST[ 'submit' ]))
	{
		try
		{
      //Maak een connectie met de database en selecteer de database bieren.
			$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
			$brouwerQuery = 'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet)
							         values (:brnaam, :adres, :postcode, :gemeente, :omzet)';
			$brouwer = $db->prepare($brouwerQuery);
			$brouwer->bindValue(':brnaam', $_POST['brnaam']);
			$brouwer->bindValue(':adres', $_POST['adres']);
			$brouwer->bindValue(':postcode', $_POST['postcode']);
			$brouwer->bindValue(':gemeente', $_POST['gemeente']);
			$brouwer->bindValue(':omzet', $_POST['omzet']);
			try
			{
				$brouwerAdd = $brouwer->execute();
				$insertID = $db->lastInsertId();
				$message = "brouwerij toegevoegd met brouwerijnummer ".$insertID;
			}
			catch (exception $e)
			{
				$message = "brouwer niet kunnen toevoegen";
			}
		}
    //Zorg ervoor dat wanneer er niet kan geconnecteerd worden met de database, er een custom foutboodschap verschijnt, inclusief de specifieke fout.
		catch (exception $e)
		{
			$message = "connectie niet gelukt";
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht-CRUD-insert</title>
  </head>
  <body>

	<h1>Voeg een brouwer toe</h1>

	<?= $message ?>
    <form action="opdracht-CRUD-insert.php" method="POST">

    		<ul>
    			<li>
    				<label for="brnaam">Brouwernaam</label>
    				<input type="text" name="brnaam" id="brnaam">
    			</li>
    			<li>
    				<label for="adres">Adres</label>
    				<input type="text" name="adres" id="adres">
    			</li>
    			<li>
    				<label for="postcode">Postcode</label>
    				<input type="text" name="postcode" id="postcode">
    			</li>
    			<li>
    				<label for="gemeente">Gemeente</label>
    				<input type="text" name="gemeente" id="gemeente">
    			</li>
    			<li>
    				<label for="omzet">Omzet</label>
    				<input type="text" name="omzet" id="omzet">
    			</li>
    		</ul>

    		<input type="submit" value="Verzenden" name="submit">
    	</form>
  </body>
</html>

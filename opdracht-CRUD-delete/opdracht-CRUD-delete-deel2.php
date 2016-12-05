<?php

$message	=	"";
$deleteConfirm = false;
$deleteId		=	false;
try
{
  $db     = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );

  if ( isset( $_POST[ 'confirm' ] ) )
  {
	  $deleteConfirm	=	true;
	  $deleteId		=	$_POST[ 'confirm' ];
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
  <style media="screen">
  <style>
  		tr:nth-child(even) {background-color: lightgrey;}
  	</style>

  </style>

  <body>
    <?php if ( $message ): ?>
   <div>
     <?= $message ?>
   </div>
   <?php endif ?>

   <?php if ( $deleteConfirm ): ?>
   <div>
     Bent u zeker dat u deze record wilt verwijderen?
     <form action="opdracht-CRUD-update.php" method="POST">

       <button type="submit" name="delete" value="<?= $deleteId ?>">
         zeker!
       </button>

       <button type="submit">
         Ongedaan maken
       </button>

     </form>
   </div>
 <?php endif ?>







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
									<img src="img/update.png" alt="Update button">
								</button>
							</td>
  					</tr>
  				<?php endforeach ?>

  			</tbody>

  		</table>
  	</form>
  </body>
</html>

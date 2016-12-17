<?php
session_start();

if(isset($_SESSION['errorGegevens'])){
  $error = $_SESSION['errorGegevens'];
}

if(!isset($_COOKIE["login"]))
	{
		$_SESSION['errorLogin'] = "U moet eerst inloggen";
		header("Location: login-form.php?");
	}
	else
	{
    $user = array();
    $user = explode(",",$_COOKIE["login"]);
        try {
          $db = new PDO("mysql:host=localhost;dbname=opdracht-file-upload2", "root", "");

          $queryCheckUser = "SELECT * FROM users where email = :email";
          $statement = $db->prepare($queryCheckUser);
          $statement->bindValue(":email", $user[0]);
          $statement->execute();
          $fetchRowLog = array();
          while ( $usertje  = $statement->fetch(PDO::FETCH_ASSOC) )
          {
            $fullUser[]	=	$usertje ;
          }
          $profo = $fullUser[0]['profile_picture'];
          $_SESSION["id"] = $fullUser[0]['id'];
          $_SESSION["foto"] = $profo;


        } catch (Exception $e) {
          $_SESSION["errorLogin"]="Er is iets fout met de database en kan img niet vinden";
          header('location: login-form.php' );

        }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>gegevens-wijzigen-form</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <p class="error"><?php if(isset($error)) {echo $error;}?></p>
      <p><a  href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $user[0]; ?> | <a  href="logout.php">uitloggen</a></p>
      <h1 >Gegevens wijzigen</h1>
      <br>
      <p>Profielfoto</p>
      <form action="gegevens-bewerken.php" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="profile_picture">
                    <img class="profile-picture" src="img/<?php if($profo){ echo $profo;}else{echo "default.jpg";} ?>" alt="Profielfoto">
                </label>
                <input type="file" name="file" value="Choose file">
            </li>

            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email" name="email" value="<?= $user[0]; ?>">
            </li>
        </ul>
        <input type="submit" name="submit" value="Gegevens wijzigen">
    </form>


  </body>
</html>

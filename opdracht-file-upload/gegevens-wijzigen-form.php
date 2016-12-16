<?php
session_start();
$user = array();
$login=false;

  $user = explode(",",$_COOKIE["login"]);


        try {
          $db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

          $queryCheckUser = "SELECT * FROM users where email = :email";
          $statement = $db->prepare($queryCheckUser);
          $statement->bindValue(":email", $user[0]);
          $statement->execute();
          $fetchRowLog = array();
          while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
          {
            $fetchRowLog[]	=	$row;
          }
          var_dump( $fetchRowLog);

        } catch (Exception $e) {
          $_SESSION["errorLogin"]="Er is iets fout met de database en kan img niet vinden";
          header('location: login-form.php' );

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
      <p><a  href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?= $user[0]; ?> | <a  href="logout.php">uitloggen</a></p>
      <h1 >Gegevens wijzigen</h1>
      <br>
      <p>Profielfoto</p>
      <form>
        <ul>
            <li>
                <label for="profile_picture">
                    <img class="profile-picture" src="" alt="Profielfoto">
                </label>
                <input type="file" id="profile_picture" name="profile_picture">
            </li>

            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email" name="email" value="<?= $user[0]; ?>">
            </li>
        </ul>
        <input type="submit" value="Gegevens wijzigen">
    </form>


  </body>
</html>

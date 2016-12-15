<?php
session_start();
$user = array();
$login=false;
if(isset($_COOKIE['login'])){

  $user = explode(",",$_COOKIE["login"]);
  $userP  = $user[1];
  $databasePwd = database($user[0]);

if($databasePwd === $userP)
      {
        $login=true;
      }
      else
      {
        $_SESSION["errorLogin"]= "werkt niet " . $user[1]. "  ". $databasePwd;
        header('location: login-form.php' );
      }

    }

      function database($email)
      {
        // Connectie tot database
        try {
          $db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

          $queryCheckUser = "SELECT hashed_password FROM users where email = :email";
          $checkUser = $db->prepare($queryCheckUser);
          $checkUser->bindValue(":email", $email);
          $checkUser->execute();
          $result = $checkUser->fetch(PDO::FETCH_ASSOC);
          return $result["hashed_password"];
        } catch (Exception $e) {
          $_SESSION["errorLogin"]="Er is iets fout met de database";
          header('location: login-form.php' );
          $login=false;
        }
      }



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php if ($login): ?>

    <?php endif; ?>
    <h1 >Dashboard</h1>

    <a  href="logout.php">uitloggen</a>

  </body>
</html>

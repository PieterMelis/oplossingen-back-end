<?php
session_start();
$user = array();
$login=false;
if(isset($_COOKIE['login'])){

  $user = explode(",",$_COOKIE["login"]);
  $database = database($user[0]);


if($database == $user[1])
      {
        $login=true;
      }
      else
      {
        $_SESSION["errorLogin"]= "werkt niet ";
        header('location: login-form.php' );
      }

    }

      function database($email)
      {
        // Connectie tot database
        try {
          $db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

          $queryCheckUser = "SELECT * FROM users where email = :email";
          $checkUser = $db->prepare($queryCheckUser);
          $checkUser->bindValue(":email", $email);
          $checkUser->execute();
          $result = $checkUser->fetch(PDO::FETCH_ASSOC);

          $_SESSION["test"] = $result["hashed_password"];
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

      <h1 >Dashboard</h1>
      <br>
      <a  href="logout.php">uitloggen</a>
    <?php endif; ?>

  </body>
</html>

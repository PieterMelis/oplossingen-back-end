<?php
session_start();
$login=false;
if(isset($_COOKIE['login'])){

  $user = explode(",",$_COOKIE["login"]);
	$email  = $user[0];
	$hashCookie = $user[1];
// Connectie tot database
try {
  $db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

  $queryCheckUser = "SELECT * FROM users WHERE email = :email";
  $checkUser = $db->prepare($queryCheckUser);
  $checkUser->bindValue(":email", $_SESSION["email"]);
  $checkUser->execute();
  $userExists = $checkUser->fetch(PDO::FETCH_ASSOC);
  $test = $userExists["email"];

} catch (Exception $e) {
  $_SESSION["errorLogin"]="Er is iets fout met de database";
  header('location: login-form.php' );
  $login=false;
}

if($hashCookie == $test)
    {
      $login=true;
    }
    else
    {
      $_SESSION["errorLogin"]="Er is iets fout gelopen, probeer het later opnieuw".$hashCookie."xxxxxxxxxxxxxx".$hashDatabase;
      header('location: login-form.php' );
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

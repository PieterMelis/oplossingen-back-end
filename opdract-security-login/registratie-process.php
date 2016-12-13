<?php
session_start();
$emailIsValid = false ;
$db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

if (isset($_POST["email"])) {
  $email = $_POST["email"];
  $_SESSION["email"] = $email;

  echo $email;
}
if (isset($_POST["paswoord"])) {
  $pwd = $_POST["paswoord"];
  $_SESSION["paswoord"] = $pwd;

  echo $pwd;
}
$_SESSION["text"] = "";

if (isset($_POST['random'])) {

//als de genereer een paswoord is ingedrukt
  $pwd = true;
//aanmaken van function
  function generatePassword()
  {
		//lengte van wachtwoord
    $pwdL         = 8;
    $letter       = array();
    $hoofdletters = 'ABCDEFGHIJKLNMOPQRSTUVWXYZ';
    $letters      = 'abcdefghijklnmopqrstuvwxyz';
    $cijfers      = '0123456789';
    $HLC          = $hoofdletters . $letters . $cijfers;
    //splitsen van string in chars
    $arrayHLC     = str_split($HLC);
    //loop door string om random paswoord te genereren
    for ($i=0; $i < $pwdL; $i++) {
      $rand_keys = array_rand($arrayHLC,2);
      array_push($letter, $arrayHLC[$rand_keys[1]]) ;
    }
    return implode($letter) ;
  }

  $_SESSION["pwd"] = generatePassword();
  header("location: registratie-form.php");
}

if(isset($_POST[ 'opslaan' ]))
{
  if ($_SESSION["email"] == "" || strpos($_SESSION["email"] , '@') == false ) {
    $_SESSION["text"] = "vul een geldig email in!";
    header("location: registratie-form.php");
  }else {

    $queryCheckUser = "SELECT * FROM users WHERE email = :email";
    $statementCheckUser = $db->prepare($queryCheckUser);
    $statementCheckUser->bindValue(":email", $_SESSION["email"]);
    $statementCheckUser->execute();
    $userExists = $statementCheckUser->fetch(PDO::FETCH_ASSOC);
    var_dump($userExists["email"]);
    if ($userExists["email"] == $_SESSION["email"]) {
      $_SESSION["text"] = "Dit email heb je al";
      header("location: registratie-form.php");
    }
    else {
      insertUser();
    }

  }
}

function insertUser()
{
      //Maak een connectie met de database en selecteer de database

      $salt = uniqid(mt_rand(), true);
      $saltedPassword = $_SESSION["paswoord"] . $salt;
      $hashedPassword = hash('sha512', $saltedPassword);
      $queryUser = "INSERT INTO users(email, salt, hashed_password, last_login_time) VALUES(:email, :salt, :hashed_password, NOW()) ";
      $userBindValue = $db->prepare($queryUser);
      $userBindValue->bindValue(":email", $_SESSION["email"]);
      $userBindValue->bindValue(":salt", $salt);
      $userBindValue->bindValue(":hashed_password", $hashedPassword);
      $UserAdded = $userBindValue->execute();

  }



?>

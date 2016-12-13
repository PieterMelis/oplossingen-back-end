<?php
session_start();
$emailIsValid = false ;

if (isset($_POST["email"])) {
  $email = $_POST["email"];
}

if (isset($_POST["paswoord"])) {
  $pwd = $_POST["paswoord"];
  $_SESSION["paswoord"] = $pwd;
}

$_SESSION["text"] = "";

if (isset($_POST['random'])) {
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

    $_SESSION["email"] = $email;
    $db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

    $queryCheckUser = "SELECT * FROM users WHERE email = :email";
    $checkUser = $db->prepare($queryCheckUser);
    $checkUser->bindValue(":email", $_SESSION["email"]);
    $checkUser->execute();
    $userExists = $checkUser->fetch(PDO::FETCH_ASSOC);
    var_dump($userExists["email"]);

    if ($userExists["email"] == $_SESSION["email"]) {
      $_SESSION["text"] = "Dit email heb je al";
      header("location: registratie-form.php");
    }
    else
    {
      try
      	{
      		insertUser();
      		$cookieValue = $mail  . "," . hash('SHA512',  $mail  . $salt);
      		setcookie('login',$cookieValue, time() + 60*60*24);
		  		header("Location: dashboard.php?");
      	}
      	catch (exception $e)
      	{
      		$_SESSION['text'] = "Insert niet gelukt";
	  		       header("Location: registratie-form.php?");
      	}

    }

  }
}
//zal een user toevoegen
function insertUser()
{
      //Maak een connectie met de database en selecteer de database
      $db = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", "");

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

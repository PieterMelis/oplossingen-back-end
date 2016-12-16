<?php
session_start();

if(isset($_POST['login']))
{
  $email = $_POST['email'];
  $paswoord = $_POST['password'];

  $db = new PDO("mysql:host=localhost;dbname=opdracht-file-upload2", "root", "");

  $querySelector  = 'SELECT * FROM users WHERE email = :email';
  $bind       = $db->prepare($querySelector);
  $bind->bindValue(':email' , $email);
  $bind->execute();
  $user = $bind->fetch(PDO::FETCH_ASSOC);

  if($email != $user['email'])
  {
    $_SESSION['errorLogin'] = "Email werd niet gevonden in de database.";
    header('location: login-form.php' );
  }
  else
  {
    $salt = $user['salt'];
    $saltedPassword = $paswoord . $salt;
    $newHash = hash("sha512", $saltedPassword);
    $dbHash = $user['hashed_password'];

    if($newHash != $dbHash)
    {
      $_SESSION['errorLogin'] = "Er is een fout in het wachtwoord.";
      header('location: login-form.php' );
    }
    else
    {
      $_SESSION['errorLogin'] = "Je bent binnen!";
      $cookieValue = $user["email"]  . "," . $user["hashed_password"];
      setcookie('login',$cookieValue, time() + 60*60*24);
      header("Location: dashboard.php?");
    }
}
}
?>

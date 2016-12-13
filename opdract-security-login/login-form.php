<?php
session_start();
$error = "";
if (isset($_SESSION['loginText'])) {
  $error = $_SESSION['loginText'];
}
var_dump($_SESSION);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <title></title>
  </head>
  <body>

      <p><?php if(isset($error)) {echo $error;}?></p>

    <h1 class="text-center">Inloggen</h1>
    </div>
    <form action="login-process.php" method="post">

      <div>
        <label for="email">e-mail</label>
        <input type="text" name="email" value="">
      </div>
      <div>
        <label for="password">paswoord</label>
        <input type="text" name="password" value="">
      </div>
        <input class="button" type="submit" name="login" value="Login">
      </div>

      <p >Nog geen account? Maak er dan eentje aan op de <a  href="">registratiepagina</a>.</p>
    </form>

  </body>
</html>

<?php
session_start();
if (isset($_SESSION['errorLogin'])) {
  $error = $_SESSION['errorLogin'];
}
var_dump($_SESSION);
$_SESSION['errorLogin'] = "";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <p class="error"><?php if(isset($error)) {echo $error;}?></p>

    <h1 >Inloggen</h1>
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

      <p >Nog geen account? Maak er dan eentje aan op de <a  href="registratie-form.php">registratiepagina</a>.</p>
    </form>

  </body>
</html>

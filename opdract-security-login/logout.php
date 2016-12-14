<?php
session_start();
$message = '';
$loginForm = 'login-form.php';
unset($_SESSION['login']);

setcookie('login', '', time()-3600);
$_SESSION['out'] = "U bent uitgelogd.";
header('refresh:3;url=' . $loginForm );

if(isset($_SESSION['out'])) {
  $message = $_SESSION['out'];
}
var_dump($_SESSION);
var_dump($_COOKIE);


session_unset(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>logout</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>logout</h1>
    <p><?= $message ?></p>

  </body>
</html>

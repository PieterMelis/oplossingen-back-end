<?php
$error = "";
if (isset($_SESSION['text'])) {
  $error = $_SESSION['text'];
}
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
      <h1>Login</h1>
      <p><?php if(isset($_SESSION['text'])) {echo $_SESSION['text'];}?></p>
  </body>
</html>

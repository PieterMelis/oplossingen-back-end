<?php
  session_start();

  if (isset($_POST["submit"]))
{
  $straat     = $_POST['straat'];
  $nummer     = $_POST['nummer'];
  $gemeente   = $_POST['gemeente'];
  $postcode   = $_POST['postcode'];

  $_SESSION['straat']   = $straat;
  $_SESSION['nummer']   = $nummer;
  $_SESSION['gemeente'] = $gemeente;
  $_SESSION['postcode'] = $postcode;
}



 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Overzichtspagina</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
  </head>
  <body>
    <h1>Overzichtspagina</h1>
    <ul>
      <li><p>Email :    <?php if (isset($_SESSION["email"])) { echo $_SESSION["email"]; } ?>   |  <a href="Registratiepagina.php?wijzig=email">wijzig</a></p></li>
      <li><p>Nickname : <?php if (isset($_SESSION["nickname"])) { echo $_SESSION["nickname"]; } ?>    |  <a href="Registratiepagina.php?wijzig=nickname">wijzig</a></p></li>
    </ul>
    <ul>
      <li><p>Straat :   <?php echo $_SESSION["straat"]    ?>    |  <a href="Adrespagina.php?wijzig=straat">wijzig</a></p></li>
      <li><p>Nummer :   <?php echo $_SESSION["nummer"]    ?>    |  <a href="Adrespagina.php?wijzig=nummer">wijzig</a></p></li>
      <li><p>Gemeente : <?php echo $_SESSION["gemeente"]  ?>    |  <a href="Adrespagina.php?wijzig=gemeente">wijzig</a></p></li>
      <li><p>Postcode : <?php echo $_SESSION["postcode"]  ?>    |  <a href="Adrespagina.php?wijzig=postcode">wijzig</a></p></li>
    </ul>
  </body>
</html>

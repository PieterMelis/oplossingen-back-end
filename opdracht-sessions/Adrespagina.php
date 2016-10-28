<?php
  session_start();
  $straatActive ="";
  $nummerActive ="";
  $gemeenteActive ="";
  $postcodeActive="";

  if (isset($_POST["submit"]))
{
  $email = $_POST['email'];
  $nickname = $_POST['nickname'];

  $_SESSION['email'] = $email;
  $_SESSION['nickname'] = $nickname;
}

if(isset($_GET["wijzig"]))
{
  if ($_GET["wijzig"]=="straat")
  {
    $straatActive="active";
  }
  elseif($_GET["wijzig"]=="nummer")
  {
    $nummerActive="active";
  }
  elseif($_GET["wijzig"]=="gemeente")
  {
    $gemeenteActive="active";
  }
  elseif($_GET["wijzig"]=="postcode")
  {
    $postcodeActive="active";
  }
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Registratiegegevens</h1>

    <ul>
        <li><?php if (isset($_SESSION["email"])) { echo $_SESSION["email"]; } ?></li>
        <li><?php if (isset($_SESSION["nickname"])) { echo $_SESSION["nickname"]; } ?></li>
    </ul>

    <h1>Deel 2: adres</h1>
    <form action="Overzichtspagina.php" method="post">
        <ul>
            <li>
                <label for="straat">straat</label>
                <input class="<?php echo $straatActive ?>" type="text" id="straat" name="straat" value="<?php if (isset($_SESSION["straat"])) { echo $_SESSION["straat"]; } ?>">
            </li>
            <li>
                <label for="nummer">nummer</label>
                <input class="<?php echo $nummerActive ?>"  type="number" id="nummer" name="nummer" value="<?php if (isset($_SESSION["nummer"])) { echo $_SESSION["nummer"]; }  ?>">
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input class="<?php echo $gemeenteActive ?>"  type="text" id="gemeente" name="gemeente" value="<?php if (isset($_SESSION["gemeente"])) { echo $_SESSION["gemeente"]; } ?>">
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input class="<?php echo $postcodeActive ?>"  type="text" id="postcode" name="postcode" value="<?php if (isset($_SESSION["postcode"])) { echo $_SESSION["postcode"]; }  ?>">
            </li>
        </ul>
        <input type="submit" value="Volgende"  name="submit">


        <a href="Registratiepagina.php?destroy=true"  name="destroy" >Destroy Session</a>
    </form>
  </body>
</html>

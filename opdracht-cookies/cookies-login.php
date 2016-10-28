<?php
$file = file_get_contents('gegevens.txt');
$gegevens = explode(',', $file);
$error    = "";
$online = false;
$info ="";

if (isset($_POST["submit"])) {
echo $_POST['username']." ";
echo $_POST['password']." ";
echo $gegevens[0];
echo $gegevens[1];

  if ($_POST['username']== $gegevens[0] && $_POST['password']==$gegevens[1])
  {
    
    setcookie('cookie', "", time() + 6000);
    $online = true;
  }
  else
  {
    $error =  "Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw";
  }
}
if (isset($_GET["Uitloggen"]))
{
    setCookie("cookie", "", time() - 1000);
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>

    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css"[submit]    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
  </head>
  <body>
    <?php if (!$online): ?>
      <h1>Inloggen</h1>
      <div class="error">
          <?php echo $error; ?>
      </div>
      <form action="cookies-login.php" method="post">
          <ul>
              <li>
                  <label for="gebruikersnaam">gebruikersnaam</label>
                  <input type="text" id="gebruikersnaam" name="username">
              </li>
              <li>
                  <label for="paswoord">paswoord</label>
                  <input type="text" id="paswoord" name="password">
              </li>
          </ul>
          <input type="submit" name="submit">
      </form>
    <?php else: ?>
      <h1>Dashboard</h1>
      <p>
        <?php $info ?>
      </p>
      <a href="cookies-login.php?Uitloggen">Uitloggen</a>
    <?php endif; ?>

  </body>
</html>

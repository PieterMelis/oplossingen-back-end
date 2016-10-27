<?php
  session_start();


  $emailActive="";
  $nicknameActive="";
    if(isset($_GET["wijzig"]))
    {
    	if ($_GET["wijzig"]=="email")
    	{
    		$emailActive="active";
    	}
    	if ($_GET["wijzig"]=="nickname")
    	{
    		$nicknameActive="active";
    	}
    }



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sessions</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Registratiepagina</h1>

    <form  action="Adrespagina.php" method="post">
      <ul>
          <li>
            <label for="email">e-mail</label>
            <input  class="<?php echo $emailActive ?> " type="text" name="email" id="email" value="<?php if (isset($_SESSION["email"])) { echo $_SESSION["email"]; } ?>">
          </li>
          <li>
            <label for="nickname">nickname</label>
            <input class="<?php echo $nicknameActive ?>" type="text" name="nickname" id="nickname" value="<?php if (isset($_SESSION["nickname"])) { echo $_SESSION["nickname"]; } ?>">
          </li>
          </ul>
            <input type="submit" name="submit" value="Volgende">
    </form>
  </body>
</html>

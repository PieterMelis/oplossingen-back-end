
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
  </head>
  <body>
    <h1>Registreren</h1>
    <br>
    <form  action="registreren.php" method="post">
      <ul>
        <li>
          <label for="email">email</label>
          <input type="text" name="email" value="">
        </li>
        <li>
          <label for="email">paswoord</label>
          <input type="text" name="email" value="">
          <button type="submit" name="random" value="random">random</button>
        </li>
      </ul>
      <button type="submit" name="opslaan" value="opslaan">opslaan</button>
    </form>

  </body>
</html>

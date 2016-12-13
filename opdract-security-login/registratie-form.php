<!---->
<?php
$email		=	'';
$password	=	'';

session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}
var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registreren</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
		<style media="screen">
			.error{
				background-color: red;
				width: 100%;
				color: white;
				text-align: center;
			}
		</style>
  </head>
  <body>
		<div class="error">
			<?php
			if(isset($_SESSION["text"]))
			{
					echo  $_SESSION["text"];
			}
			?>
		</div>
    <h1>Registreren</h1>
    <br>
    <form  action="registratie-process.php" method="post">
      <ul>
        <li>
          <label for="email">email</label>

          <input type="text" name="email" value="<?php if(isset($_SESSION["email"])){echo  $_SESSION["email"];}?>">

        </li>
        <li>
          <label for="paswoord">paswoord</label>
          <input type="text" name="paswoord" value="<?php if(isset($_SESSION["pwd"])){echo  $_SESSION["pwd"];}?>">
					<button type="submit" name="random" value="">genereer een paswoord</button>
        </li>
      </ul>
      <button type="submit" name="opslaan" value="opslaan">opslaan</button>
    </form>



  </body>
</html>

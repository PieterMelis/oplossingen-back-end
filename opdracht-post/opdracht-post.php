<?php
$password = "wachtwoord";
$username = "pieter";
$message = " ";


if(isset($_POST['submit'])){
if($_POST['username'] == $username && $_POST['password'] == $password){
  $message="welkom " . $username;
}else{
  $message="Er ging iets mis bij het inloggen, probeer opnieuw";
}
}
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht post</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>
<body class="web-backend-opdracht">

<section class="body">

	<h1>Inloggen</h1>


	<form action="oplossing-post.php" method="POST">

				<label for="username">Gebruikersnaam</label>
				<input type="text" name="username" id="username">

				<label for="password">Paswoord</label>
				<input type="password" name="password" id="password">
  <div>

  		<input type="submit" name="submit" value="Verzend">
  </div>
	</form>
    <p><?php echo($message); ?></p>
    </section>
</body>
</html>

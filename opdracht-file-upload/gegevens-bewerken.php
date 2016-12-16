<?php

session_start();
	if(!isset($_COOKIE["login"]))
	{
		$_SESSION['errorLogin'] = "U moet eerst inloggen";
		header("Location: login-form.php?");
	}







?>

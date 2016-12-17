<?php

session_start();

if (isset($_POST['submit'])) {

  if (isset($_POST["email"])) {
    $_SESSION["email"] = $_POST["email"];
  }
  if (isset($_POST["message"])) {
    $_SESSION["message"] = $_POST["message"];
  }

    $_SESSION["foutboodschappen"] = "kan bericht  versturen";

    header("location: contact-form.php");
}else {
  $_SESSION["foutboodschappen"] = "kan bericht niet versturen";

  header("location: contact-form.php");
}



?>

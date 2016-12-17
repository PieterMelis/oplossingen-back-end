<?php

session_start();

  if(isset($_COOKIE["login"]))
  {
    if (isset($_POST["submit"]))
    {
      define('ROOT', dirname(__FILE__));

      if ( (($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 2000000) )
      {
        $timestamp = new DateTime();
        $file_name = $timestamp->getTimestamp(). "_" . $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $file_name ));

        $db = new PDO("mysql:host=localhost;dbname=opdracht-file-upload2", "root", "");
        $usersQuery = 'UPDATE users SET email=:email, profile_picture=:profo WHERE id=:id';
        $users = $db->prepare($usersQuery);
        $users->bindvalue(':email', $_POST['email']);
        $users->bindvalue(':profo', $file_name);
        $users->bindvalue(':id', $_SESSION['id']);

        $users->execute();
        $_SESSION['errorGegevens'] = "Gegevens werden succesvol gewijzigd";
        header("Location: gegevens-wijzigen-form.php");
      }else{
        $_SESSION['errorGegevens'] = "dit is geen foto";
        header("Location: gegevens-wijzigen-form.php");
      }
    }
}


?>

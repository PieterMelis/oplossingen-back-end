<?php
//made by Pieter Melis
//goede uitleg --> http://www.w3schools.com/php/php_file_upload.asp
session_start();
  if(isset($_COOKIE["login"]))
  {
    if (isset($_POST["submit"]))
    {
      if ( (($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 2000000) )
				{
      define('ROOT', dirname(__FILE__));

        // maak een nieuwe instatie van DateTime --> info gevonden op google
        $timestamp = new DateTime();
        // naam van nieuwe foto
        $file_name = $timestamp->getTimestamp(). "_" . $_FILES["file"]["name"];
        //verplaatst naar een nieuwe locatie
        move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $file_name ));

        //update in database
        $db = new PDO("mysql:host=localhost;dbname=opdracht-file-upload2", "root", "");
        $usersQuery = 'UPDATE users SET email=:email, profile_picture=:profo WHERE id=:id';
        $users = $db->prepare($usersQuery);
        $users->bindvalue(':email', $_POST['email']);
        $users->bindvalue(':profo', $file_name);
        $users->bindvalue(':id', $_SESSION['id']);
        //uitvoeren van update
        $users->execute();

        $user = array();
        $user = explode(",",$_COOKIE["login"]);
        $cookieValue = $_POST["email"]  . "," . $user[1];

        setcookie('login',$cookieValue, time() + 60*60*24);


        //gelukt
        $_SESSION['errorGegevens'] = "Gegevens werden succesvol gewijzigd";
        header("Location: gegevens-wijzigen-form.php");
      }
      }else{
        //niet gelukt
        $_SESSION['errorGegevens'] = "dit is geen foto";
        header("Location: gegevens-wijzigen-form.php");
      }
    }else {
      //niet gelukt
      $_SESSION['errorGegevens'] = "er is iets mis";
      header("Location: gegevens-wijzigen-form.php");
    }


?>

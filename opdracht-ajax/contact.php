<?php

session_start();

if (isset($_POST['submit'])) {
         if(isset($_POST['email']) && isset($_POST['message']))
         {
             $admin     =   'pietermelis123@gmail.com';
             $sender	 =		$_POST['email'];
             $message		=		$_POST['message'];
             $copy			=		(isset($_POST['copy'])) ? true : false;

             try
             {
                 $db = new PDO('mysql:host=localhost;dbname=opdracht-mail', 'root', '');

                 $dbQuery = 'INSERT INTO contact_messages (email, message, time_sent)
                         VALUES (:email, :message, NOW())';

                 $statement = $db->prepare($dbQuery);
                 $statement->bindvalue(':email', $sender);
                 $statement->bindvalue(':message', $message);

                 $statement->execute();
                  $headers = 'From: ' . $admin;
                 //mail($admin, "Bericht van " . $sender, $message, $headers);

                 if ($copy)
                 {
                   //mail($_POST["email"], "Jouw bericht", $message, $headers);
                 }
                 $_SESSION["foutboodschappen"] = "Verzonden";

                 unset($_SESSION);
             }
             catch(PDOException $e)
             {
                 $_SESSION["foutboodschappen"] = "Fout met database";
             }
         }
         else
         {
             $_SESSION["foutboodschappen"] = "Er zijn nog lege velden";
         }
}else {
  $_SESSION["foutboodschappen"] = "kan bericht niet versturen";


}

header('location: contact-form.php' );





?>

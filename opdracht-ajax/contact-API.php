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
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
  $ajaxMessage['type']	=	'success';

  echo json_encode($ajaxMessage);
}
else
{
  $_SESSION["foutboodschappen"] = 	'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.';

}

header('location: contact-form.php');



?>

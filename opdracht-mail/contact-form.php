<?php
session_start();

if (isset($_SESSION["email"])) {
  $email = $_SESSION["email"];
}
if (isset($_SESSION["message"])) {
  $message = $_SESSION["message"];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mail</title>
  </head>
  <body>
      <h1>Contacteer ons</h1>



      <?php if (isset($_SESSION["foutboodschappen"])){echo $_SESSION["foutboodschappen"];} ?>
     <form action="contact.php" method="post">
         <ul>
             <li>
                 <label for="email">E-mailadres</label>
                 <input type="text" id="email" name="email" value="<?php if(isset($email)){echo $email;}?>">
             </li>
             <li>
                 <label for="message">Boodschap</label>
                 <textarea name="message" id="message" cols="30" rows="10" value="<?php if(isset($message)){echo $message;}?>"></textarea>
             </li>
             <li>
                 <input type="checkbox" name="copy" id="copy">
                 <label for="copy">Stuur een kopie naar mezelf</label>
             </li>
         </ul>
         <input type="submit" name="submit">
     </form>
  </body>
</html>

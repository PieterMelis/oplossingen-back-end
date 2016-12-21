<?php
session_start();
$test = "";

if (isset($_SESSION["email"])) {
  $email = $_SESSION["email"];
}
if (isset($_SESSION["message"])) {
  $message = $_SESSION["message"];
}
if (isset($_SESSION["foutboodschappen"]))
{
  $test =  $_SESSION["foutboodschappen"];
  unset($_SESSION['foutboodschappen']);
}

var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajax</title>
  </head>
  <body>
      <h1>Contacteer ons</h1>



      <?php  if(isset($test)){echo $test;}?>
      <div class="form_location">
        <form action="contact-API.php" method="post">
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
      </div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script>
     $( document ).ready(function() {
        $('#form').submit(function(){
          var info = $("#form").serialize();
          $.ajax({
               type: 'POST',
               url: 'contact-API.php',
               data: info,
               success: function(data) {
                 data = JSON.parse(data);

                 if(data["type"] == "success") {

                         $("#form").fadeOut(500, function(){
                             $(".form_location").append("<p>Bedankt! Uw bericht is goed verzonden!</p>").hide().fadeIn(500);
                         });
                     }
                     if(data["type"] == "error") {
                         $(".form_location").prepend("<p class='err'>Oeps, er ging iets mis. Probeer opnieuw!</p>").hide().fadeIn(500);
                     }

                   }
               }
        });
     });
});



     </script>
  </body>
</html>

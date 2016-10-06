<?php
$jaar			      =	1904;

if ( ( ($jaar % 4 == 0) && ($jaar % 100 != 0)) || ($jaar % 400 == 0  ))
{
  $antwoord = "een schrikkeljaar";
  }
else {
    $antwoord = "geen schrikkeljaar";

}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Deel 1</h1>
    <p> <?php echo $jaar ?> is <?php echo $antwoord ?>  </p>

    <p>
      Om te controleren kan je het
      <a href="http://www.jetcityorange.com/leap-year/dutch.html" target="_blank">hier</a> terug vinden.
  </body>
</html>

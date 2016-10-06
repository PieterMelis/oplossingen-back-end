<?php


	$getal = 1;

	if ($getal == 1)
	{
		$day = "Maandag";
	}
	if ($getal == 2)
	{
		$day = "Dinsdag";
	}
	if ($getal == 3)
	{
		$day = "Woensdag";
	}
	if ($getal == 4)
	{
		$day = "Donderdag";
	}
	if ($getal == 5)
	{
		$day = "Vrijdag";
	}
	if ($getal == 6)
	{
		$day = "Zaterdag";
	}
	if ($getal == 7)
	{
		$day = "Zondag";
	}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Deel 2</h1>

      <p>Zet de naam van de dag doormiddel van een string-functie dan naar hoofdletters om :
        <b><?php  echo strtoupper($day);?></p></b>
      <p>Zet alle letters in hoofdletters, behalve de 'a' :
        <b><?php echo str_replace("A", "a", strtoupper($day)); ?></p></b>
      <p>bZet alle letters in hoofdletters, behalve de laatste 'a' :
        <b><?php echo substr_replace( strtoupper($day), 'a', strrpos($day, "a"), 1 ); ?></p></b>

  </body>
</html>

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
    <h1>Deel 1</h1>
    <p>
      In $getal zit waarde 1 dus het is vandaag <?php echo $day; ?>
    </p>

  </body>
</html>

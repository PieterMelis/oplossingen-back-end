<?php
//Deel1
	$fruit = 'kokosnoot';
	$fuitLength = strlen($fruit);
	$posO = strpos($fruit,"o");
	//Deel2
	$fruit2 = 'ananas';
	$posA = strrpos($fruit2,"a");
	$fruit2Up = strtoupper($fruit2);
	//Deel3
	$lettertje = 'e';
	$cijfertje = 3;
	$langsteWoord = 'zandzeepsodemineralenwatersteenstralen';


?>

<!DOCTYPE html>
<mtml>
<head></head>
<body>
<h1>Deel1</h1>
<p>
	De lengte van $fruit is
	<b><?php echo $fruit ?></b>
</P>
<p>
	De "o" in <?php echo $fruit ?> staat  voor het eerst op positie
	<b><?php echo $posO ?></b>
</p>

<h1>Deel2</h1>
<p>
	De Laatste a in <?php echo $fruit2 ?> staat op positie <b><?php echo $posA ?></b>
</P>
<p>
	<?php echo $fruit2 ?> in hoofdletters is <b><?php echo $fruit2Up ?></b>
</p>

<h1>Deel3</h1>
<?php echo str_replace($lettertje,$cijfertje,$langsteWoord); ?>


</body>
</html>

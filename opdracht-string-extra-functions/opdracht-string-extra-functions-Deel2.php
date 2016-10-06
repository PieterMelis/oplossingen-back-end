<?php
//Deel1
	$fruit = 'kokosnoot';
	$fuitLength = strlen($fruit);
	$posO = strpos($fruit,"o");
	//Deel2
	$fruit2 = 'ananas';
	$posA = strrpos($fruit2,"a");
	$fruit2Up = strtoupper($fruit2);


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

</body>
</html>

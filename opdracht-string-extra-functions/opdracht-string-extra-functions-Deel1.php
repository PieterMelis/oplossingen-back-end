<?php
//Deel1
	$fruit = 'kokosnoot';
	$fuitLength = strlen($fruit);
	$posO = strpos($fruit,"o");



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



</body>
</html>

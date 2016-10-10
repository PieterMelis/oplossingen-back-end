<?php

function drukArrayAf($arrayOne)
{

  for ($i=0; $i < count($arrayOne) ; $i++) {
		echo  "[". $i ."]  heeft waarde:". $arrayOne[$i]. "<br>";

	}

}
$eenTotTien  = array('één','twee','drie','vier','vijf','zes','zeven','acht','negen','tien' );
drukArrayAf($eenTotTien);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>functies: deel 2</h1>
    <h3>Array afdrukken</h3>
    <ul>



    </ul>
  </body>
</html>

<?php

function drukArrayAf($arrayOne)
{
  for ($i=0; $i < count($arrayOne) ; $i++) {
		$x[] =  "[". $i ."]  heeft waarde:". $arrayOne[$i];
	}
return $x;
}

function validateHtmlTag($html)
{
  if (strpos($html, '<html>') !== true && strpos($html, '</html>') !== true) {

        $HTMLcheck=" HET IS HTML !";
    	}
    	else{
    		$HTMLcheck=" HET IS GEEN HTML !";
    	}
    	return $HTMLcheck;

}


$htmlZin      = " <html><head><title>Dit is een test</title></head><body>Tekst</body></html>" ;
$htmlRes      = validateHtmlTag($htmlZin);

$eenTotTien   = array('één','twee','drie','vier','vijf','zes','zeven','acht','negen','tien' );
$arrayTwee    = array('auto','fiets','step');
$xx           = drukArrayAf($eenTotTien);
$xxx          = drukArrayAf($arrayTwee);


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>functies: deel 2</title>
  </head>
  <body>
    <h1>functies: deel 2</h1>
    <h3>Array afdrukken</h3>
    <ul>
      <?php foreach ($xx as $key => $value): ?>
        <li><?= $value ?></li>
      <?php endforeach; ?>
    </ul>
    <h3>Tweede array afdrukken</h3>
    <ul>
      <?php foreach ($xxx as $key => $value): ?>
        <li><?= $value ?></li>
      <?php endforeach; ?>
    </ul>
    <h3>Valideren</h3>
    <code><?php echo htmlentities( $htmlZin ) ; ?></code>
    <?php echo $htmlRes; ?>
  </body>
</html>

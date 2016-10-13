
 <?php

 	function vraagstuk( $jaar )
 	{
 		static $jaar		=	1;
 		static $jaren	=	array();
    static $pers      = 1.08;
    static $persMin     = 0.08;
    $tienjaar   = 10;
    static 	$geëfdGeld  	=	100000;

 		if ( $jaar <=  $tienjaar)
 		{
 			$rente             = floor($geëfdGeld * $persMin) ;
      $geëfdGeld         = floor($geëfdGeld * $pers)  ;
 			$jaren[]	       =	"Het bedrag is nu ".$geëfdGeld." euro ( waarvan ".$rente ." rente)";

 			vraagstuk(++$jaar);


 		}else {
 		  return $jaren;
 		}

 	}



 	$winst = vraagstuk( 10 );
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht-functions-recursive deel1</title>
  </head>
  <body>
    <h1>functions-recursive deel1</h1>
    <?php foreach($winst as $bedrag): ?>
      <li><?= $bedrag ?></li>
    <?php endforeach ?>
    <pre><?php print_r(vraagstuk( $jaar )) ?></pre>


  </body>
</html>


 <?php

 	function vraagstuk( $beginWaarde,$tienjaar )
 	{
 		static $i		=	1;
 		static $jaren	=	array();
    static $pers      = 1.08;
    static $persMin     = 0.08;

 		if ( $i <= $tienjaar )
 		{
 			$rente             = floor($beginWaarde * $persMin) ;
      $jaarlijks         = floor($beginWaarde * $pers)  ;
 			$jaren[ $i ]	     =	"Het bedrag is nu ".$jaarlijks." euro ( waarvan ".$rente ." rente)";

 			$i++;

 			return vraagstuk( $jaarlijks,  $tienjaar );
 		}
 		else
 		{
 			return $jaren;
 		}
 	}

 	$geëfdGeld  	=	100000;

 	$aantalJaar		=	10;

 	$winst = vraagstuk( $geëfdGeld ,  $aantalJaar );
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
  </body>
</html>

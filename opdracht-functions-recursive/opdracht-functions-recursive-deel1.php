
 <?php

 	function vraagstuk( $beginWaarde )
 	{
 		static $i		=	0;
 		static $jaren	=	array();
    static $pers      = 1.08;
    static $persMin     = 0.08;
    $tienjaar   = 10;

 		if ( $i <=  $tienjaar)
 		{
 			$rente             = floor($beginWaarde * $persMin) ;
      $jaarlijks         = floor($beginWaarde * $pers)  ;
 			$jaren[$i]	       =	"Het bedrag is nu ".$jaarlijks." euro ( waarvan ".$rente ." rente)";

 			$i++;
      return $jaren;
      return vraagstuk( $beginWaarde );
 		}

 	}

 	$geëfdGeld  	=	100000;

 	$winst = vraagstuk( $geëfdGeld );
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

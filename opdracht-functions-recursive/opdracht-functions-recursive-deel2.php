
 <?php

 	function vraagstuk( $jaar, $jaren, $pers, $persMin, $tienjaar, $geëfdGeld )
 	{

 		if ( $jaar <=  $tienjaar)
 		{
 			$rente             = floor($geëfdGeld * $persMin) ;
      $geëfdGeld         = floor($geëfdGeld * $pers)  ;
 			echo	"Het bedrag is nu ".$geëfdGeld." euro ( waarvan ".$rente ." rente)<br />";

 			vraagstuk(++$jaar , $jaren, $pers, $persMin, $tienjaar, $geëfdGeld );

 		}else {
 		  return $jaren ;
 		}
 	}

  $jaar		    = 1;
  $jaren	    =	array();
  $pers       = 1.08;
  $persMin    = 0.08;
  $tienjaar   = 10;
  $geëfdGeld  = 100000;
  

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht-functions-recursive deel2</title>
  </head>
  <body>
    <h1>functions-recursive deel2</h1>

    <p><?= vraagstuk( $jaar, $jaren, $pers, $persMin, $tienjaar, $geëfdGeld ); ?></p>
  </body>
</html>

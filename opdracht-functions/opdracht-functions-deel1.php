<?php
$getal1 = 2;
$getal2 = 8;
$getal  = 55;

function berekenSom($getal1, $getal2)
{
  $tot = $getal1 + $getal2;
  return $tot;
}
function vermenigvuldig($getal1, $getal2)
{
  $tot2 = $getal1 * $getal2;
  return $tot2;
}
function isEven($getal)
{
  if ($getal%2 == 0) {
    return true;
  } else {
    return false;
  }

}
function string1($string)
{
  $newString = strtoupper($string);
  return $newString;
}
$som          = berekenSom($getal1, $getal2);
$vermenig     = vermenigvuldig($getal1, $getal2);
$evenOfOneven = isEven($getal);
$zin          = "Ik maak nooit foutne. Laatst dacht ik dat ik een fout had gemaakt, maar ik had het fout.";
$string1      = string1($zin);
$stringChars  = str_split($string1);
$stringcount  = count($stringChars);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>opdracht-functions deel 1</h1>
    <h3>BerekenSom</h3>
    <p><?php echo $getal1; ?> plus <?php echo $getal2; ?> is <?php echo $som; ?></p>
    <h3>Vermenigvuldig</h3>
    <p><?php echo $getal1; ?> maal <?php echo $getal2; ?> is <?php echo $vermenig; ?></p>
    <h3>Even of oneven</h3>
    <?php if ( $evenOfOneven ): ?>

      <p>Het getal <?php echo $getal ?> is even</p>
    <?php else: ?>

      <p>Het getal <?php echo $getal ?> is oneven</p>
    <?php endif ?>


    <h3>Uppercase-versie</h3>
    Uppercase => <?php echo $string1;?>
    <h3>Lengte</h3>
    Lengte => <?php echo $stringcount;?>
  </body>
</html>

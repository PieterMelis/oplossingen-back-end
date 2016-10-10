<?php
$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
$Length     = strlen($md5HashKey);


function Function2TellenHoeveelProcent($value,$getal)
{
  global $md5HashKey;
  global $Length;
  $countChar  = substr_count($value, $getal );
  $totaal     = $countChar/ $Length * 100 ;
  return $totaal;

}
function Function8TellenHoeveelProcent($value,$getal)
{
  $countChar  = substr_count($value, $getal );
  $totaal     = $countChar/ $Length * 100 ;
  return $totaal;
}
function FunctionATellenHoeveelProcent($value,$getal)
{
  $countChar  = substr_count($value, $getal );
  $totaal     = $countChar/ $Length * 100 ;
  return $totaal;
}
$tweeChar   = "2";
$achtChar   = "8";
$aChar      = "a";
$twee = Function2TellenHoeveelProcent($md5HashKey,$tweeChar);
$acht = Function2TellenHoeveelProcent($md5HashKey, $achtChar );
$A = Function2TellenHoeveelProcent($md5HashKey, $aChar);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht-functions-gevorderd</title>
  </head>
  <body>
    <h1>opdracht-functions-gevorderd Deel 1</h1>
    <p>De <?= $tweeChar; ?> komt <?= $twee; ?>% voor in de string <?= $md5HashKey; ?></p>
    <p>De <?= $achtChar; ?> komt <?= $acht; ?>% voor in de string <?= $md5HashKey; ?></p>
    <p>De <?= $aChar; ?> komt <?= $A; ?>% voor in de string <?= $md5HashKey; ?></p>

  </body>
</html>

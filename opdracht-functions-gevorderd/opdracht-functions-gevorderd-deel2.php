<?php
$pigHealth = 5;
$maximumThrows = 8;

function calculateHit()
{
  global $pigHealth;

  $valuePer = rand(0,100);
  $pros     = 40;

  if ($valuePer <= $pros ) {
    $pigHealth--;
    $stringAnt["x"]  = 'Raak! Er zijn nog maar '.$pigHealth.' varkens over.';
  }else {
    $stringAnt["x"]  = 'Mis! Nog '.$pigHealth.' varkens in het team.';
  }
  return $stringAnt;
}
function launchAngryBird()
{
  global $conclusie, $pigHealth, $maximumThrows;
  static $variableOmBijTeHoudenHoeveelKeerDeFunctieReedsIsAangeroepen = 0;

  if ($variableOmBijTeHoudenHoeveelKeerDeFunctieReedsIsAangeroepen <= $maximumThrows) {
    $variableOmBijTeHoudenHoeveelKeerDeFunctieReedsIsAangeroepen++;
     $conclusie[] = calculateHit()["x"];
    launchAngryBird();
  }else{
    if ($pigHealth == 0) {
      $conclusie[]    = 'Gewonnen!';
    }else {
      $conclusie[]    =  'Verloren!' ;
  }

}
return $conclusie;
}
$test = calculateHit()["x"];
launchAngryBird();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>functions-gevorderd-deel2</title>
  </head>
  <body>
    <h1>functions-gevorderd-deel2</h1>
    <?php echo $test; ?>
    <?php foreach ($conclusie as $string): ?>
      <p><?= $string ?></p>
    <?php endforeach; ?>
  </body>
</html>

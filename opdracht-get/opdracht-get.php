<?php
$artikels = array(
    array('titel' => 'Acht internetreuzen eisen beperkingen NSA-spionage',
          'datum' => '9 december 2013',
          'inhoud' => 'Acht belangrijke technologiebedrijven, zoals Googl...',
          'afbeelding' => '1.jpg',
          'afbeeldingBeschrijving' => 'Mark Zuckerberg'
        ),
    array('titel' => 'Wilde weldoener stopt geld in brievenbussen',
          'datum' => '9 december 2013',
          'inhoud' => 'Bewoners van twee appartements­blokken in Koksijd...',
          'afbeelding' => '2.jpg',
          'afbeeldingBeschrijving' => 'twee appartements­blokken',
        ),
    array('titel' => 'Originele stukken Hergé geveild voor honderdduizenden euro’s',
          'datum' => '9 december 2013',
          'inhoud' => 'Twee originele stukken van Hergé zijn zondag voor...',
          'afbeelding' => '3.jpg',
          'afbeeldingBeschrijving' => 'Kuifje',
        )
);


var_dump( $_GET );


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opdracht-get</title>
  </head>
  <body>
    <style media="screen">
      .art{
        width: 288px;
        margin: 16px;
        padding: 16px;
        box-sizing: border-box;
        background-color: #EEEEEE;
        display: block;
        float: left;
      }
      img {
        border: 1px solid lightgrey;
        max-width: 100%;
}
    </style>
    <?php if (!$_GET): ?>
      <h1>De krant van vandaag</h1>
      <section class="articles">
        <?php foreach ($artikels as $key => $value): ?>


        <div class="art">
          <h3><?= $value['titel']?></h3>
          <hr>
          <h5><?= $value['datum']?></h5>
          <img src="<?= $value['afbeelding']?>" alt="<?= $value['afbeeldingBeschrijving']?>" />
          <p><?= $value['inhoud']?></p>
          <a href="opdracht-get.php?id=<?= $key ?>"><p> Lees meer> </p></a>
        </div>
        <?php endforeach; ?>
      </section>
    <?php elseif($_GET["id"]==0): ?>

    <?php endif; ?>


  </body>
</html>

<?php
$artikels = array(
    array('titel' => 'Mertens schittert naast Messi in de spits in het Team van de Week',
          'datum' => 'DO 20/10/2016 - 14:39',
          'inhoud' => 'Dries Mertens heeft nog wat meer harten veroverd met zijn prestatie gisteren tegen Besiktas.
                      Zijn wedstrijd, waarin hij scoorde en twee penaltys uitlokte, leveren hem een plaatsje op in het CL-elftal van de week.
                      Hij vertoeft in goed gezelschap in de spits. Hij speelt er samen met Cavani (PSG) en Barcelona-ster Messi.
                      Ook Yannick Carrasco maakte gisteren een belangrijk doelpunt bij Atletico, maar voor hem is er geen plaats meer vrij.',
          'afbeelding' => '1.jpg',
          'afbeeldingBeschrijving' => 'Mark Zuckerberg'
        ),
    array('titel' => 'Nieuwe studie toont aan dat er 40 jaar geleden waarschijnlijk tóch leven werd gevonden op Mars',
          'datum' => '9 december 2013',
          'inhoud' => 'De nieuwe studie werd uitgevoerd door Gilbert Levin van de universiteit van Arizona en Patricia Ann Straat van het Nationaal Gezondheidsinstituut in Bethesda, Maryland. Allebei waren ze ook betrokken bij de oorspronkelijke missie van de Vikingsatellieten en hun landers in 1976.
                      Het was toen de meest ambitieuze poging van de wetenschap om de rode planeet te verkennen.
                      Vikings
                      In maart 1976 kwamen de twee Vikings in een baan rond Mars, iets minder dan een jaar nadat ze op aarde waren vertrokken. Ze brachten als eerste de volledige oppervlakte van de planeet in kaart en ontdekten aanwijzingen dat er water op de planeet was. Of toch ooit was geweest.
                      Op 20 juli zette de eerste Vikinglander een poot aan de grond op Mars, zes weken later ook de tweede, zon 4.000 kilometer verderop. Ze zouden drie tests uitvoeren en als er ook maar één positief zou zijn, zou geconcludeerd kunnen worden dat de rode planeet bewoond was.

                      Geluk
                      De eerste test - waarbij de bodem werd verhit en de moleculen werden gemeten die in gas veranderden - was negatief. En ook de tweede - waarbij aan een bodemstaal helium, water en voedingsstoffen werden toegevoegd om te zien of er een teken van leven was - kwam negatief terug. Maar bij de derde test hadden de wetenschappers meer geluk.

                      Bij die test werden voedingsstoffen toegevoegd aan een bodemstaal en vervolgens gelabeld met het radioactieve C14. Als er leven was, zou dat laatste element veranderen in radioactief kooldioxide, zoals op aarde. En dat gebeurde, bij de stalen van allebei de landers.

                      Controletest
                      Een controletest - die moest uitmaken of het resultaat biologisch was of misschien eerder een chemisch proces - was echter niet duidelijk en dat bracht alom twijfel of er nu echt leven was gevonden of niet. De experimenten werden nooit verder gezet, dus het resultaat bleef onbeslist.',

          'afbeelding' => '2.jpg',
          'afbeeldingBeschrijving' => 'twee appartements­blokken',
        ),
    array('titel' => 'Ruim helft Europeanen kampt met overgewicht',
          'datum' => '9 december 2013',
          'inhoud' => 'In de Europese Unie heeft meer dan de helft (51,6 procent) van de volwassenen overgewicht. Uit een rapport van het Europese statistiekbureau Eurostat, dat zich baseert op cijfers uit 2014, blijkt zelfs dat bijna een op de zes 18-plussers kampt met obesitas (Body Mass Index van 30 of meer). België hoort bij de landen met het laagste aandeel obesen.
                      In 2014 had 46,1 procent van de volwassen Europeanen een normaal gewicht, terwijl 35,7 procent met pre-obesitas (BMI tussen 25 en 30) kampte en 15,9 procent met obesitas. Slechts 2,3 procent van de 18-plussers had ondergewicht (BMI van minder dan 18,5).

                      Er bestaat bij het aandeel obesen geen systematisch verschil tussen man en vrouw, zo blijkt uit de cijfers. Leeftijd speelt echter wel een belangrijke rol: tot de leeftijdsgroep 65-74 jaar (gemiddeld 22,1 procent) blijft het aandeel obesen stijgen. Dat patroon is ook te zien bij het opleidingsniveau: hoe hoger dat is, hoe minder obesitas. Bij laagopgeleiden gaat het om 19,9 procent, bij middenopgeleiden om 16 procent en bij hoogopgeleiden om slechts 11,5 procent.

                      België scoort met een aandeel obesen van 14 procent onder het Europese gemiddelde. Ons land staat zelfs op een met Zweden gedeelde vierde plaats van landen met het laagste aandeel van obesitas, na Roemenië (9,4 procent), Italië (10,7 procent) en Nederland (13,3 procent). Enkel binnen de leeftijdsgroep 25-34 jaar is het aandeel obesen in België (11 procent) hoger dan het gemiddelde in de EU (9,9 procent).

                      De landen die het slechts scoren zijn Malta (26 procent), Letland (21,3 procent), Hongarije (21,2 procent), Estland (20,4 procent) en het Verenigd Koninkrijk (20,1 procent).
                      ',
          'afbeelding' => '3.jpg',
          'afbeeldingBeschrijving' => 'Kuifje',

        )
);
$inArtikel		=	false;


if ( isset ( $_GET['id'] ) )
{
  $id = $_GET['id'];

  if ( array_key_exists( $id , $artikels ) )
  {
    $artikels 			= 	array( $artikels[$id] );
    $inArtikel	=	true;
  }
  else
  {
    $inArtikel	=	true;
  }
}

$notInartikel = false;

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
	<?php if ( !$notInartikel ): ?>
      <h1>De krant van vandaag</h1>
      <section class="articles">
        <?php foreach ($artikels as $key => $value): ?>


        <div class="art">
          <h3><?= $value['titel']?></h3>
          <hr>
          <h5><?= $value['datum']?></h5>
          <img src="<?= $value['afbeelding']?>" alt="<?= $value['afbeeldingBeschrijving']?>" />


          <?php if (!$inArtikel): ?>
            <?php echo substr( $value['inhoud'], 0, 50 ). "..." ?>
            <a href="opdracht-get.php?id=<?= $key ?>"><p> Lees meer> </p></a>
            <?php else: ?>
              <?php echo $value['inhoud'] ?>
          <?php endif; ?>

        </div>
        <?php endforeach; ?>
      </section>
    <?php else: ?>
      <p>Het artikel <?php echo $id ?> is niet gevonden.</p>
    <?php endif ?>



  </body>
</html>

<?php
$i =0;
$boodschappenlijstje                = array('melk',
                                            'koekjes',
                                            'Martini',
                                            'Aardappelen',
                                            'Bakpapier',
                                            'Vruchtensap',
                                            'Shampoo',
                                            '6 eieren',
                                            'Kookroom',
                                            'WC papier',
                                            'Keukenrol',
                                            'Gehakt',
                                            'Kipfilet',
                                            'Tomaten',
                                            'Komkommer',
                                            'Winterpeen',
                                            'Avocado',
                                            'Condooms',
                                            'Sla',
                                            'Kaas',
                                            'Mozzarella',
                                            'Rogge brood',
                                            'Ontbijt koek',
                                            'Bruin stokbrood',
                                            'Appels',
                                            'Peren',
                                            'Sinasappels',
                                            'Bananen',
                                            'Mandarijnen / kiwi’s',
                                            'Perziken/ pruimen',
                                            'Komkommers',
                                            'Tomaten',
                                            'Paprika’s',
                                            'Wortels',
                                            'Uien',
                                            'Bloemkool',
                                            'Broccoli',
                                            'Prei',
                                            'Courgettes',
                                            'Aubergine',
                                            'Knoflook',
                                            'Champignons',
                                            'Oesterzwammen',
                                            'Paddenstoelen',
                                            'Honing',
                                            'Kaneelpoeder',
                                            'Cacao poeder',
                                            'Rozijnen',
                                            'Walnoten',
                                            'Amandelnoten',
                                            'Pecannoten',
                                            'Zwarte chocolade',
                                            'Tutti-Frutti ( = gedroogd fruit)',
                                            'Zalm',
                                            'Markeel',
                                            'Garnalen',
                                            'Pangasius',
                                            'Haring',
                                            'Anjovis',
                                            'Tonijn',
                                            'Sardines',
                                            'Kipfilet',
                                            'Kipgehakt',
                                            'Kalkoen',

                                          );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>While deel 2</h1>
    <h3>boodschappen </h3>
    <ul>
      <?php while ($i < count($boodschappenlijstje)): ?>
         <li> <?= $boodschappenlijstje[$i] ?></li>
         <?php $i++ ?>
      <?php endwhile ?>
    </ul>

  </body>
</html>

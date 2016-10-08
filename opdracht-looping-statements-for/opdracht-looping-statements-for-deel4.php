<?php
  $rijen = 10;
  $kolommen = 10;


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table tr td {
        padding: 10px;
        border: 1px solid black;
        text-align: center;
        font-size: 1.5em;
        }
        .groen {
          background-color: lightgreen;
        }
        th, .tafel {

        font-weight: bold;
        text-align: center;
        padding: 10px;
        border: 1px solid black;
        text-align: center;
        font-size: 1.5em;
        }
    </style>
  </head>
  <body>
    <h1>For deel 4</h1>
    <table>
      <thead>
        <th>Tafel</th>
        <?php for ($i=0; $i < $rijen+1; $i++): ?>
          <th><?php  echo $i; ?></th>
          <?php endfor; ?>
      </thead>
      <tbody>
      <?php for ($i=0; $i < $rijen+1; $i++): ?>
        <tr>
          <td class="tafel"><?= $i; ?></td>
          <?php for ($a=0; $a < $kolommen+1; $a++): ?>

            <?php if(($i * $a)% 2 != 0): ?>
              <td class="groen"><?php $tot = $i * $a; echo $tot; ?></td>
            <?php else : ?>
              <td><?php $tot = $i * $a; echo $tot; ?></td>
            <?php endif; ?>
          <?php endfor; ?>
        </tr>

      <?php endfor; ?>
    </tbody>
    </table>




  </body>
</html>

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
    </style>
  </head>
  <body>
    <h1>For deel 2</h1>
    <table>
      <?php for ($i=1; $i < $rijen+1; $i++): ?>
        <tr>
          <?php for ($a=1; $a < $kolommen+1; $a++): ?>
            <?php if(($i * $a)% 2 != 0): ?>
              <td class="groen"><?php $tot = $i * $a; echo $tot; ?></td>
            <?php else : ?>
              <td><?php $tot = $i * $a; echo $tot; ?></td>
            <?php endif; ?>
          <?php endfor; ?>
        </tr>

      <?php endfor; ?>
    </table>




  </body>
</html>

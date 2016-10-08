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
      table{


      }
      table tr td {
        padding: 10px;
        border: 1px solid black;
        text-align: center;
        font-size: 1.5em;
}
    </style>
  </head>
  <body>
    <h1>For deel 1</h1>
    <table>
      <?php for ($i=0; $i < $rijen; $i++): ?>
        <tr>
          <?php for ($a=0; $a < $kolommen; $a++): ?>
          <td>kolom</td>
          <?php endfor; ?>
        </tr>

      <?php endfor; ?>
    </table>




  </body>
</html>

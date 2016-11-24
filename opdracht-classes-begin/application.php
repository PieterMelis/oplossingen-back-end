<?php
function autoloader( $className ) {
  require_once("classes/" . $className . ".php");
}
spl_autoload_register("autoloader");
$percent	=	new Percent(150, 100);

?>
<style media="screen">
  table td{
    border: 1px black solid;
  }
</style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Classes Begin</title>
  </head>
  <body>
    <h1>procent: 150 van 100</h1>
    <table>
      <tr>
        <td>
          Absoluut
        </td>
        <td>
          <?php echo $percent->formatNumber($percent->absolute); ?>
        </td>
      </tr>
      <tr>
        <td>
          Relative
        </td>
        <td>
          <?php echo $percent->formatNumber($percent->relative); ?>
        </td>
      </tr>
      <tr>
        <td>
          Hundred
        </td>
        <td>
          <?php echo $percent->formatNumber($percent->hundred); ?>%
        </td>
      </tr>
      <tr>
        <td>
          Nominal
        </td>
        <td>
          <?php echo $percent->nominal; ?>
        </td>
      </tr>
    </table>
  </body>
</html>

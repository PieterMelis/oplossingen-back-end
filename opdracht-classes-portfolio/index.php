<?php
function loadDoc($class)
{
  if (file_exists('classes/'.$class.'php')) {
    require_once('classes/'.$class.'.php');
  }
}

spl_autoload_register("loadDoc");
$HTMLBuilder= new HTMLBuilder("header-partial.php","body-partial.php","footer-partial.php");

?>

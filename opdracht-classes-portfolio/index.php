<?php
$headerNew = "header-partial.php";
$bodyNew = "body-partial.php";
$footerNew = "footer-partial.php";

$class = "HTMLBuilder";
function __autoload($class)
{
    require_once('classes/'.$class.'.php');

}

spl_autoload_register("__autoload");

$HTMLBuilder = new HTMLBuilder($headerNew,$bodyNew,$footerNew);


?>

<?php
 $mijnGetal = 93;
 $antwoord = "";

 if ($mijnGetal > 0 && $mijnGetal < 10 ) {
   $antwoord = " ligt tussen 0 en 10";
 }
 else if ($mijnGetal > 10 && $mijnGetal < 20 ) {
   $antwoord = " ligt tussen 10 en 20";
 }
 else if ($mijnGetal > 20 && $mijnGetal < 30 ) {
   $antwoord = " ligt tussen 20 en 30";
 }
 else if ($mijnGetal > 30 && $mijnGetal < 40 ) {
   $antwoord = " ligt tussen 30 en 40";
 }
 else if ($mijnGetal > 40 && $mijnGetal < 50 ) {
   $antwoord = " ligt tussen 40 en 50";
 }
 else if ($mijnGetal > 50 && $mijnGetal < 60 ) {
   $antwoord = " ligt tussen 50 en 60";
 }
 else if ($mijnGetal > 60 && $mijnGetal < 70 ) {
   $antwoord = " ligt tussen 60 en 70";
 }
 else if ($mijnGetal > 70 && $mijnGetal < 80 ) {
   $antwoord = " ligt tussen 70 en 80";
 }
 else if ($mijnGetal > 80 && $mijnGetal < 90 ) {
   $antwoord = " ligt tussen 80 en 90";
 }
 else if ($mijnGetal > 90 && $mijnGetal < 100 ) {
   $antwoord = " ligt tussen 90 en 100";
 }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>opdracht-conditional-statements-if-elseif</h1>
    <p>
       <?php echo  strrev($mijnGetal.$antwoord); ?>.
    </p>
  </body>
</html>

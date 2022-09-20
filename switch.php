<?php

/* Michi 1: 9
Michi 2: 4
Michi 3: 3
Muchi 4: 9
Michi 5: 1
*/

$michi = 2;

switch ($michi) {
  case 4:
  case 1:
    echo "su numero favorito es el 9";
    break;
  case 2:
    echo "su numero favorito es el 4";
    break;
  case 3:
    echo "su numero favorito es el 3";
    break;
  case 5:
    echo "su numero favorito es el 1";
    break;
  default:
    echo "Ese Michi no existe";
}
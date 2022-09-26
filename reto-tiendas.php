<?php

$contador1 = 0;
$contador2 = 1;
$contador3;
$caminos = array(0, 0, 1);

$tienda = readline('A que tienda quieres llegar? ');

for ($i=0; $i < $tienda; $i++) {
  $contador1 = $contador1 + $contador2;
  $contador2 = $contador1 + $contador2;
  $contador3 = $contador1 + $contador2;
  array_push($caminos, $contador2, $contador3);
}

var_dump($caminos);
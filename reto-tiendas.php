<?php

$contador1 = 0;
$contador2 = 1;
$caminos = array(0, 0);

$tienda = readline('A que tienda quieres llegar? ');

if ($tienda <= 0)
  echo "No elegiste la tienda correctamente";

if ($tienda == 1)
  echo "Ya estás en la primera tienda";

if ($tienda > 1) {
  for ($i=0; $i < $tienda; $i++) {
    $contador1 = $contador1 + $contador2;
    $contador2 = $contador1 + $contador2;
    if (count($caminos) <= $tienda) {
    array_push($caminos, $contador1, $contador2);
    } else {
      break;
    }
  }
  echo "Existen $caminos[$tienda] caminos para ir a la tienda $tienda \n";
};
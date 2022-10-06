<?php

// --- valores por defecto

// function suma($a = 1, $b = 1) {
//   echo "La suma de $a + $b es " . $a + $b . "\n";
// }

// suma();

// $arreglo1 = [1, 2, 3];
// $arreglo2 = [4, 5, 6];

// --- array unpacking

// $resultado = [...$arreglo1, ...$arreglo2];

// var_dump($resultado);

// $numeros = [1, 2];

// function suma($a = 1, $b = 1) {
//   echo "La suma de $a + $b es " . $a + $b . "\n";
// }

// suma(...$numeros);

// -- parametros dinamicos

function suma_infinita(...$params) {
  $suma = 0;
  foreach ($params as $key) {
    $suma += $key;
  }
  echo "La sumatoria es $suma \n";
}

suma_infinita(82, 43, 66, 45);


echo "\n";

